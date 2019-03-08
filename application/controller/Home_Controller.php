<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/5/2019
 * Time: 8:16 PM
 */

class Home_Controller extends Refiner_Base_Controller
{
 function __construct()
 {
     parent::__construct();
 }
 public function  index()
 {
     $data = $this->model->db;
     var_dump($data);
     //$this->RView->view('home');
 }
 public function  welcome($id=null)
 {
     echo "welcome {$id}";
 }
}