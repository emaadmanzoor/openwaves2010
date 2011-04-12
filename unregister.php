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
    $sql="DELETE FROM event_registrations WHERE event='".$event."' AND user_id='".$user_id."'";
    if(mysql_query($sql))
    {
        echo "successfully_unregistered";
    }
    else
    {
        echo "error";
    }
}
else
{
   echo "not_registered";
}

}

else
{
    echo "not_logged_in";
}

?>