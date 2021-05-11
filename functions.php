<?php
   //Mail Function
   $to        = 'YourEmailId.com';
   $subject   = "Wordpress Test Email";
   $headers   = 'Content-type: text/html;charset=utf-8' . "\r\n".'From: '. $_POST['request_email'] . "\r\n" .
   'Reply-To: ' . $_POST['request_email'] . "\r\n";
   
   $message = "Name = ".$_POST['request_name'];
   $message .= "<br />Phone =".$_POST['request_phone'];
   $message .= "<br />Email =".$_POST['request_email'];
   $message .= "<br />Comment =".$_POST['request_comment'];
   
  //Here put your Validation and send mail
   $sent = wp_mail($to, $subject, $message, $headers);
     if($sent) {
       echo "Mail Sent";
     }
     else  {
       echo "Mail did not send";
   }       
 ?>
