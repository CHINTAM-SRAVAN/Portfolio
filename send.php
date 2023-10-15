<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer/src/Exception.php';
require 'PHPMailer/PHPMailer/src/PHPMailer.php';
require 'PHPMailer/PHPMailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail=new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='chintamsravankumar@gmail.com';
    $mail->Password='';
    $mail->SMTPSecure='ssl';

    $mail->setFrom('chintamsravankumar@gmail.com');

    $mail->addAddress($_POST["contactEmail"]);

    $mail->isHTML(true);

    $mail->Subject=$_POST["contactSubject"];
    $mail->Body=$_POST["contactMessage"];

    $mail->send();

    echo
    "
    <script>
    alert('Send Successfully');
    document.location.href='index.php';
    </script>

    ";

}
?>