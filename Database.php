<?php

class Database
{

      function __construct($env){
        if($env =='dev')
        {
            //connect to localhost
        }
        else
        {
            //connect to dev database
        }

      }
       function getConnection(){
           echo'<p style="color:red">New Database Connection</p>';
           return new mysqli(); //MSSQL/Postgres
       }

}