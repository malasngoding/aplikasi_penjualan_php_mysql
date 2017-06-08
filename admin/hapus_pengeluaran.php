<?php 
include 'config.php';
$id=$_GET['id'];
mysql_query("delete from pengeluaran where id ='$id'");
header("location:pengeluaran.php");

 ?>