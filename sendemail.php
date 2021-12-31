<?php
require_once 'vendor\autoload.php';

class SendEmail{

    public static function sendMail($to,$suject,$content){
        $key = '';
        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("vaughnpatterson36@yahoo.com","VaughnPatterson");
        $email->setSubject($suject);
        $email->addTo($to);
        $email->addContent("text/plain",$content);

        $sendgrid = new \SendGrid($key);

            try {
                $response = $sendgrid->send($email);
                return $response;
            } catch (Exception $e) {
               echo 'Email exception caught:'.$e->getMessage()."/n";
            }

        }
}

?>