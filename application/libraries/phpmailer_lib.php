<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;


class phpmailer_lib
{
    public function __construct()
    {
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function load()
    {
        require_once(APPPATH.'third_party/PHPMailer/Exception.php');
        require_once(APPPATH.'third_party/PHPMailer/PHPMailer.php');
        require_once(APPPATH.'third_party/PHPMailer/SMTP.php');
  
        //  $objMail = new PHPMailer\PHPMailer\PHPMailer();
         $objMail = new PHPMailer;
        return $objMail;
    }
}


?>