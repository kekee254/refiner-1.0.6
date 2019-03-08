<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/8/2019
 * Time: 3:32 PM
 */

namespace common;


class RDate
{
    public $date ;
    public function __construct()
    {
        $this->date = new \DateTime();

    }

    public function setDate($dateString)
    {

         $this->date->setDate();
    }

}