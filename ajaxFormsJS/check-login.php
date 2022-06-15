<?php 

$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$ok = true;
$messages = array();

if (!isset($username) || empty($username)) {
	$ok = false;
	$messages[] = 'Username canot be empty';
}

if (!isset($password) || empty($password)) {
	$ok = false;
	$messages[] = 'password canot be empty';
}

if ($ok) {
	if ($username === 'dcode' && $password === 'dcode') {
		$ok = true;
	$messages[] = 'correcto todo';
	} else {
		$ok = false;
	$messages[] = 'datos incorrectos';
	}
	
}

echo json_encode(
	array(
		'ok' => $ok,
		'messages' => $messages
	)
);








 ?>