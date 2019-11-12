<?php
	
	if(isset($_POST['submit'])) {
		$exampleFormControlInput1 = $_POST['exampleFormControlInput1'];
		$exampleFormControlSelect1 = $_POST['exampleFormControlSelect1'];
		$exampleFormControlTextarea1 = $_POST['exampleFormControlTextarea1'];

		$connection = mysqli_connect('localhost','root','','test');

		if($connection) {
        echo "Report submitted successfully <br> <a href = welcome.php> Home Page</a>";
      	} else {
        echo "Error !";
      	}

      	$query = "INSERT INTO report(exampleFormControlInput1, exampleFormControlSelect1, exampleFormControlTextarea1)";
      	$query .= "VALUES ('$exampleFormControlInput1', '$exampleFormControlSelect1', '$exampleFormControlTextarea1')";

      	$result = mysqli_query($connection, $query);

      	if(!$result) {
        	die('Query FAILED' .mysqli_error());
      }
	}

?>