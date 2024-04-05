<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Path to autoload.php from PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form data
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Email settings
    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'danwamuyu06@gmail.com'; // Your Gmail email
        $mail->Password   = 'vdjDanstar06@GOOGLE'; // Your Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('danwamuyu06@gmail.com', 'DANSTAR');
        $mail->addAddress('danwamuyu06@gmail.com', 'Dan Wamuyu');

        // Content
        $mail->isHTML(false);
        $mail->Subject = 'New Message from ' . $name;
        $mail->Body    = "Name: $name\nEmail: $email\nMessage: $message";

        $mail->send();
        echo json_encode(array('success' => true));
    } catch (Exception $e) {
        echo json_encode(array('success' => false, 'message' => $mail->ErrorInfo));
    }
} else {
    // If not a POST request, return an error
    echo json_encode(array('success' => false, 'message' => 'Method not allowed'));
}
?>
