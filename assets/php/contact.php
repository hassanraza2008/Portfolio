<?php
$action = isset($_POST['action']) ? $_POST['action'] : '';

if ($action == "submit") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if (($name == "") || ($email == "") || ($message == "")) {
        echo "All fields are required, please fill <a href=\"#contact\">the form</a> again.";
    } else {
        $from = "From: $name <$email>\r\nReturn-path: $email";
        $subject = "Message sent using your contact form";
        $to = "mrismart70@gmail.com"; 
        if (mail($to, $subject, $message, $from)) {
            echo "Email sent!";
        } else {
            echo "Error: Email not sent.";
        }
    }
} else {
    echo "Invalid action.";
}
?>
