<?php
    include realpath($_SERVER['DOCUMENT_ROOT']).'/dbConnect.php';
    header('Content-Type: text/html; charset=utf-8');
    $badCaptcha = "badCaptcha.php"; // reCAPTCHA error page
    $thankYou = "thx.php";

if(isset($_POST['g-recaptcha-response'])){
  $captcha = $_POST['g-recaptcha-response'];
}
if(!$captcha){
  header("Location: $badCaptcha");
 } 
$secretKey = "6Ld1l0AUAAAAAKn_3kPTvNAeQS5RL70O5HvkihRt";
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha);
$responseKeys = json_decode($response,true);
 
if(isset($_POST['feedback']) and $captcha){
    $to = "CarodkyRC@seznam.cz"; // this is your Email address
    /*$from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];*/
    $subject = "Zpětná vazba";
    //$message = /*$first_name . " " . $last_name . */" wrote the following:" . "\n\n" . $_POST['message'];
    $message = "Co by jste vylepšil(a)?:\r\n".$_POST['feedback'];
    
    $headers = "From: CARODKY.BUCHTICKA.EU"/* . $from*/;
    //mail($to,$subject,$message,$headers);
    
    function dbWrite($conn, $vzkaz="null"){
        $sql = "SET NAMES utf8";
        
        if($conn->query($sql)===TRUE){
          echo "utf8 OK<br/>";
        }else{
          echo "utf8 NOK<br/>";
        } 

        // Function to get the client ip address
        function get_client_ip_env() {
            $ipaddress = '';
            if (getenv('HTTP_CLIENT_IP'))
                $ipaddress = getenv('HTTP_CLIENT_IP');
            else if(getenv('HTTP_X_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
            else if(getenv('HTTP_X_FORWARDED'))
                $ipaddress = getenv('HTTP_X_FORWARDED');
            else if(getenv('HTTP_FORWARDED_FOR'))
                $ipaddress = getenv('HTTP_FORWARDED_FOR');
            else if(getenv('HTTP_FORWARDED'))
                $ipaddress = getenv('HTTP_FORWARDED');
            else if(getenv('REMOTE_ADDR'))
                $ipaddress = getenv('REMOTE_ADDR');
            else
                $ipaddress = 'UNKNOWN';

            return $ipaddress;
        }
        
        date_default_timezone_set("Europe/Prague");
        $sql = "INSERT INTO `zpetna_vazba`(`vzkaz_zpetne_vazby`, ip, time) VALUES('$vzkaz', '".get_client_ip_env()."', '".date("Y-m-d H:i:s", time())."')"; 
        
        if($conn->query($sql)===TRUE){
            echo "inserted data<br/>";
        }else{
            echo "failed<br/>";
            echo $conn->error;
        }
    }
   
    function utf8mail($to, $s, $body, $from_name="x", $from_a="buchticka.eu@gmail.com", $reply="CarodkyRC@seznam.cz"){
        $s = "=?utf-8?b?".base64_encode($s)."?=";
        $headers = "MIME-Version: 1.0\r\n";
        $headers.= "From: =?utf-8?b?".base64_encode($from_name)."?= <".$from_a.">\r\n";
        $headers.= "Content-Type: text/plain;charset=utf-8\r\n";
        $headers.= "Reply-To: $reply\r\n";  
        $headers.= "X-Mailer: PHP/" . phpversion();
        mail($to, $s, $body, $headers);
    }

    if(strlen($_POST["feedback"]) > 2){
        try{
            utf8mail($to,$subject,$message, "BUCHTICKA WEBSITES"/*"buchticka.eu@gmail.com"*/, "IDK"/*$email_from*/, "CarodkyRC@seznam.cz");
            dbWrite($conn, $_POST['feedback']);
            $conn->close(); 
            header("Location: $thankYou");
        }catch(Exception $problem){
            echo $problem;
        }
    }else{
        header("Location: shortFeedback.php");
    }
}

    

?>
