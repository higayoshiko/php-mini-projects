<?php

  if(isset($_POST["submit"])){
    //grabbing the data
    $uid = $_POST["submit"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];
    $email = $_POST["email"];

     include "../classes/signup.classes.php";
     include "../classes/signup-contr.classes.php";
     $signup = new SignupContr($uid, $pwd, $pwdrepeat, $email);
  }
