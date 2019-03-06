<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/5/2019
 * Time: 8:20 PM
 */

class Refiner_Views
{

    public $loader;

    public function view($view_name , $data = null)
    {
        /*
         * extract data*/
        if ($data):
            foreach ($data as $key => $value) {
                $this->{$key} = $value;
            }
            endif;

        /*
         * Set URL
         * View documentation for more information*/
        $url  = Loader::get_configs('R_URL');;
        /*
         * Path of the view directory
         *  */
       $path_view =Loader::get_configs('view_path');
       /*
        * $view_name is a php file located in the views folder
        * .i.e  ../view/{$view_name}.php
        *check if the file exists then require if
        *  */
       if(file_exists($path_view).$view_name.'.php'):
           require $path_view.$view_name.'.php';
       else:
           /*Load the not found error page*/
           require Loader::get_configs('controller_path').'NotFound_Controller'.'.php';
           $_404 = new NotFound_Controller();
           $_404 ->index();
           endif;

    }
}