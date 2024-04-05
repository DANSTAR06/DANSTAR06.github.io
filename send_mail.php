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
        $mail->Username   = 'deejeydanstar@gmail.com'; // Your Gmail email
        $mail->Password   = 'Deejeydanstar254'; // Your Gmail password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        //Recipients
        $mail->setFrom('deejeydanstar@gmail.com', 'DJ DANSTAR');
        $mail->addAddress('deejeydanstar@gmail.com', 'DJ DANSTAR');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Message from ' . $name;
        $mail->Body    = "Name: $name\nEmail: $email\nMessage: $message";

        $mail->send();
        echo json_encode(array('success' => true));
    } catch (Exception $e) {
        error_log('Message: ' . $e->getMessage()); // Log detailed error message
        echo json_encode(array('success' => false, 'message' => 'An error occurred while sending the email.'));
    }
} else {
    // If not a POST request, return an error
    echo json_encode(array('success' => false, 'message' => 'Method not allowed'));
}
?>
