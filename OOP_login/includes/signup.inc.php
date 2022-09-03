<?php

  if(isset($_POST["submit"])){
    //grabbing the data
    $uid = $_POST["submit"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdRepeat"];
    $email = $_POST["email"];

     include "../classes/dbh.classes.php";
     include "../classes/signup.classes.php";
     include "../classes/signup-contr.classes.php";
     $signup = new SignupContr($uid, $pwd, $pwdRepeat, $email);

     $signup->signupUser();

     header("location: ../index.php?error=none");
  }
