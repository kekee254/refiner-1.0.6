<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/6/2019
 * Time: 6:03 PM
 */

namespace common;


class Forms
{
 public function loginForm ($to){
    $method = "POST";
    /*
     * begin form*/

   echo '<h5>Login to your account</h5>'.$this->formHeader($to,$method);
   $this->label('username','username');
   $this->input(1,'text',array(\Loader::get_configs('login_form_labels')[0]));
   $this->label('password','password');
   $this->input(1,'password',\Loader::get_configs('login_form_labels')[1]);
   echo $this->formFooter();
 }
 public  function label($for,$name)
 {
     echo "<label for='{$for}'>$name</label>";
 }
 /*
  * begin form
  * set form attributes
  * @param string : the url where the form will be processed
  * @param string method: post or get*/
 public function formHeader($action,$method)
 {
     return "<form action='{$action}' method='{$method}'>";
 }
 /*close form */
 public function formFooter($btn_name)
 {
     return "<br><button class='btn btn-outline-primary' type='submit' class='submit'>{$btn_name}</button><br></form>";
 }
 /*
  * Create input fields
  * @param  int no : no of input fields
  * @param  string type : input field type
  * @param string names can also be an array: name of the input filled */
  public function input ($no , $type,$names)
  {
        if(!is_array($names) && is_array($type)):
            $names = explode(',',$names);
            $type = explode(',',$type);
            endif;

      for ($i= 0; $i<$no ; $i ++)
      {
          echo "<input type='{$type}' class='form-control' name='{$names[$i]}'/> <br>";
      }
  }
  /*
   * Checkbox
   * @param int $no  : no of checkbox to display*/

  public  function checkbox($no ,$labels,$names)
  {
      if(!is_array($names)):
          $names = explode(',',$names);
          $labels = explode(',',$labels);
      endif;

      for ($i= 0; $i<$no ; $i ++)
      {

          echo "<label><input type='checkbox' class='custom-checkbox' name='{$names[$i]}'/> {$labels[$i]} </label>";
      }
  }
  /*
   * Create a select input field
   * @param string name : select name
   * @param  string / array  values*/
  public function inputSelect($name,$values){
      if(!is_array($values)):
          $names = explode(',',$values);
      endif;
            echo "<select name='{$name}'>";
                      foreach ($values as $value):
                          echo "<option value='{$value}'></option>";
                      endforeach;
  }

}