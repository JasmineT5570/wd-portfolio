<?php 

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: contact.php");
    exit;
}

if (!empty($_POST["website"])) {
    exit;
}

$firstname = trim(strip_tags($_POST["firstname"] ?? ""));
$lastname = trim(strip_tags($_POST["lastname"] ?? ""));
$email = filter_var(trim($_POST["email"] ?? ""), FILTER_VALIDATE_EMAIL);
$comments = trim(strip_tags($_POST["comments"] ?? ""));

if (!$firstname || !$lastname || !$email || !$comments) {
    exit("Please fill in all required fields.");
}

$to = "trmousou@gmail.com";
$subject = "Art Website - Contact Form Submission [$firstname $lastname]";
$body = "First Name: $firstname $lastname\n"
                    . "Email: $email\n\n"
                    . "Comments:\n$comments\n"; 

$headers = "From: noreply@trmousou.infinityfree.me\r\n";
$headers .= "Reply-To: $email\r\n";

if (mail($to, $subject, $body, $headers)) {
    echo "Thank you for your message. We will get back to you soon.";
} else {
    echo "There was a problem sending your message. Please try again later.";
} 

?>