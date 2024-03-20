<?php
  function generatePassword($lenght) {
  $char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $paword = "";
  for($i = 0; $i < $length; $i++ {
    $pasword .=$chars[rand(0, strlen($chars) - 1)];
 }
  return $password;
}

 $passwordLength =8;
 $password = generatePassword($passwordLenght0;
 echo "Your generaeted password is: $password";
?>