<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars(trim($_POST['name']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $service = htmlspecialchars(trim($_POST['service']));
    $message = htmlspecialchars(trim($_POST['message']));

    if(empty($name) || empty($phone) || empty($email)) {
        die("Please fill all required fields");
    }

    $to = "appuarivu28599@gmail.com";

    $subject = "New Enquiry from Delta Builder Website";

    $body = "
    Name: $name

    Phone: $phone

    Email: $email

    Service: $service

    Message:
    $message
    ";

    $headers = "From: noreply@deltabuilder.com";

    if(mail($to, $subject, $body, $headers)) {

        echo "
        <script>
            alert('Enquiry Sent Successfully');
            window.location.href='contact.html';
        </script>
        ";

    } else {

        echo "
        <script>
            alert('Failed to Send Message');
            window.location.href='contact.html';
        </script>
        ";

    }

}

?>