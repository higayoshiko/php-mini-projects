<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<header>
  <ul>
    <?php
    if(isset($_SESSION["userid"])){
     ?>
    <li><a href="#"></a>
      <?php echo $_SESSION["useruid"]; ?>
    </li>
    <li><a href="includes/logout.inc.php"></a>logout</li>
    <?php
  } else {
    ?>
    <li><a href="#"></a>sign up</li>
    <li><a href="#"></a>login</li>
    <?php
    }
    ?>
  </ul>
</header>

<section class="index">
  <div class="container-signup">
    <form class="" action="includes/signup.inc.php" method="post">
      <input type="text" name="uid" placeholder="username">
      <input type="password" name="pwd" placeholder="password">
      <input type="password" name="pwdRepeat" placeholder="repeat password">
      <input type="text" name="email" placeholder="email">
      <br />
      <button type="submit" name="button">Sign up</button>
    </form>
  </div>
  <div class="container-login">
    <form class="" action="includes/login.inc.php" method="post">
      <input type="text" name="uid" placeholder="username">
      <input type="password" name="pwd" placeholder="password">
      <br />
      <button type="submit" name="button">Sign up</button>
    </form>
  </div>
</section>

  </body>
</html>
