<?php

class Database
{
    static $connection;
    static $instance;

      private function __construct($env=null)
      {
        if($env =='dev')
        {
            //connect to localhost
        }
        else
        {
            //connect to dev database
        }

        echo'<p style="color:blue">New Database Instance</p>';

      }

      static function getInstance(){
        if(!self::$instance){
            self::$instance = new Database();
        }
        return self::$instance;

      }
       function getConnection(){

        if(!self::$connection)
        {
            //only initialize the connection if it has been initialized

            self::$connection =new mysqli();
            echo'<p style="color:red">New Database Connection</p>';
        }
           return self::$connection; //MSSQL/Postgres
       }

}

