<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];

  $errors = array();

  if (empty($name)) {
    $errors[] = "Поле не должно быть пустое";
  } elseif (strlen($name) < 5 || strlen($name) > 20) {
    $errors[] = "Имя должно содержать от 5 до 20 символов";
  }

// ваааа я жестко не успеваюююю, надо на сорвенования