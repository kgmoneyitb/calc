<?php





$JSON_var_val = JSON_encode($_POST);
$command = escapeshellcmd('/home/calcs/public_html/test.py '.$JSON_var_val);
$output = shell_exec($command);
echo $output;
session_start();
$_SESSION[testpy] = $output;
$_SESSION[JSON_POST] = $JSON_var_val;
include_once("index.php");
session_destroy();

?>