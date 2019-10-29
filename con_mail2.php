<?php
date_default_timezone_set('Asia/Calcutta');
$values = json_decode($_POST['value'],true);
$email1 =  $values['email'];
$email1 = trim($email1,'"');
// $email1 = "akshay.deekonda@gmail.com";
// $get_message = $values['status'];

// connect to the database
include('sql.php');

$sql = "SELECT firstname,lastname FROM booking_detail WHERE email_id='{$email1}'";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);
$user = $user['firstname'].' '.$user['lastname'];
if(mysqli_num_rows($result)){
    $email = "alphacoder987@gmail.com";
    $password = "alphacoder@123";

    require 'PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = $email;
    $mail->Password = $password;
    //Set who the message is to be sent from
    $mail->setFrom('no-reply@alphacoders.in', 'Hall OF Fame');
    //Set who the message is to be sent to
    $mail->addAddress($email1, $user);
    //Set the subject line
    $mail->Subject = 'No Reply';
    $mail->Body = $user." your Application Successfully booked.";

    if (!$mail->send()) {
        $message1 = array(
            'message' => "Mailer Error: "
        );
    } else {
        $message1 = array(
            'message' => "Mail Send"
        );
    }
    echo json_encode($message1);
}
else{
    $message1 = array(
        'message' => "Email Id Not Found"
    );
    echo json_encode($message1);
}
?>