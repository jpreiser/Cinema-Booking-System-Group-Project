<?php

    const APP_URL = 'http://localhost/cs4050_project';
    const SENDER_EMAIL_ADDRESS = 'no-reply@email.com';

    function generate_activation_code(): string{
        return bin2hex(random_bytes(16));
    }

    function send_activation_email(string $email, string $activation_code): void
    {
        // create the activation link
        $activation_link = APP_URL . "/index.php?email=$email&activation_code=$activation_code";

        // set email subject & body
        $subject = 'Please activate your account';
        $message = <<<MESSAGE
                Hi,
                Please click the following link to activate your account:
                $activation_link
                MESSAGE;
        // email header
        $header = "From:" . SENDER_EMAIL_ADDRESS;

        // send the email
        mail($email, $subject, nl2br($message), $header);
    }
?>