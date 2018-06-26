<?php

$cachefile = basename($_SERVER['PHP_SELF']).'.cache'; // e.g. cache/index.php.cache
$cachetime = 10; // time to cache in seconds

//var_dump($cachefile);die();

if(file_exists($cachefile) && time()-$cachetime <= filemtime($cachefile)){
  $c = @file_get_contents($cachefile);
  echo $c;
  exit;
}else{
  unlink($cachefile);
}

ob_start();

// all the coding goes here

echo "this is cassshhshse site hahahahha";

$c = ob_get_contents();

//var_dump($c);
$myfile = fopen($cachefile, "a") or die("Unable to open file!");
fwrite($myfile, $c);
var_dump(file_put_contents($cachefile));

?>