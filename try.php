<?php 

if(isset($_POST['Submit'])){
    $to = "koketsomotlapema@gmail.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $Name = $_POST['Name'];
    $Number = $_POST['Number'];
    $subject = $_POST['Subject'];
    $subject2 = "Copy of your form submission";
    $message = $Name . " ". " wrote the following:" . "\n\n" . $_POST['Message'];
    $message2 = "Here is a copy of your message " . $Name . "\n\n" . $_POST['Message'];
}
?>