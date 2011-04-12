<?php
session_start();
$_SESSION['login']="false";
include('common.php');
include('connection.php');
$email=checkinput($_GET['email']);

if(checkblank($email)){
echo "How're we supposed to log you in!?";
exit();
}
if(checkblank($_GET['password'])){
echo "How're we supposed to log you in!?";
exit();
}

$password=md5($_GET['password']);
$sql="SELECT id from users where email = '".$email."' and password = '".$password."'";
$query=mysql_query($sql);


while($row=mysql_fetch_array($query)){
$_SESSION['uid']=$row['id'];
$_SESSION['login']="true";
}
if($_SESSION['login']=="true"){
echo "logged_in";
}
else{
echo "Incorrect login details.";
}
?>