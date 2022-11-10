<?php
include("config.php");

session_start();
$var=$_SESSION["enrollment"];

$query=mysqli_query($con,"select *, count(*) as countt from attendance where StudentEnroll='$var' and attendance='Present'");
while($row=mysqli_fetch_array($query)){
    $name=$row["countt"];
}
 $query=mysqli_query($con,"select *,count(*) as counti from attendance where StudentEnroll='$var' and attendance='Absent'");
while($row=mysqli_fetch_array($query)){
    $counti=$row["counti"];
}

$query1=mysqli_query($con,"select * from form where StudentEnroll='$var'");
    while($row1=mysqli_fetch_array($query1)){
        $name2=$row1["StudentName"];
        $enroll=$row1["StudentEnroll"];
        $sci=$row1["Science"];
        $eng=$row1["English"];
        $com=$row1["Computer"];
        $maths=$row1["Maths"];
        $total=$row1["Total"];
        $grade=$row1["Grade"];
    }


$query2=mysqli_query($con,"select * from biodata where StudentEnroll='$var'");
    while($row2=mysqli_fetch_array($query2)){
        $age=$row2["Age"];
        $email=$row2["Email"];
        $address=$row2["Address"];
        $city=$row2["City"];
        $teacher=$row2["TeacherName"];
        $batch=$row2["Batch"];
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<div class="jumbotron text-white text-center bg-warning">

<h1>Student Report</h1>
</div>
<body>
   <p style="text-decoration:underline"> <strong>Name:</strong><?php echo $name2?></p>
   <p style="text-decoration:underline"> <strong>Present Days:</strong><?php echo $name?></p>
   <p style="text-decoration:underline"> <strong>Absent Days:</strong><?php echo $counti?></p>
   <p style="text-decoration:underline"> <strong>Enrollment:</strong><?php echo $enroll?></p>
   <p style="text-decoration:underline"> <strong>Age:</strong><?php echo $age?></p>
   <p style="text-decoration:underline"> <strong>Email:</strong><?php echo $email?></p>
   <p style="text-decoration:underline"> <strong>Address:</strong><?php echo $address?></p>
   <p style="text-decoration:underline"> <strong>City:</strong><?php echo $city?></p>
   <p style="text-decoration:underline"> <strong>Teacher Name:</strong><?php echo $teacher?></p>
   <p style="text-decoration:underline"> <strong>Batch:</strong><?php echo $batch?></p>

   <table class="table">
    <thead>
        <tr>
       <th><p style="text-decoration:underline"><strong>Science:</strong></p></th>
       <th><p style="text-decoration:underline"><strong>English:</strong></p></th>
       <th><p style="text-decoration:underline"><strong>Maths: </strong></p></th>
       <th><p style="text-decoration:underline"><strong>Computer:</strong></p></th>
       <th><p style="text-decoration:underline"><strong>Total:</strong> </p></th>
       <th><p style="text-decoration:underline"><strong>Grade:</strong></p></th>

</tr>
</thead>

<tbody>
    <tr>
    <td><?php  echo $sci ?></td>
    <td> <?php  echo $eng ?></td>
    <td><?php  echo $maths ?></td>
    <td><?php  echo $com ?></td>
    <td> <?php  echo $total?></td>
    <td><?php  echo $grade ?></td>
    </tr>
</tbody>



</table>

</body>
</html>