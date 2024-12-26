<?php

class Course
{
    var $name='Course';

    function processRegistration(){
        $database = new Database(); //database tightly coupled to course registration
        $conn = $database->getConnection();

        if($conn){

             echo'<p>'.$this->name.' Registration Successfully processed</p>';
        }
        else{
            echo'<p style="color">Error. Failed to do '.$this->name.' registration</p>';
        }
    }
}