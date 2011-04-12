<?php
include('common.php');
include('connection.php');
include("checkEmail.php");

function generatekey()
{
$result=1;
while ($result>0)
    {
    $string=str_shuffle('QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm');
    $sql="SELECT id from temp_users where verify_key='".$string."'";
    $query=mysql_query($sql);
    $result=mysql_num_rows($query);
    }
return $string;
}
$name=checkinput($_GET['name']);
$email=checkinput($_GET['email']);
$mobile=checkinput($_GET['mobile']);
$college=checkinput($_GET['college']);
$password=md5($_GET['password']);
$confirm_password=md5($_GET['confirm_password']);
$keycode=generatekey();

if(checkblank($name) || ($password == "d41d8cd98f00b204e9800998ecf8427e") || ($confirm_password == "d41d8cd98f00b204e9800998ecf8427e") || checkblank($college)){
				echo "All fields are required.";
				exit();
}

if ( $password != $confirm_password) {
				echo "The password fields don't match.";
				exit();
}

if (checkEmail($email) == 0)
{
	exit();
}

if(!isValidEmail($email)){
echo "You'll need to use a valid e-mail address.";
exit();
}
if(!is_numeric($mobile)){
echo "Your mobile number seems to be invalid.";
exit();
}

				//send mail using php mailer
				require('phpmailer/class.phpmailer.php');
				$mail=new PHPMailer();
				
				$mail->Mailer = "smtp";
				$mail->IsSMTP(); // send via SMTP
				
				$mail->Host = "ssl://smtp.gmail.com";
				$mail->Port = 465;                    // set the SMTP port
								
				
				$mail->SMTPAuth = true; // turn on SMTP authentication
				$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)

				$mail->Username = "thiswontwork@gmail.com"; // SMTP username
				$mail->Password = "fakepassword"; // SMTP password
				
				//$webmaster_email = "emaad@bits-waves.org"; //Reply to this email ID
				//$mail->From = $webmaster_email;
				$mail->SetFrom('thiswontwork@gmail.com', 'Waves 2010');
				$mail->FromName = "Waves 2010";
				$mail->AddAddress($email,$name);
				//$mail->AddReplyTo($webmaster_email,"Waves 2010");
				
				$mail->WordWrap = 50; // set word wrap
				
				$mail->IsHTML(true); // send as HTML
				$mail->Subject = "Waves 2010 Registration";
				
				$mail->Body = "Hi,<br/>
				We've almost completed your registration!<br/>
				Click on the link below to confirm your registration.<br/>
				<a href=\"".$webroot."/confirm.php?id=".$keycode."\">Confirm Registration</a><br />
				
				--<br/>
				Viva La Vida!<br/>
				The Waves 2010 Team"; //HTML Body
				
				$mail->AltBody = "Hi,
				We've almost completed your registration!
				Click on the link below to confirm your registration.
				\"".$webroot."/confirm.php?id=".$keycode."'<br />
				
				--<br/>
				Viva La Vida!<br/>
				The Waves 2010 Team"; //Text Body
				
				if(!$mail->Send())
				{
								echo "There was an error dispatching the confirmation e-mail."; //. $mail->ErrorInfo;
								$sent = false;
				}
				else {
								echo "We've dispatched a verification key to your mailbox.";
								$sent = true;
				}

if ($sent) {
$sql="INSERT INTO temp_users (name,email,password,mobile,college,verify_key)
VALUES
('$name','$email','$password','$mobile','$college','$keycode')";
mysql_query($sql);
}
