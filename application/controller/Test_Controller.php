<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/5/2019
 * Time: 11:33 PM
 */

class Test_Controller extends Refiner_Base_Controller
{
function __construct()
{
    parent::__construct();
}
public function  index()
{
    $this->RView->view('test');
}
public function math()
{
    $this->RView->view('test4',array('num'=>array(1,2,3,4)));
}
}