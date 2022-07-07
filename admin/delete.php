<?php 

require_once ('../db.php');

  $id = $_GET['id'];
  $db = $_GET['db'];
  $DelSql = "DELETE FROM `$db` WHERE id=$id";

  $res = mysqli_query($conn, $DelSql);
  if ($res) {
    header("Location: $db.php");
  }else{
    echo "Failed to delete";
  }

 ?>