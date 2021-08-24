<?php
    session_start();
    if(!isset($_SESSION['login'])){
        header('location:login.php');
      }
    include("config/db.php");
    $id_can_xoa = $_GET['id'];    
    $sql = "DELETE FROM tbl_coquan WHERE id ='$id_can_xoa'";
    $result = mysqli_query($conn,$sql);
    $sql1="DELETE FROM tbl_canbo WHERE id_donvi='$id_can_xoa'";
    $result1 = mysqli_query($conn,$sql1);
    if($result == true){
        if($result1 == true){
        header('Location: indexpb.php');
        }
    }

?>