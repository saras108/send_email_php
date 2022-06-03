<?php
$to = "Reciver Mail";

$subject = "Simple Email Test via PHP!";
         
$body = "Here goes Message.\n";
$body .= "Welcome to the Virtual World!.\n";
$body .= "Hi, This is test email send using PHP Script. We can send mail from here !!";

$headers = "From:Sender Mail";
$headers .= "Content-type: text\r\n";

$mail_sent = mail($to, $subject, $body, $headers);

if ($mail_sent) {
    echo "Email successfully sent to $to.";
} else {
    echo "Email sending failed!";
}