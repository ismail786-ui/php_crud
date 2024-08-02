<?php
include 'conn.php';

if($id = $_GET['delete']){
    //delete query
    $sql = "delete from phpcrud where id='$id'";
    //excute query that connection
    if($conn->query($sql)){
        header("location:view.php");    
    }
}
?>