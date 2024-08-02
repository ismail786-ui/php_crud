<?php
   include 'conn.php';

   if(isset($_POST['update'])){
   $id = $_GET['update'];
   $name = $_POST['name'];
   $email = $_POST['email'];
   $age = $_POST['age'];
   //update query
   $sql = "update phpcrud set `name`='$name',`email`='$email',`age`='$age' where id='$id'";
    //excute query that connection
   if(mysqli_query($conn,$sql)){
         header('location:view.php');
   }  
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php_Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="./style.css" rel="stylesheet">
</head>
<body>
    <?php
    $id = $_GET['update'];
    //fetch value from database
    $sql = "select * from phpcrud where id = '$id'";
    //excute query that connection
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
?>
    <div id="form">     
    <form method="post">
    <h2 class="text-center text-white">Update Form</h2>
        <div class="form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" value="<?php echo $row['name'] ?>"  class="form-control " id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email"  class="form-control " id="email"  value="<?php echo $row['email'] ?>"  name="email" required>
        </div>
        <div class="form-group">
            <label for="" class="form-label">Age</label>
            <input type="number"  class="form-control " id="age" name="age"  value="<?php echo $row['age'] ?>" min="1" max="100" required>
        </div>
        <div class="btn">
        <button name="update" class="btn mt-3 mb-3">Update</button>
        </div>
    </form>
    </div>
    <?php
    }
}
?>
</body>
</html>