<?PHP
$sender = 'someone@somedomain.tld';
$recipient = 'info@engelmark.org';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers)) {
    echo "Message accepted";
} else {
    echo "Error: Message not accepted";
}
?>