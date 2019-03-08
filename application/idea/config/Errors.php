<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/7/2019
 * Time: 6:15 PM
 */

class Errors
{
public $error = array();
function  __construct()
{
    $this->error['SessionErrors'] = 'on';
    $this->error['error_class']= 'alert';

}
}