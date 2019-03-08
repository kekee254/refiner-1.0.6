<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/5/2019
 * Time: 7:47 PM
 */

class AppConfigurationFile
{
    public $config = array();
    function __construct()
    {
        $this->config['default_controller'] = 'home';
        /*
         * set the default action of all controllers
         * */
        $this->config['default_action'] = 'index';
        /*
         * set environment
         * we have three state
         * development , test , and production*/

        $this->config['environment'] = 'development';
        /*
         * page not found =
        */
        $this->config['page_not_found'] = null ;
        /*
         * Controller paths
         * */
        $this->config['controller_path'] = realpath(dirname(__FILE__).'/../../') . '/controller/';

        /*
         * View paths
         * */
        $this->config['view_path'] =realpath(dirname(__FILE__).'/../../') . '/view/';
        /*
         * R_URL
         * */
        $this->config['R_URL'] =  'http://' . $_SERVER['HTTP_HOST'] . str_replace('__start__', '', dirname($_SERVER['SCRIPT_NAME']));
        /*
         * DATABASE CONFIGS
         * */
        $this->config['R_DB'] = array(
                                'db_driver'=> 'pdo',
                                'db_host' =>'127.0.0.1',
                                'db_type'=> 'mysql',
                                'db_name'=>'colors',
                                'db_account' =>array('username'=>'root','password'=>''),
                                'db_charset' =>'UTF8',
                                'db_port'=>'3306',
                                'pdo_driver_options' => array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING),
        );
        $this->config['db_global'] = 'off';
        /*
         * COOKIE CONFIGS
         * */
        $this->config['R_COOKIE']= array(
                                'cookie_path' =>'/',
                                'cookie_domain'=>'',
                                'cookie_runtime'=>1209600,
                                'cookie_secure' =>false,
                                'cookie_http'=>true,
                                /*
                                 * Marks the cookie as accessible only through the HTTP protocol*/
                                'cookie_security'=> '',
        );
        /*
         * LOGIN FORM Label
         * defaults: input['type:text'] = username ,input['type:password'] = password
         * remember me
         * */
        $this->config['login_form_labels'] = array('username', 'password','remember_me');



        return $this->config;
    }
}