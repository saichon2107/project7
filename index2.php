<?
session_start();

$current_server_time=$_GET['current_server_time'];

$date = date_default_timezone_set('Asia/Bangkok');
$current_server_time = date("d")."-".date("m")."-".date("y"). " ".date("H:i");
echo ("  pass $current_server_time");



//?>
