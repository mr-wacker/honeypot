<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
  Select recipe to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload File" name="submit">
</form>

<a href="showFiles.php">See uploaded recipes</a>

<div>

</body>
</html>

<?php

if(isset($_POST["submit"])) {
  $target_dir = "appUploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  echo("uploading " . basename($_FILES["fileToUpload"]["name"]) . "...");
  echo("<div>");

  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "File upload failed";
  }

  echo "<div>";
}
?>