<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$config = require __DIR__ . '/config.php';

function redirect_with_status(string $status, string $message): void
{
    header('Location: contact.php?status=' . urlencode($status) . '&message=' . urlencode($message));
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    redirect_with_status('error', 'Invalid request method.');
}

// Honeypot spam protection: real users will not fill this hidden field.
if (!empty($_POST['website'] ?? '')) {
    redirect_with_status('success', 'Thank you. Your message has been received.');
}

$enquiryType = trim($_POST['enquiry_type'] ?? 'General enquiry');
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$subject = trim($_POST['subject'] ?? 'Website enquiry');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $email === '' || $subject === '' || $message === '') {
    redirect_with_status('error', 'Please fill in all required fields.');
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    redirect_with_status('error', 'Please enter a valid email address.');
}

$safeName = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safeEmail = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safePhone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$safeSubject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$safeEnquiryType = htmlspecialchars($enquiryType, ENT_QUOTES, 'UTF-8');
$safeMessage = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));

$emailSubject = 'New Website Enquiry: ' . $subject;

$htmlBody = "
    <h2>New Website Contact Form Message</h2>
    <p><strong>Enquiry Type:</strong> {$safeEnquiryType}</p>
    <p><strong>Name:</strong> {$safeName}</p>
    <p><strong>Email:</strong> {$safeEmail}</p>
    <p><strong>Phone:</strong> {$safePhone}</p>
    <p><strong>Subject:</strong> {$safeSubject}</p>
    <p><strong>Message:</strong></p>
    <p>{$safeMessage}</p>
";

$textBody = "New Website Contact Form Message

" .
    "Enquiry Type: {$enquiryType}
" .
    "Name: {$name}
" .
    "Email: {$email}
" .
    "Phone: {$phone}
" .
    "Subject: {$subject}

" .
    "Message:
{$message}
";

// Local test mode: no SMTP needed. Saves the form submission into storage/mail-test.log.
if (!empty($config['mail_test_mode'])) {
    $storageDir = __DIR__ . '/storage';
    if (!is_dir($storageDir)) {
        mkdir($storageDir, 0775, true);
    }

    $logEntry = "
==============================
" .
        "Date: " . date('Y-m-d H:i:s') . "
" .
        "To: {$config['to_email']}
" .
        "Subject: {$emailSubject}
" .
        "
{$textBody}
";

    file_put_contents($storageDir . '/mail-test.log', $logEntry, FILE_APPEND);
    redirect_with_status('success', 'Local test successful. Your message was saved to storage/mail-test.log for asekhamejoel@gmail.com.');
}

require __DIR__ . '/vendor/autoload.php';

$mail = new PHPMailer(true);
$mail->SMTPDebug = 0;
$mail->Timeout = 15;

try {
    $mail->isSMTP();
    $mail->Host = $config['smtp_host'];
    $mail->SMTPAuth = true;
    $mail->Username = $config['smtp_username'];
    $mail->Password = $config['smtp_password'];

    if ($config['smtp_secure'] === 'ssl') {
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    } else {
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    }

    $mail->Port = $config['smtp_port'];
    $mail->Timeout = 15;

    // Turn off debug output
    $mail->SMTPDebug = 0;

    $mail->setFrom($config['from_email'], $config['from_name']);
    $mail->addAddress($config['to_email'], $config['to_name']);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = 'New Website Contact Form Message';

    $mail->Body = "
        <h2>New Website Contact Form Message</h2>
        <p><strong>Name:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Phone:</strong> {$phone}</p>
        <p><strong>Message:</strong></p>
        <p>{$message}</p>
    ";

    $mail->AltBody = "
        New Website Contact Form Message

        Name: {$name}
        Email: {$email}
        Phone: {$phone}

        Message:
        {$message}
    ";

    $mail->send();

    header("Location: contact.php?status=success");
    exit;

} catch (Exception $e) {
    header("Location: contact.php?status=error");
    exit;
}