<?php 

require_once ('../db.php');

  $id = $_GET['id']; 
  $db = $_GET['db'];

//   GALLERY - On supprime aussi fichier dans dossier
  if($db=="gallery"){
    $selSql = "SELECT * FROM `$db` WHERE id=$id";
    $res = mysqli_query($conn, $selSql);
    $r = mysqli_fetch_assoc($res);
    // Suppression du fichier
    unlink('../upload/'.$r['image']); 
  }
  // On supprimme la ligne de la bdd
  $DelSql = "DELETE FROM `$db` WHERE id=$id";

  
  $res = mysqli_query($conn, $DelSql);
  if ($res) {
    header("Location: $db.php");
  }else{
    echo "Failed to delete";
  }

 ?>