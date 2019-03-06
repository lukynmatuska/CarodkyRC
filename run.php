<?php

    function utf8mail($to,$s,$body,$from_name="Mr. X",$from_a = "buchticka.eu@gmail.com", $reply="CarodkyRC@seznam.cz"){
        $s= "=?utf-8?b?".base64_encode($s)."?=";
        $headers = "MIME-Version: 1.0\r\n";
        $headers.= "From: =?utf-8?b?".base64_encode($from_name)."?= <".$from_a.">\r\n";
        $headers.= "Content-Type: text/plain;charset=utf-8\r\n";
        $headers.= "Reply-To: $reply\r\n";
        $headers.= "X-Mailer: PHP/" . phpversion();
        mail($to, $s, $body, $headers);
    }

    include realpath($_SERVER['DOCUMENT_ROOT']).'/htmlParts/header.php';
?>
    <h1>Vyhodnocení formuláře</h1>
<?php
    include realpath($_SERVER['DOCUMENT_ROOT']).'/htmlParts/menu.php';
    include realpath($_SERVER['DOCUMENT_ROOT']).'/dbConnect.php';
    header('Content-Type: text/html; charset=utf-8');
    $badCaptcha = "badRecaptcha.php"; // reCAPTCHA error page
    $thankyou = "thx.php"; // thank you page
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
        if(isset($_POST['Vzkaz'])){
            $vzkaz = $_POST["Vzkaz"];
            if(strlen($_POST['Vzkaz']) > 0){
                $message .= "Vzkaz: " . $_POST['Vzkaz'] ."\n";
            } else{
                $message .= "Vzkaz: Nezadáno\n";
            }
        }
        if(isset($_POST['ProKoho'])){
            $komu = $_POST["ProKoho"];
            if(strlen($_POST['ProKoho']) > 0){
                $message .= "Vzkaz pro: " . $_POST['ProKoho'] ."\n";
            }else{
                $message .= "Vzkaz pro: Nezadáno\n";
            }
        }
        if(isset($_POST['OdKoho'])){
            $kdo = $_POST["OdKoho"];
            if(strlen($_POST['OdKoho']) > 0){
                $message .= "Vzkaz od: " . $_POST['OdKoho'] ."\n";
            }else{
                $message .= "Vzkaz od: Nezadáno\n";
            }
        }
    }
    $song = $_POST['song'];
    $message .= "Písnička:".$_POST['song'] ."\n";
    $message .= "\n\nNapsala Lukynova Buchtička :)\n";
    $headers = "From: CARODKY.BUCHTICKA.EU"/* . $from*/;
    //mail($to,$subject,$message,$headers);

    if(isset($_POST['song'])){
        if(strlen($_POST['song']) > 1){
            try{
                //utf8mail($to,$subject,$message, "BUCHTICKA WEBSITES"/*"buchticka.eu@gmail.com"*/, "IDK"/*$email_from*/, "CarodkyRC@seznam.cz");
                #$sql = mysql_real_escape_string($conn, "INSERT INTO pisnicky_na_prani(kdo, komu, vzkaz, song, hotovo) VALUES ('$kdo', '$komu', '$vzkaz', '$song', 0)");i
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
                $sql = "INSERT INTO pisnicky_na_prani(kdo, komu, vzkaz, song, status, voting, ip, time) VALUES ('$kdo', '$komu', '$vzkaz', '$song', 0, 0, '".get_client_ip_env()."', '".date("Y-m-d H:i:s", time())."');";
                #$sql = mysql_real_escape_string($conn, "INSERT INTO pisnicky_na_prani(kdo, komu, vzkaz, song, hotovo) VALUES ('$kdo', '$komu', '$vzkaz', '$song', 0)");
                
                $conn->query($sql);
                $conn->close();
                
                header("Location: $thankyou");
            }catch(Exception $problem){
                echo "<script>alert('$problem');</script>";
            }
        }else{
            header("Location: index.php?sender=".$_POST["sender"]."&deliver=".$_POST["deliver"]."message=".$_POST['message']."&song=".$_POST["song"]);
        }
    }
    include realpath($_SERVER['DOCUMENT_ROOT']).'/htmlParts/footer.php';
?>
