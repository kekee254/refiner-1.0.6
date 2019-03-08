<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/7/2019
 * Time: 5:09 PM
 */

namespace common;


class Sessions
{
public  function  setSessionVars($key,$value)
{
    $_SESSION[$key] = $value;
}
public function deleteSessionVar($session_var)
{

}
public  function  getSessionVar($key)
{
    if (isset($_SESSION[$key])) {
        $value = $_SESSION[$key];

        // filter the value for XSS vulnerabilities
        return Security::Filter($value);
    }
}
public function  concurrentSession()
{

}
public function sessionError($key, $value)
{
      if(ucwords( \Loader::load()->find('Errors')-> errors['SessionErrors'] )== 'ON'):
          $_SESSION[$key][] = $value;
          endif;
}


}