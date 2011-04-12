<?php
function checkinput($input){
$input=mysql_real_escape_string($input);
$input=htmlspecialchars($input);
$input=strip_tags($input);
return $input;
}
function checkblank($input){
		if($input==''){
		return true;
		}
		else{
		return false;
		}
}
function isValidEmail($email){
	return eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email);
}

?>