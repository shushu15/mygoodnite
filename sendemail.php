<?php
    // Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
	$name       = @trim(stripslashes($_POST['name'])); 
	$from       = @trim(stripslashes($_POST['email'])); 
	$subject    = @trim(stripslashes($_POST['subject'])); 
	$message    = @trim(stripslashes($_POST['message'])); 
	$to   		= 'info@mygoodnite.ru';//replace with your email

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $from\n\n";
    $email_content .= "Message:\n$message\n"; 	

// Build the email headers.
    $email_headers = "From: $name <$email>";
 
	// Send the email.
    if (mail($to, $subject, $email_content, $headers)) {
       // Set a 200 (okay) response code.
       http_response_code(200);
       echo "Спасибо! Ваше сообщение отправлено.";
    } else {
      // Set a 500 (internal server error) response code.
       http_response_code(500);
       echo "Опс! Что-то пошло не так и нам не удалось доставить ваше сообщение.";
    }

} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo "При отправке сообщения возникли проблемы. Попробуйте еще раз.";
}

?> 