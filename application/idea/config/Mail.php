<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/7/2019
 * Time: 11:13 PM
 */

class Mail
{
  public $mail = array();

  function __construct()
  {
      $this->mail['IS_SMTP'] = false;
      $this->mail['IS_AUTH'] = true;
      $this->mail['mail_password'] = '';
      $this->mail['mail_username'] ='';
      $this->mail['SMTP_ENCRYPTION'] = array('ssl','tls');
      $this->mail['SMTP_HOST'] ='host';#eg. smtp.gmail.com
      $this->mail['SMTP_PORT']  = 465;
      $this->mail['CHARSET'] = 'UTF-8';
      $this->mail['mailer'] = 'native';
    return $this->mail;
  }
}