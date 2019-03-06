<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/5/2019
 * Time: 8:15 PM
 */

class Refiner_Base_Controller
{

    public $RView ;
    function  __construct()
    {
        $this->RView = new Refiner_Views();
    }

}