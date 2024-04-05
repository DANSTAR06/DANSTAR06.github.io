<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up the email
    $to = 'danwamuyu06@gmail.com';
    $subject = 'New Message from ' . $name;
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Send the email
    mail($to, $subject, $body);

    // You can add additional logic here if needed

    // Return a success message
    echo json_encode(array('success' => true));
} else {
    // If not a POST request, return an error
    echo json_encode(array('success' => false, 'message' => 'Method not allowed'));
}
?>
