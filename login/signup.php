<?php
include_once 'header.php'
 ?>

 <section class="SignUp">
   <form class="" action="includes/signup.inc.php" method="POST">
     <input type="text" name="name" placeholder="Name">
     <input type="text" name="email" placeholder="Email">
     <input type="text" name="uid" placeholder="Username">
     <input type="password" name="pwd" placeholder="Password">
     <input type="password" name="pwdrepeat" placeholder="Password">
     <button type="submit" name="submit">Sign up</button>
   </form>
   <?php
   if(isset($_GET["error"])){
     if($_GET["error"] == "emptyinput"){
       echo "<p>
       Fill in all fields!
       </p>";
     }else if($_GET["error"] == "invaliduid"){
       echo "<p>
       Choose a proper username!
       </p>";
     }else if($_GET["error"] == "invalidemail"){
       echo "<p>
       Choose a proper email
       </p>";
     }else if($_GET["error"] == "passwordsdontmatch"){
       echo "<p>
       Passwords don't match!
       </p>";
     }else if($_GET["error"] == "failed"){
       echo "<p>
       Something went wrong. Try again!
       </p>";
     }else if($_GET["error"] == "usernametaken"){
       echo "<p>
       Choose another username!
       </p>";
     }else if($_GET["error"] == "none"){
       echo "<p>
       Thank you. Sign up successful!
       </p>";
     }
   }
    ?>
 </section>

 <?php
 include_once 'footer.php'
  ?>
