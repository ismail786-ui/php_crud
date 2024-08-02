<?php
//import connection 
include 'conn.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    //Insert query
    $sql = "Insert into phpcrud (name,email,age) values ('$name','$email','$age')";
    //Excute query to connection
    if($conn->query($sql)){
        header('location:view.php');
    };
}
?>

<!-----------------------Form---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php_Crud_Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="./style.css" rel="stylesheet">
</head>
<body>
    <div id="form">
    <h2 class="text-center text-white">Register Form</h2>
    <form method="post" action="./index.php">
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text"  class="form-control " id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email"  class="form-control " id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="" class="form-label">Age</label>
            <input type="number"  class="form-control " id="age" name="age" min="1" max="100" required>
        </div>
        <div class="btn">
        <button name="submit" class="btn mt-3 mb-3">Submit</button>
        </div>
    </form>
    </div>
</body>
</html>