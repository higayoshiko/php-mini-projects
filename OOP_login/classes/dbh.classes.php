<?php

class Dbh {

  protected function connect(){
    try {
      $username = "root";
      $password = "";
      $dbh = new PDO('mysql', $username, $password);
      return $dbh;
    } catch(PDOException $e) {
      print "error: " . $e->getMessage();
      die();
    }
  }
}
