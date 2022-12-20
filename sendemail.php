<?php


require 'vendor/autoload.php';
?>

<?php

class SendEmail
{
    public static function SendMail($to,$subject,$content)
    {
    $key = '';

    $email = new SendGrid\Mail\Mail();
    $email->setFrom("fabianngordon@gmail.com", "TMPP Partner Plans");
    $email->setSubject($subject);
    $email->addTo($to);
    $email->addContent("text/plain", $content);

    $sendgrid = new \SendGrid($key);
    try
    {
        $response = $sendgrid->send($email);
        return $response;
    
    }
    catch(Exception $e)
    {
        echo'Caught Exception: '. $e->getMessage() . "\n";
        return false;
    }

    }
}

?>