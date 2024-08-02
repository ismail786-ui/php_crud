<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_View</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style type="text/css" rel="stylesheet">
     #table{
    margin: 30px 0 0 50px;
   }
   table th,tr,td{
       text-align: center;
        border:2px solid black;
    }
    th{
        padding:10px;
    }
    td{
        width:100px;
        padding:15px;
        font-size: 20px;
    }
    button{
        width:100px;
        margin:5px;
    }
    button a{
        margin-top:5px;
        padding:5px;
    }
    </style>
    
</head>
<body>
    <div id="table">
    <table>
     <div class="container">
        <div class="row">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Actions</th>
        </tr>
        </div>
        <tbody>
        <?php
        //import connection 
        include 'conn.php'; 
        $sql = "select * from phpcrud";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
        //fetch value from database
        while($row = mysqli_fetch_array($result)){  
        ?> 
        <div class="row">
        <td><?php echo $row['id'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['age'] ?></td>
        <td>
        <button class="btn btn-success"><a href="update.php?update=<?php echo $row['id']?>" class="text-white">Edit<a></button>
        <button class="btn btn-danger"><a href="delete.php?delete=<?php echo $row['id']?>" class="text-white">Delete<a></button>
        </div>
        </tbody>
     </div>
      <?php
         }
        }
        ?>
    </table>
    </div>
</body>
</html>