<?php 

require_once ('../db.php');

  $id = $_GET['id'];
  $DelSql = "DELETE FROM `guest_book` WHERE id=$id";

  $res = mysqli_query($conn, $DelSql);
  if ($res) {
    header("Location: guest_book.php");
  }else{
    echo "Failed to delete";
  }

 ?>