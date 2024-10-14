<?php
// Email settings
$to = 'vishalmauryaab@gmail.com';
$from = 'support@numerounogifts.com';
$fromName = 'Numerouno Gifts';
$subject = 'Welcome to Numerouno Gifts';

// HTML Email Content
$message = '<html><body>';
$message .= '<h1>Welcome to Numerouno Gifts</h1>';
$message .= '<p>Thank you for subscribing to our newsletter.</p>';
$message .= '<p>Here is a <a href="https://www.example.com">link</a> to our latest offers.</p>';
$message .= '</body></html>';

// Headers for HTML email
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
$headers .= 'From: ' . $fromName . ' <' . $from . '>' . "\r\n";
$headers .= 'Reply-To: ' . $from . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

// Send email
if (mail($to, $subject, $message, $headers)) {
    echo 'HTML email sent successfully';
} else {
    echo 'Failed to send HTML email';
    $error = error_get_last();
    echo '<pre>';
    print_r($error);
    echo '</pre>';
}
?>

