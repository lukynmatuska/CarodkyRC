<?php
include "./dbconnect.php";
header('Content-Type: text/html; charset=utf-8');
$badCaptcha = "spatnaRecaptcha.html"; // reCAPTCHA error page
$thankyou = "diky.html"; // thank you page
$message = "";

if(isset($_POST['g-recaptcha-response'])){
  $captcha = $_POST['g-recaptcha-response'];
}                                                          
if(!$captcha){
  header("Location: $badCaptcha");
 } 
$secretKey = "6Ld1l0AUAAAAAKn_3kPTvNAeQS5RL70O5HvkihRt";
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha);
$responseKeys = json_decode($response,true);
 
if(isset($_POST['song'])){
    $to = "CarodkyRC@seznam.cz"; // this is your Email address
    $subject = "Song do fronty";
    //$message = /*$first_name . " " . $last_name . */" wrote the following:" . "\n\n" . $_POST['message'];
    if(isset($_POST['Vzkaz'])){
    $vzkaz = $_POST["Vzkaz"];
      if(strlen($_POST['Vzkaz']) > 0){
    $message .= "Vzkaz: " . $_POST['Vzkaz'] ."\n";    
    } else{
    $message .= "Vzkaz: Nezadáno\n";
    }}
    if(isset($_POST['ProKoho'])){
    $komu = $_POST["ProKoho"];
      if(strlen($_POST['ProKoho']) > 0){
    $message .= "Vzkaz pro: " . $_POST['ProKoho'] ."\n";    
    } else{
    $message .= "Vzkaz pro: Nezadáno\n";
    }}
    if(isset($_POST['OdKoho'])){
    $kdo = $_POST["OdKoho"];
      if(strlen($_POST['OdKoho']) > 0){
    $message .= "Vzkaz od: " . $_POST['OdKoho'] ."\n";    
    } else{
    $message .= "Vzkaz od: Nezadáno\n";
    }}
    $song = $_POST['song'];
    $message .= "Písnička:".$_POST['song'] ."\n";
    $message .= "\n\nNapsala Lukynova Buchtička :)\n"; //$message .= "\n\nNapsala Lukynova Buchtička :)\n";
    
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
if(isset($_POST['song'])){
if($captcha and strlen($_POST['song']) > 1){
try{
utf8mail($to,$subject,$message, "BUCHTICKA WEBSITES"/*"buchticka.eu@gmail.com"*/, "IDK"/*$email_from*/, "CarodkyRC@seznam.cz"); 
//$sql = "INSERT INTO pisnicky_na_prani(kdo, komu, vzkaz, song, hotovo) VALUES('$kdo, $komu, $vzkaz, $song, 0')";
/*FUNGUJE*///$sql = "INSERT INTO pisnicky_na_prani(kdo, komu, vzkaz, song, hotovo) VALUES ('Julie', 'Dooley', 'Miluju purkynku', 'Purkyňka je HAPPY!', 0)";
$sql = "INSERT INTO pisnicky_na_prani(kdo, komu, vzkaz, song, hotovo) VALUES ('$kdo', '$komu', '$vzkaz', '$song', 0)";
//$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Julie', 'Dooley', 'julie@example.com')";
$conn->query($sql);
$conn->close();     
header("Location: $thankyou");
}catch(Exception $problem){echo $problem;}
}else{
echo $problem;
}
}

//echo "Mail Sent. Thank you ";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }

?>