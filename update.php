<?php
 // server, username, password, databasename
 $connection = new mysqli('localhost','root','','todolist');

 // prepare id and values to be updated in table gegevens in DB
 $id = $_POST['id'];
 $wat = $_POST['wat'];
 $wanneer = $_POST['wanneer'];

 // prepare update instruction
 $sql = "UPDATE info SET wat = '$wat', wanneer = '$wanneer' WHERE id = $id";

 // execute update instruction
 $connection->query($sql);
 header("location: /davinci/todolist/todolist.php");
?>