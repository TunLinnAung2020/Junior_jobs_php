<?php
session_start();
include_once('config/database.php');
 if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])){
     $id =$_GET['id'];
     $sql ="SELECT *FROM categories where id=$id";
     $category_detail =mysqli_query($connection,$sql);
     $row =mysqli_fetch_assoc($category_detail);
     $_SESSION['result']=$row;
     header("location:category_detail.php");
 }else if($_SERVER['REQUEST_METHOD']=='GET'){
 $sql ="SELECT * from categories";
 $result =mysqli_query($connection,$sql);
 }else if(isset($_POST)){
     $name =$_POST['name'];
     $name_mm =$_POST['name_mm'];
     $sql ="INSERT INTO categories(name,name_mm) value('name','name_mm')";
     $success =mysqli_query($connection,$sql);
     if ($success){}
 }
?>