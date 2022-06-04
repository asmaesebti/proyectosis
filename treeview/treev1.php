<?php 

class TreeView
{
    private $root;
 
    public function __construct($path)
    {
        $this->root = $path;
    }
 
    public function getTree()
    {
        return $this->createStructure($this->root, true);
    }
 
    private function createStructure($directory, $root)
    {
        $structure = $root ? '<ul class="treeview">' : '<ul>';
 
        $nodes = $this->getNodes($directory);
        foreach ($nodes as $node) {
            $path = $directory.'/'.$node;
            if (is_dir($path) ) {
                $structure .= '<li class="treeview-folder">';
                $structure .= '<span>'.$node.'</span>';
                $structure .= self::createStructure($path, false);
                $structure .= '</li>';
            } else {
                $path = str_replace($this->root.'/', null, $path);
                $structure .= '<li class="treeview-file">';
                $structure .= '<a href="download_cloud.php?'.$path.'">'.$node.'</a>';
                $structure .= '</li>';
            }
        }
 
        return $structure.'</ul>';
    }
 
    private function getNodes($directory = null)
    {
        $folders = [];
        $files = [];
 
        $nodes = scandir($directory);
        foreach ($nodes as $node) {
            if (!$this->exclude($node)) {
                if (is_dir($directory.'/'.$node)) {
                    $folders[] = $node;
                } else {
                    $files[] = $node;
                }
            }
        }
 
        return array_merge($folders, $files);
    }
 
    private function exclude($filename)
    {
        return in_array($filename, ['.', '..', 'index.php', '.htaccess', '.DS_Store']);
    }
}
 
$treeView = new TreeView('cloud');
echo $treeView->getTree();

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="treev1.css">

	<title></title>
</head>
<body>

<script type="text/javascript" src="treev1.js"></script>
</body>
</html>

