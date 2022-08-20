<?php

  function calculator($num1, $num2, $operator) {
    $sum;

    if($operator === "add"){
      $sum = $num1 + $num2;
    }else{
      $sum = $num1 - $num2;
    }
    return $sum;
  }

  $num1 = $_GET["num1"];
  $num2 = $_GET["num2"];
  $operator = $_GET["operator"];

  echo calculator($num1, $num2, $operator);
