<?php

class Exam{
    
    var $name='Exam';

    function processRegistration(){
        $database = new Database();
        $conn = $database->getConnection();

        if($conn)
        {
          echo'<p>'.$this->name.' Registration Successfully processed</p>';
        }
        else{
            echo'<p style="color">Error. Failed to do '.$this->name.' registration</p>';
        }
    }
}