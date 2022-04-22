<?php 
    // print_r($_POST);
    $email = $_POST['email'];
    $message = $_POST['message'];

    $error = ''; 
    if(trim($email) =='')
        $error = 'Enter your email'; 
    else if (trim($message) == '')
        $error = 'Enter your message'; 
    else if(strlen($message) > 150) 
        $error = 'Number of symbols are 150'; 
        
    if ($error != '')  {
        echo $error; 
        exit; 
    }

    $subject = "=?utf-8?B?".base64_encode("test message")."?="; 
    $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html; charset=utf-8\r\n"; 

    mail('admin@gmail.com', $subject, $message, $headers); 

    header('Location: /about.php')
  

?>