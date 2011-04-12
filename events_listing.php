<?php
session_start();
include ('common.php');
include('connection.php');

if($_SESSION['login']=="true"){
    $sql="SELECT event from event_registrations where user_id=".$_SESSION['uid'];
    $query=mysql_query($sql);
    echo "<p>";
    while($row=mysql_fetch_array($query)){
        echo ' | '.$row['event'].' | ';
    }
    echo "</p>";
}
?>
