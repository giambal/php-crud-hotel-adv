<?php

  if ($_POST["id"] &&
      $_POST["name"] &&
      $_POST["lastname"]) {

    $id=$_POST["id"];
    $name=$_POST["name"];
    $lastname=$_POST["lastname"];


    $servername = "localhost";
    $username = "root";
    $password = "geforce2";
    $dbname = "prova";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_errno) {
      echo $conn->connect_error;
      return;
    }

    $sql="
    UPDATE paganti
    SET name = '$name' , lastname = '$lastname'
    WHERE id = $id
    ";

    $result = $conn->query($sql);


    $conn->close();

};


 ?>
