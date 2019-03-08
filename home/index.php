<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/5/2019
 * Time: 10:41 AM
 */

class index
{
    function __construct()
    {
        /*
         * Load the psr-4 auto-loader to make sure each file
         * is loaded automatically
         *
         * */
        $file = '../vendor/autoload.php';
        if (!file_exists($file)) :
            echo "application error";
        endif;
        require $file;
        /*
         * Start the  application
         * */
        new Application();

    }
}

/*start everything*/
new  index;