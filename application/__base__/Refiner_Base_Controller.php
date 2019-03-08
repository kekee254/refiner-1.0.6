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
    public $Session;
    public  $model;
    function  __construct()
    {
        /*
         * Load Refiner Model that sets up resources
         * */
        $this->model = Loader::load()->find('Refiner_Model');
        /*
         * Make an instance of the Session*/
         $this->Session = Loader::load()->find('\common\Sessions');
         /*
          * Make properties of the View Class available*/
         $this->RView = new Refiner_Views();
    }

}