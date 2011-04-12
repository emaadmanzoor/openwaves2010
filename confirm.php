<?php
include('connection.php');
include('common.php');
$keycode=checkinput($_GET['id']);
$sql = "SELECT * FROM temp_users where verify_key = '".$keycode."'";
$query=mysql_query($sql);
$result=mysql_num_rows($query);
if($result==1){
    while ($row=mysql_fetch_array($query)){
        $name=$row['name'];
        $email=$row['email'];
        $password=$row['password'];
        $mobile=$row['mobile'];
        $college=$row['college'];
		}
	$sql="INSERT INTO users (email,name,password,mobile,college)
	VALUES
	('$email','$name','$password','$mobile','$college')";
	$query=mysql_query($sql);
	$sql="DELETE from temp_users where verify_key ='".$keycode."'";
	$query=mysql_query($sql);
	?>
	<script  type="text/javascript">
	alert('Congratulations You Have Registered For Waves. Please Login to Continue');
	document.location.href='index.php';
	</script>
	<?php
	}
else{
	echo "Waves - 2010 -- Incorrect Verification Key ";
}


?>
