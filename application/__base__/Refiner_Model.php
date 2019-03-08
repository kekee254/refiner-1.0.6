<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/7/2019
 * Time: 7:33 PM
 */

class Refiner_Model
{

 public $configs;
 public $Session;
 public $db;
 function __construct()
 {
     /*
  * Make App configs available inside models
  * */
     $this->configs = Loader::load()->find('AppConfigurationFile');
     /*
      * Makes Sessions properties available
      * */
     $this->Session = Loader::load()->find('\common\Sessions');
     /*
      * Make database connection available
      * but only works if $config[db_global] ="on"*/
      if (Loader::get_configs('db_global')=='on'):
          $this->db = @Loader::db();
         else:
          $this->db = array(null,'global access of database connection is disabled');
          endif;

 }
}