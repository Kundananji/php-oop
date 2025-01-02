<?php

class Course
{
    var $name='Course';

    function processRegistration(){

        //one instance
        $database1 = Database1::getInstance(); //database tightly coupled to course registration
        
        $database = Database::getInstance(); 
        $database = Database1::getInstance(); 
        $database = Database::getInstance(); 
        $database = Database1::getInstance(); 
        $database = Database::getInstance(); 
        
        //process 1
        {
            
            $conn = $database1->getConnection();
        }

        //process 2
        {
          
           $conn = $database->getConnection();
        }

        //process 3
        {
           
            $conn = $database->getConnection();
        }

        //process 4
        {
            
            $conn = $database->getConnection();
         }

         //process 5
         {
            
          $conn = $database->getConnection();
         }

        if($conn){

             echo'<p>'.$this->name.' Registration Successfully processed</p>';
        }
        else{
            echo'<p style="color">Error. Failed to do '.$this->name.' registration</p>';
        }
    }
}