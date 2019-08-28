<?php
function SiteVerify($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 15);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36");
    $curlData = curl_exec($curl);
    curl_close($curl);
    return $curlData;
}
    // Only process POST reqeusts.
if ($_SERVER["REQUEST_METHOD"] == "POST") { 

    $recaptcha=$_POST['g-recaptcha-response'];
    if(!empty($recaptcha))
    {
 
        $google_url="https://www.google.com/recaptcha/api/siteverify";
        $secret='6Lff-7QUAAAAAJ-7JwONp1S-c2qcbgB1t-Iwor0f';
        $ip=$_SERVER['REMOTE_ADDR'];
        $url=$google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
        $res=SiteVerify($url);
        $res= json_decode($res, true);

        if($res['success'])
        {
            // Проверка каптчи пройдена успешно, продолжаем дальше выполнение проверки формы и т.д.

			$name       = trim(htmlspecialchars($_POST['name'])); 
			$from       = trim(htmlspecialchars($_POST['email'])); 
			$phone		= trim(htmlspecialchars($_POST['phone']));
			$subject    = "Заказ подушки, тел:" . $phone;
			$message    = trim(htmlspecialchars($_POST['message'])); 
			$to   		= 'info@mygoodnite.ru';//replace with your email

			// Build the email content.
			$email_content = "Name: $name\n";
			$email_content .= "Email: $from\n";
			$email_content .= "Phone:\n$phone\n"; 	
			$email_content .= "Message:\n$message\n"; 	

			// Build the email headers.
			$email_headers = "From: $name <$from>\r\n";
 
//	error_log( "to:" . $to . " subject:" . $subject . " email_content:" . $email_content . " email_headers:" . $email_headers );

	// Send the email.
			if (mail($to, $subject, $email_content, $email_headers)) {
			// Set a 200 (okay) response code.
       //http_response_code(200);
				$data = array('success' => 'Спасибо за заказ. В ближайшее время мы свяжемся с Вами.');
				echo json_encode($data);
			} else {
      // Set a 500 (internal server error) response code.
       //http_response_code(500);
			   $data = array('error' => 'Опс! Что-то пошло не так, и нам не удалось доставить ваше сообщение.');
			   echo json_encode($data);
				
			}
		}
        else
        {
          // Проверка не пройдена
          // http_response_code(403);
		  $data = array('error' => 'Подтвердите, что Вы не робот. Попробуйте еще раз.');
		  echo json_encode($data);
        }
	}
    else
    {
          // Проверка не пройдена
          // http_response_code(403);
		  $data = array('error' => 'Подтвердите, что Вы не робот. Поставьте галочку в поле reCaptcha.');
		  echo json_encode($data);
    }    
		
		

} else {
    // Not a POST request, set a 403 (forbidden) response code.
    // http_response_code(403);
    $data = array('error' => 'При отправке сообщения возникли проблемы. Попробуйте еще раз.');
	echo json_encode($data);
}
?> 