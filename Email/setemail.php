<?php
 
require_once 'mail.php';

$mail->setFrom('habibfamili92@gmail.com', 'hotel.com');
$mail->addAddress('habibchbani1999@gmail.com');   

$body ='<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
    <table style="background-color:#fdfdfd; border:1px solid #dcdcdc; border-radius:3px !important;">
        <tr>
            <td style="width: 600px;background-color: #000; display:block; margin: 0px auto;">
                <h1 style="margin: 0;text-align: center;">
                    <img style="width: 179px;height: 123px;text-align: center;" src="../image/Hotels.com.png" alt="logo">
                </h1>
            </td>
        </tr>
            <tr>
                <td style="color:#737373;font-size:14px; line-height:150%; text-align:left; padding:48px;">
                    <h4 style="margin: 0 0 16px;font-size: large;">welcome chbani</h4>
                    <h1 style="margin: 32px 0 16px;text-align: center;">Confirm Your Email Address</h1>
                    <h1 style="margin: 19px 0px;text-align: center;">Verification code</h1>
                    <h1 style="padding: 36px 21px;
                                font-size: 59px;
                                border-radius: 14px;
                                text-align: center;
                                margin: 9px 0px 32px;">1111777
                    </h1>
                </td>
            </tr>
            <tr>
            <td style="padding: 0 48px 12px 48px;
                                            color: #707070;
                                            font-family: Arial;
                                            font-size: 24px;
                                            line-height: 125%;
                                            text-align: center;">
            <p>www.hotel.com</p>
            </td>
        </tr>
    </table>
</body>
</html>';
$mail->Subject = 'email verify';
$mail->Body    = $body;

// $mail->Subject = 'التحقق من البريد الإلكتروني';
// $mail->Body    = 'This is the HTML message chbani';

$mail->send();
?>


