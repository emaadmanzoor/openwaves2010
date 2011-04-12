<?php
session_start();
include ('common.php');
include('connection.php');

if($_SESSION['login']=="true"){
$sql="SELECT * from users where id=".$_SESSION['uid'];
$query=mysql_query($sql);
//$n=checkinput($_GET['name']),$e=checkinput($_GET['email']),$m=checkinput($_GET['mobile']),$c=checkinput($_GET['college']);
$name='';$email='';$college='';$mobile='';
while($row=mysql_fetch_array($query)){
$name=$row['name'];
$email=$row['email'];
$college=$row['college'];
$mobile=$row['mobile'];
}
		switch(checkinput($_GET['action'])){
		case "name":
		echo $name;
		break;
		case "email":
		echo $email;
		break;
		case "mobile":
		echo $mobile;
		break;
		case "college":
		echo $college;
		break;
		case "login_status":
		echo "true";
		break;
		}

}
else{
		switch(checkinput($_GET['action'])){
		case "login_status":
		echo "false";
		}
}
?>