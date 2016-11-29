<?php
$host        = "host=xxx.xx.xxx.xx";
$port        = "port=5432";
$dbname      = "dbname=xxxx";
$credentials = "user=davi16 password=xxxxxx";

$connect= pg_connect( "$host $port $dbname $credentials"  ) or die ("Could not $
if(!$connect){
  echo "Error : Unable to open database\n";
}
?>

