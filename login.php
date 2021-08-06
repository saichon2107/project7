<?
session_start();
$user1_check="somchai";
$user2_check="somchai";
$pass1_check="123456";
$pass2_check="654321";
if(($user==$user1_check)&&($pass==$pass1_check)){
session_register("user1");
session_register("user2");
session_register("pass1");
session_register("pass2");
header("location:member.php");
}else header("location:index2.php");
?>