<?php

include("connection.php");

function checkEmail($email)
{
	$sql = "SELECT id from temp_users where email = '".$email."'";
	$query=mysql_query($sql);
	$result=mysql_num_rows($query);
	$sql = "SELECT id from users where email = '".$email."'";
	$query=mysql_query($sql);
	$result1=mysql_num_rows($query);
	if ($result>0 || $result1>0)
	{
		echo "Someone has already registered with this email-id.";
		return 0;
	}
	else
	{
		return 1;
	}
}

?>