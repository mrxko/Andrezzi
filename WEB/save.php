<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  
  // Az adatok fájlba írása
  $data = "$name - $email" . PHP_EOL;
  $file = fopen("adatok.txt", "a");
  fwrite($file, $data);
  fclose($file);
}
?>
