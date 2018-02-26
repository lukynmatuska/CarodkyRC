<?php

header('Content-Type: text/html; charset=utf-8');
$badCaptcha = "badcaptcha.htm"; // reCAPTCHA error page

if(isset($_POST['g-recaptcha-response'])){
  $captcha = $_POST['g-recaptcha-response'];
}
if(!$captcha){
  header("Location: $badCaptcha");
 } 
$secretKey = "6Ld1l0AUAAAAAKn_3kPTvNAeQS5RL70O5HvkihRt";
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha);
$responseKeys = json_decode($response,true);
 
if(isset($_POST['zpetnaVazba'])){
    $to = "CarodkyRC@seznam.cz"; // this is your Email address
    /*$from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];*/
    $subject = "Zpětná vazba";
    //$message = /*$first_name . " " . $last_name . */" wrote the following:" . "\n\n" . $_POST['message'];
    $message = "Co by jste vylepšil(a)?:\r\n".$_POST['zpetnaVazba'];
    
    $headers = "From: CARODKY.BUCHTICKA.EU"/* . $from*/;
    //mail($to,$subject,$message,$headers);
    
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
if(isset($_POST['zpetnaVazba'])){
if($_POST['zpetnaVazba'] > 2){
utf8mail($to,$subject,$message, "BUCHTICKA WEBSITES"/*"buchticka.eu@gmail.com"*/, "IDK"/*$email_from*/, "CarodkyRC@seznam.cz"); 
header("Location: dikyZVazba.html");
}
if($_POST['zpetnaVazba'] < 2){
header("Location: kratkaZVazba.html");
}
}

//echo "Mail Sent. Thank you ";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }

?>