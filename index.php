<?php
    include('Course.php');
    include('Exam.php');
    include('Room.php');
    include('Database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web App</title>
</head>
<body>

  <h1>Welcome to OOP</h1>

  <?php
   //object: self contained module that consists of its own data and logic that operates on the data

    if(isset($_GET['action'])){

        $type = $_GET['registrationType'];
        if($type == null){
            echo'<p>Please select registration</p>';
        }
        else if($type == 'course')
        {
            $courseRegistration = new Course;
            $courseRegistration->processRegistration();
        }
        else if($type =='exam')
        {
            $examRegistration = new Exam;
            $examRegistration->processRegistration();
        }
        else if($type =='room')
        {
            $roomRegistration = new Room;
            $roomRegistration->processRegistration();
        }
        else{
            echo'<p>Unknown registration selected</p>';
        }


    }

  ?>

  <form method="get">
    <label>Choose An Option</label>
    <br/>
    <select name="registrationType">
        <option value="">--Select Option</option>
        <option value="course">Course Registration</option>
        <option value="exam">Exam Registration</option>
        <option value="room">Room Registration</option>     
    </select>
    <br/>
    <input type="submit" value="Register" name="action">
  </form>
    
</body>
</html>