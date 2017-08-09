<?php


$all = $_REQUEST['post_all'];

header('Content-Type: application/json');

include("ip.php");

$fp=fopen("visit.txt","a+") or die("Unable to open file!");
fwrite($fp,$it."-".$all."\n");
fclose($fp);		
?>