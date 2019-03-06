<?php
/**
 * Created by PhpStorm.
 * User: KEKEE
 * Date: 3/6/2019
 * Time: 8:43 AM
 */

class Db
{
    private $connection;
    public $rdb;
    function __construct()
    {
    }
    /*
     * Make connection
     * Driver:PDO
     * */
  public function  hook()
  {
      $this->rdb =Loader::get_configs('R_DB');

      if(!$this->connection):
            $RDB = $this->rdb;
            $pdo =ucfirst ($RDB['db_driver']);

        try{
            $this->connection = new $pdo(
                $RDB['db_type'].':host='. $RDB['db_host'].';dbname='.$RDB['db_name'].';port='.$RDB['db_port'].';charset='.$RDB['db_charset'],
                $RDB['db_account']['username'],$RDB['db_account']['password'],$RDB['pdo_driver_options']
             );
        }catch (PDOException $e)
        {
                echo "Database connection could not be established due to:".$e->getMessage();
        }
            endif;
        return $this->connection;
  }
}