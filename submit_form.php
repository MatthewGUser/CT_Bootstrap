<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    echo "Thank you for subscribing! We'll be in touch at $email.";
}
?>
