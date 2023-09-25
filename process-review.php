<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $review = $_POST["review"];
    $to = "hassanali042213@gmail.com"; // Replace with your desired email address
    $subject = "New Review";
    $message = "Name: $name\nEmail: $email\nReview: $review";

    if (mail($to, $subject, $message)) {
        header("Location: review.html?success=1");
        exit;
    } else {
        header("Location: review.html?success=0");
        exit;
    }
}
?>
