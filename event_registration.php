<?php
session_start();
include ('common.php');
include('connection.php');

if($_SESSION['login']=="true"){
$event=checkinput($_GET['event']);
$sql = "SELECT id from event_registrations where event = '".$event."' AND user_id = '".$_SESSION['uid']."'";
$query=mysql_query($sql);
$result=mysql_num_rows($query);

$user_id=$_SESSION['uid'];
if($result>0)
{
    echo "already_registered";
}
else
{
    $sql="INSERT INTO event_registrations  (event,user_id)
    VALUES
    ('$event','$user_id')";
    if(mysql_query($sql))
    {
        echo "registration_successful";
    }
    else
    {
        echo "error";
    }
}
}


?>