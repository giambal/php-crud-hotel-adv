<?php

if ($_POST["id"]) {

  $id=$_POST["id"];

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
  DELETE FROM pagamenti
  WHERE id = $id
  ";

  $result = $conn->query($sql);


  $conn->close();

};


 ?>
