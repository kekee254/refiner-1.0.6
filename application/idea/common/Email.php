<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/7/2019
 * Time: 10:57 PM
 */

namespace common;


class Email
{
    /*
     * Used to check if an email is true
     * @param $email to be validated
     * @return bool */
    public function validateEmail($user_email)
    {
        return (bool) filter_var($user_email, FILTER_VALIDATE_EMAIL);
    }
    /*
    *send mail natively using the inbuilt PHP mail() function
     * @see http://www.php.net/manual/en/function.mail.php
     * @param	string	$recipient
     * @param	string	$subject
     * @param	string	$message
     * @return	bool
     */
    function send_email($recipient, $subject, $message)
    {
        return mail($recipient, $subject, $message);
    }
    /*
     * Use PHPMAILER to send Mails
     * @see https://
     * @param string $email
     * @param string $from_email
     * @param string $from_name
     * @param string  $body
     * */
    public function usePhpMailer ($user_email, $from_email, $from_name, $subject, $body)
     {
         $mail_configs= \Loader::load()->find('\Mail');

         if($mail_configs['mailer'] == 'phpmailer'):
                $mail = \Loader::load()->find('\PHPMailer');
                /*
                 * set the charset to utf8*/
                $mail->Charset($mail_configs['CHARSET']);

         endif;

    }
}