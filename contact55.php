<?php 
if(isset($_POST['Submit'])){
    $to = "koketsomotlapema@gmail.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $Name = $_POST['Name'];
    $subject = $_POST['Subject'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $Name . " ". " wrote the following:" . "\n\n" . $_POST['Message'];
    $message2 = "Here is a copy of your message " . $Name . "\n\n" . $_POST['Message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $Name . ", we will contact you shortly.";
    header('Location: index.html');
    }
?>