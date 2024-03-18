<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to_email = "SpartanCoding02@gmail.com"; // Change this to your email address
    $subject = "New Game Request";

    // Collect form data
    $game_title = $_POST['gameTitle'];
    $platform = $_POST['platform'];
    $description = $_POST['description'];

    // Compose the email message
    $message = "Game Title: $game_title\n";
    $message .= "Platform: $platform\n";
    $message .= "Description:\n$description";

    // Send email
    if (mail($to_email, $subject, $message)) {
        echo "<script>alert('Your game request has been submitted successfully.');</script>";
    } else {
        echo "<script>alert('Unable to send your request. Please try again later.');</script>";
    }
} else {
    echo "<script>alert('Invalid request.');</script>";
}
?>
