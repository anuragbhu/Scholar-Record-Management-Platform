<?php
$con=mysqli_connect('localhost','root','','test');
function showData()
{
  global $con;
  $query="SELECT * FROM form";
  $run=mysqli_query($con,$query);
  if($run==true)
   {
     ?>
     <br><CENTER><FONT COLOR="RED" FACE="JOKERMAN"><h1>SCHOLAR'S DETAILS</h1></FONT></CENTER><br>
<table border="3" width="100%" align="center">
<tr bgcolor="grey" style="color:white" ALIGN="center">
<td>FIRST NAME</td>
<td>MIDDLE NAME</td>
<td>LAST NAME</td>
<td>TYPE OF COURSE</td>
<td>SELECT COURSE</td>
<td>COURSE YEAR</td>
<td>DATES</td>
<td>MONTHS</td>
<td>YEARS</td>
<td>RSGISTRATION NUMBER</td>
<td>EXAM ROLL</td>
<td>CLASS ROLL</td>
<td>PRIMARY EMAIL</td>
</tr>

<?php
    $allData = mysqli_fetch_all($run,MYSQLI_ASSOC);

    foreach($allData as $data)
    {
    ?>
      <tr bgcolor="white" align="center">
    <td><?php echo $data['fname']; ?></td>
    <td><?php echo $data['mname']; ?></td>
    <td><?php echo $data['lname']; ?></td>
    <td><?php echo $data['type_of_course']; ?></td>
    <td><?php echo $data['select_course']; ?></td>
    <td><?php echo $data['course_year']; ?></td>
    <td><?php echo $data['dates']; ?></td>
    <td><?php echo $data['months']; ?></td>
    <td><?php echo $data['years']; ?></td>
    <td><?php echo $data['registration_no']; ?></td>
    <td><?php echo $data['exam_roll']; ?></td>
    <td><?php echo $data['class_roll']; ?></td>
    <td><?php echo $data['exampleInputEmail1']; ?></td>
    </tr>
    <?php
    }
    ?></table><?php
}
}
?>


<html>
<head>
<title>
 Show Data
</title>
</head>
<body bgcolor="pink">
<?php showData(); ?>
<br><br><br>
<a href=register.php><button>Back</button></a>
</body>
</html>
