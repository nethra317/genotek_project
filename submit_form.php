<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Getting form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $query = $_POST["query"];

    // Creating email content
    $to = "nethraofficial312001@gmail.com";
    $subject = "New Quote Request from $name";
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Query:\n$query";

    // Sending email
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you for your submission! We will contact you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    header("Location: index.html");
    exit();
}

?>
