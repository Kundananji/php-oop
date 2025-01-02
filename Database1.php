<?php

class Database1
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

        echo'<p style="color:blue">New Database1 Instance</p>';

      }

      static function getInstance(){
        if(!self::$instance){
            self::$instance = new Database1();
        }
        return self::$instance;

      }
       function getConnection(){

        if(!self::$connection)
        {
            //only initialize the connection if it has been initialized

            self::$connection =new mysqli();
            echo'<p style="color:red">New Database1 Connection</p>';
        }
           return self::$connection; //MSSQL/Postgres
       }

}

