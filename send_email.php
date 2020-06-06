<?php

// Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields and remove whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $proposed_date = strip_tags(trim($_POST["proposed_date"]));
    $phone = strip_tags(trim($_POST["number"]));
    $name = str_replace(array("\r", "\n"), array(" ", " "), $name);
    $proposed_date = strip_tags(trim($_POST["proposed_date"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Check that data was sent to the mailer.
    if (empty($name) or empty($message) or !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        
        echo "Oops! There was a problem with your submission. Please complete the form and try again.";
        
    }

    // Set the recipient email address.
    // FIXME: Update this to your desired email address.
    $recipient = "pnjuno@firstassurance.co.ke";

    // Set the email subject.
    $subject = "New Appointment Request from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content = "Phone Number: $phone\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n\n";

    $email_content .= "Proposed Date: $proposed_date\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        
        echo "Thank You! Your request has been sent succcessfully.";
    } else {
       
        echo "Oops! Something went wrong and we couldn't send your message.";
    }
} else {
    
    echo "There was a problem with your submission, please try again.";
}

?>