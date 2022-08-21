<?php
include_once 'header.php'
 ?>

 <section class="SignUp">
   <form class="" action="signup-inc.php" method="post">
     <input type="text" name="name" placeholder="Name">
     <input type="text" name="email" placeholder="Email">
     <input type="text" name="uid" placeholder="Username">
     <input type="password" name="pwd" placeholder="Password">
     <input type="password" name="pwdrepeat" placeholder="Password">
     <button type="submit" name="submit">Sign up</button>
   </form>
 </section>

 <?php
 include_once 'footer.php'
  ?>
