<?php
$dir = "appUploads/";
$files = scandir($dir);

if (count($files) > 1) {
  for ($i = 2; $i < count($files); $i++) {
    echo '<a href="' . $dir . $files[$i] . '">'. $files[$i] . '</p>';
    echo "<br>";
  }
}
?>