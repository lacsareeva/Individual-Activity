<?php
 if($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST ["name"]; 
  echo "Hello, $name!"
}
?>

<form method ="post">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name">
  <input type="submit" value="Submit">
</form>