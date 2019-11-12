<?php
    
    if(isset($_POST['submit'])) {
      $session = $_POST['session'];
      $fname = $_POST['fname'];
      $mname = $_POST['mname'];
      $lname = $_POST['lname'];
      $type_of_course = $_POST['type_of_course'];
      $select_course = $_POST['select_course'];
      $course_year = $_POST['course_year'];
      $dates = $_POST['dates'];
      $months = $_POST['months'];
      $years = $_POST['years'];
      $registration_no = $_POST['registration_no'];
      $exam_roll = $_POST['exam_roll'];
      $class_roll = $_POST['class_roll'];
      $exampleInputEmail1 = $_POST['exampleInputEmail1'];


      $connection = mysqli_connect('localhost','root','','test');

      if($connection) {
        echo "Data inserted successfully <br> <a href = welcome.php> Home Page</a>";
      } else {
        echo "Error !";
      }

      $query = "INSERT INTO form(session, fname, mname, lname,type_of_course, select_course, course_year, dates, months, years, registration_no, exam_roll, class_roll, exampleInputEmail1)";
      $query .= "VALUES ('$session', '$fname', '$mname', '$lname', '$type_of_course', '$select_course', '$course_year', '$dates', '$months', '$years', '$registration_no', '$exam_roll', '$class_roll', '$exampleInputEmail1')";

      $result = mysqli_query($connection, $query);

      if(!$result) {
        die('Query FAILED' .mysqli_error());
      }

    }
		
?>

