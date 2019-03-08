<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/7/2019
 * Time: 10:09 PM
 */

class Home_Model extends Refiner_Model
{
    function __construct()
    {
        parent::__construct();
    }
    public function  test()
    {
        return array($this->configs,$this->db,$this->Session);
    }
}