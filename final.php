<?php
session_start();

include("config.php");
if(@$_POST["sub"]){
    $enroll=$_POST["enrollment"];
    $_SESSION["enrollment"]=$enroll;
    header("location:result.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>   
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<form method="post">
    <div class="jumbotron text-white text-center bg-success">
    <h1> Check Your Result</h1>
    </div>
    <strong>Please Enter Enrollment No:</strong>   <input type="text" name="enrollment">
    <input type="submit" class="btn btn-info" name="sub">
</form>
</body>
</html>


