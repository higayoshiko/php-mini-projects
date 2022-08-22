<?php
include_once 'header.php'
 ?>

 <section class="login">
   <form class="" action="includes/login.inc.php" method="POST">
     <input type="text" name="uid" placeholder="Username/Email">
     <input type="password" name="pwd" placeholder="Password">
     <button type="submit" name="submit">Login</button>
   </form>
   <?php
   if(isset($_GET["error"])){
     if($_GET["error"] == "emptyinput"){
       echo "<p>
       Fill in all fields!
       </p>";
     }else if($_GET["error"] == "wronglogin"){
       echo "<p>
       Incorrect information!
       </p>";
     }
   }
    ?>
 </section>

 <?php
 include_once 'footer.php'
  ?>
