<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/5/2019
 * Time: 10:55 AM
 */

class Config
{
/*
 * this method gets a config values
 * */
private  $config;
 public function try_config($key)
 {
     $this->config= new AppConfigurationFile();
    return $this->config->config[$key];
 }
}