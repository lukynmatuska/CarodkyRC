<?php 
if(isset($_POST['zpetnaVazba'])){
    $to = "CarodkyRC@seznam.cz"; // this is your Email address
    /*$from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];*/
    $subject = "Zpětná vazba";
    //$message = /*$first_name . " " . $last_name . */" wrote the following:" . "\n\n" . $_POST['message'];
    $message = $_POST['zpetnaVazba'];
    
    $headers = "From: BUCHTICKA.EU"/* . $from*/;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you ";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>