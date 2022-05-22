<?php
  // Original PHP code by Chirp Internet: www.chirpinternet.eu
// Please acknowledge use of this code by including this header.

namespace Chirp;

class Cryptor
{

  protected $method = 'aes-128-ctr'; // default cipher method if none supplied
  private $key;

  protected function iv_bytes()
  {
    return openssl_cipher_iv_length($this->method);
  }

  public function __construct($key = FALSE, $method = FALSE)
  {
    if(!$key) {
      $key = php_uname(); // default encryption key if none supplied
    }
    if(ctype_print($key)) {

      // convert ASCII keys to binary format
      $this->key = openssl_digest($key, 'SHA256', TRUE);
    } else {
      $this->key = $key;
    }
    if($method) {
      if(in_array(strtolower($method), openssl_get_cipher_methods())) {
        $this->method = $method;
      } else {
        die(__METHOD__ . ": unrecognised cipher method: {$method}");
      }
    }
  }

  public function encrypt($data)
  {
   // $data = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, pkcs5_pad($data), MCRYPT_MODE_CBC, $iv);
    $iv = openssl_random_pseudo_bytes($this->iv_bytes());
    return bin2hex($iv) . openssl_encrypt($data, $this->method, $this->key, 0, $iv);
  }

  // decrypt encrypted string
  public function decrypt($data)
  {
    $iv_strlen = 2  * $this->iv_bytes();
    if(preg_match("/^(.{" . $iv_strlen . "})(.+)$/", $data, $regs)) {
      list(, $iv, $crypted_string) = $regs;
      if(ctype_xdigit($iv) && (strlen($iv) % 2 == 0)) {
        return openssl_decrypt($crypted_string, $this->method, $this->key, 0, hex2bin($iv));
      }
    }
    return FALSE; // failed to decrypt
  }

  public function pkcs5_pad($text) {
    $size = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
    $pad = $size - (strlen($text) % $size);
    return $text . str_repeat(chr($pad), $pad);
}

}

use \Chirp\Cryptor;

  $token = "simon";

  $encryption_key = 'KDsxdfp2ijK6XqdB';
  $cryptor = new Cryptor($encryption_key);
  $crypted_token = $cryptor->encrypt($token);
 //$a = $cryptor->pkcs5_pad($token);
 echo "<br>" . $token;

 echo "<br>encriotada : " . $crypted_token;

//  unset($token);

  // $encryption_key = 'KDsxdfp2ijK6XqdB';
  // $cryptor = new Cryptor($encryption_key);

  $token1 = $cryptor->decrypt($crypted_token);

//echo "<br> token 1 ees : " . utf8_decode($token1);

  // using the default encryption key and cipher method
  // $cryptor = new Cryptor();
  // $token = $cryptor->decrypt($crypted_token);

  // echo "<br>" . utf8_decode($token);

  // using a custom key and the default cipher method
  // $encryption_key = 'KDsxdfp2ijK6XqdB';
  // $cryptor = new Cryptor($encryption_key);
  // $token = $cryptor->decrypt($crypted_token);

 //  echo "<br>" . utf8_decode($token);

  // using a custom key and specifying the cipher method
//  $encryption_key = 'KDsxdfp2ijK6XqdB';
  $cipher_method = 'aes-128-cfb';
  $cryptor = new Cryptor($encryption_key, $cipher_method);
  $token = $cryptor->decrypt($crypted_token);

  echo "<br>decriptada : " . utf8_decode($token);

?>