<?php
/**
 * 
 * URL: www.freecontactform.com
 * 
 * Version: FreeContactForm Free V2.2
 * 
 * Copyright (c) 2013 Stuart Cochrane
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 * 
 * 
 * Note: This is NOT the same code as the PRO version
 * 
 */
 
header('Content-Type: text/html; charset=utf-8');
$badCaptcha = "badcaptcha.htm"; // reCAPTCHA error page
$shortMsg = "kratkyVzkaz.htm"; // short message error page
$shortSongName = "kratkySong.htm"; // short song name error page 

$email;$comment;$captcha;$zpetnaVazba;
/*if(isset($_POST['email'])){
  $email=$_POST['email'];
}if(isset($_POST['comment'])){
  $email=$_POST['comment'];
} */
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
//$ip = $_SERVER['193.165.214.44'];
$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha);
$responseKeys = json_decode($response,true);
/*if(intval($responseKeys["success"]) !== 1) {
  echo '<h2>You are spammer ! Get the @$%K out</h2>';
} else {
  echo '<h2>Thanks for posting comment.</h2>';
} */
/*

$odKoho = $_POST['OdKoho']; // not required
$proKoho = $_POST['ProKoho']; // not required
$vzkaz = $_POST['Vzkaz']; // not required*/
$zVazba = $_POST['zpetnaVazba']; // required

if(isset($_POST['zpetnaVazba'])) {
	
	include 'freecontactformsettings.php';
	
	function died($error) {
		//echo "Sorry, but there were error(s) found with the form you submitted. ";
		//echo "These errors appear below.<br /><br />";
		echo $error."<br /><br />";
		//echo "Please go back and fix these errors.<br /><br />";
		die();
	}
	
	if(//!isset($_POST['Full_Name']) ||
		//!isset($_POST['Email_Address']) ||
		//!isset($_POST['Telephone_Number']) ||
		!isset($_POST['OdKoho']) || 
		!isset($_POST['ProKoho']) || 
		!isset($_POST['Vzkaz']) || 
		!isset($_POST['zpetnaVazba'])  
		//!isset($_POST['Your_Message']) || 
		//!isset($_POST['AntiSpam'])
    //!isset($_POST['captcha'])		
		) {
		died('Sorry, there appears to be a problem with your form submission.');		
	}
	
	/*$full_name = $_POST['Full_Name']; // required
	$email_from = $_POST['Email_Address']; // required
	$telephone = $_POST['Telephone_Number']; // not required */
	$odKoho = $_POST['OdKoho']; // not required
	$proKoho = $_POST['ProKoho']; // not required
	$vzkaz = $_POST['Vzkaz']; // not required
	$zVazba = $_POST['zpetnaVazba']; // required
	//$comments = $_POST['Your_Message']; // required
	//$antispam = $_POST['AntiSpam']; // require
  
  if(strlen($error_message) > 0) {
  	died($error_message);
  }
	$email_message = "";
	
	function clean_string($string) {
	  $bad = array("content-type","bcc:","to:","cc:");
	  return str_replace($bad,"",$string);
	}
	
  $email_message .= "Zpětná vazba: ".clean_string($zVazba)."\r\n";
	
/*$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();*/

mail($email_to, $email_subject, $email_message, $headers);

header("Location: $thankyou");


function utf8mail($to,$s,$body,$from_name="x",$from_a = "buchticka.eu@gmail.com", $reply="CarodkyRC@seznam.cz")
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