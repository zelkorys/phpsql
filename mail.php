<?php

if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    //SEND MAIL
    mail('zelkorys@gmail.com' $subject $message);
    $header = "From :" .$email;
    $content = "Subject :" .$subject."\n".$message;

    //mail(to, subject, message, headers, parameters);
    mail($mailTo,$subject,$content,$header);
}

?>