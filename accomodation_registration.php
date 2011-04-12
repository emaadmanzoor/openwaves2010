<?php
session_start();
include ('common.php');
include('connection.php');

if($_SESSION['login']=="true")
{

    //checkinput
    $boys=checkinput($_GET['boys']);
    $girls=checkinput($_GET['girls']);
    $arrival=checkinput($_GET['arrival']);
    $depart=checkinput($_GET['depart']);

    //get current date
    $date= date("Y-m-d");

    //get submitted value for the user_id
    $sql2="SELECT Submitted from accomodation where user_id = '".$_SESSION['uid']."'";
    $query2=mysql_query($sql2);
    
    while ($row=mysql_fetch_array($query2))
    {
        $submitted=$row['Submitted'];
    }

    $user_id=$_SESSION['uid'];

    //only if the person hasnt already submitted
    if($submitted==0)
    {
            $sql="UPDATE accomodation
            SET number_of_boys='$boys',number_of_girls='$girls',arrival='$arrival',departure='$depart',Submitted=1, registration_date='$date'
            WHERE user_id='$user_id'";
            if(mysql_query($sql))
            {
                echo "registration_successful";
            }
            else
            {
                echo "error";
            }
    }
    else echo "already_registered";
}


?>