<?php
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$tur = $_FILES["file"]["type"];
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  if($tur=="video/mp4"){
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
      header("Location: /gallery.php");
      die();
    } else {
      echo "Sorry, there was an error uploading your file.";
      header("Location: /gallery.php");
      die();
    }
  }
else{

  $check = getimagesize($_FILES["file"]["tmp_name"]);
  if($check !== false) {
    if($check["mime"]=="image/jpeg" || $tur=="video/mp4"){
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
            header("Location: /gallery.php");
            die();
          } else {
            echo "Sorry, there was an error uploading your file.";
            header("Location: /gallery.php");
      die();
          }
    }
    $uploadOk = 1;
  } else {
    echo '<script>alert("File format must be jpeg, png or mp4.")</script>';
    header("Location: /gallery.php");
      die();
    echo $tur;
    $uploadOk = 0;
  }
}
}

?>