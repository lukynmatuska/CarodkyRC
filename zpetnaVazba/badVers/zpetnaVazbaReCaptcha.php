<?php
 
header('Content-Type: text/html; charset=utf-8');
$badCaptcha = "badcaptcha.htm"; // bad captcha page

$email;$comment;$captcha;
if(isset($_POST['email'])){
  $email=$_POST['email'];
}if(isset($_POST["Vzkaz"])){
  $email=$_POST["Vzkaz"];
}
if(isset($_POST['g-recaptcha-response'])){
  $captcha=$_POST['g-recaptcha-response'];
}
if(!$captcha){
  //echo '<h2>Please check the the captcha form.</h2>';
  header("Location: $badCaptcha");
?>
<script>location.replace('<?php echo $badCaptcha;?>')</script>
<?php
  exit;
}
$secretKey = "6Ld1l0AUAAAAAKn_3kPTvNAeQS5RL70O5HvkihRt";
$ip = $_SERVER['193.165.214.44'];
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha."&remoteip=".$ip);
$responseKeys = json_decode($response,true);
if(intval($responseKeys["success"]) !== 1) {
  echo '<h2>You are spammer ! Get the @$%K out</h2>';
} else {
  echo '<h2>Thanks for posting comment.</h2>';
}
if(isset($_POST['Email_Address'])) {
	
	include 'freecontactformsettings.php';
	
	function died($error) {
		echo "Sorry, but there were error(s) found with the form you submitted. ";
		echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	if(!isset($_POST['Full_Name']) ||
		!isset($_POST['Email_Address']) ||
		!isset($_POST['Telephone_Number']) ||
		!isset($_POST["Vzkaz"]) || 
		!isset($_POST['AntiSpam'])
    //!isset($_POST['captcha'])		
		) {
		died('Sorry, there appears to be a problem with your form submission.');		
	}
	
	$comments = $_POST["Vzkaz"]; // required
	
	$error_message = "";
	
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(preg_match($email_exp,$email_from)==0) {
  	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
  if(strlen($full_name) < 2) {
  	$error_message .= 'Your Name does not appear to be valid.<br />';
  }
  if(strlen($vzkaz) < 2) {
  	$error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
  /*
  if($antispam <> $antispam_answer) {
	$error_message .= 'The Anti-Spam answer you entered is not correct.<br />';
  } */
  
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:");
	  return str_replace($bad,"",$string);
	}
	iconv(mb_detect_encoding($full_name, mb_detect_order(), true), "UTF-8", $full_name);
	iconv(mb_detect_encoding($email_from, mb_detect_order(), true), "UTF-8", $email_from);
	iconv(mb_detect_encoding($telephone, mb_detect_order(), true), "UTF-8", $telephone);
	echo iconv(mb_detect_encoding($vzkaz, mb_detect_order(), true), "UTF-8", $vzkaz);
	$email_message .= "Zpětná vazba: ".clean_string($vzkaz)."\r\n";
	
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
#mail($email_to, $email_subject, $email_message, $headers);
header("Location: $thankyou");


function utf8mail($to,$s,$body,$from_name="x",$from_a = "info@x.com", $reply="info@x.com")
{
    $s= "=?utf-8?b?".base64_encode($s)."?=";
    $headers = "MIME-Version: 1.0\r\n";
    $headers.= "From: =?utf-8?b?".base64_encode($from_name)."?= <".$from_a.">\r\n";
    $headers.= "Content-Type: text/plain;charset=utf-8\r\n";
    $headers.= "Reply-To: $reply\r\n";  
    $headers.= "X-Mailer: PHP/" . phpversion();
    mail($to, $s, $body, $headers);
}

utf8mail($email_to, "Zpětná vazba", $email_message, "buchticka.eu@gmail.com", $email_from, "CarodkyRC@seznam.cz")


?>
<script>location.replace('<?php echo $thankyou;?>')</script>
<?php
}
die();
?>