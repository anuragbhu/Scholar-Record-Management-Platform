<?php
	
	$connection = mysqli_connect('localhost','root','','test');

	if($connection) {
        echo "";
    } else {
        die("Database connection failed");
    }

    $query = "SELECT * FROM form";

    $result = mysqli_query($connection, $query);

      if(!$result) {
        die('Query FAILED' .mysqli_error());
      }

?>



<!DOCTYPE html>
<html>
<head>
	<title>BHU</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<link rel="stylesheet" type="text/css" href="record.css">
	<link rel="icon" type="img/png" href="UniversityIcon.png">
</head>
<body>

	<div>
		<img src="BHU_Logo.jpg" width="9%" alt="ARE Visual Logo Mark" class="imageSpin" align="left">
	 	<div class="heading">
	 		<h1>BANARAS  HINDU  UNIVERSITY</h1>
      		<h2>INSTITUTE OF SCIENCE</h2>
      		<h3>DEPARTMENT  OF  COMPUTER  SCIENCE</h3>
		</div>
     	<img src="DoCS.jpg" width="13%" alt="ARE Visual Logo Mark" class="imageSpin" align="right">
	</div><br><br><br><br><br><br><br><br>

	<div>
		<nav>
		 	<ul class="ref_1">
				<li class="ref_2">SCHOLAR REGISTRATION PORTAL</li>
			</ul>
		</nav>	
	</div>

	<div>
    	<!-- As a heading -->
    	<nav class="navbar navbar-light bg-light">
        	<span class="navbar-brand mb-0 h1">RECORDS</span>
    	</nav>
    </div><br>

    <div class="container">
    	<div class="row align-items-start">
    		<?php
    			while($row = mysqli_fetch_assoc($result)) {

    				?>
    				<pre>
    					<?php	
    						print_r($row);
    					?>
    				</pre>
    				<?php
    			}
    		?>
    	</div>

    </div>

</body>
</html>