<?php
session_start ();
if
($_SERVER["REQUEST _METHOD" ]" POST") (
$usernome = $_PosT["username"1:
$password = $_POST["password"];
if ($usernome == "admin"
$& $password
$
SESSION[ "logged_in"] = true;
header ("Location: welcome php");
} else }
echo "Invalid username or password";
 }
}
?>


<form method="post">

<label for="username">Username: </label>

<input type="text" id="username" name="usernome">
«label
for="password">Password: </label>

<input type="password" id="password" nome="possword">

<input type="submit" value="Login">
</form>