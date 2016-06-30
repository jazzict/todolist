<?php
 // server, username, password, databasename
 $connection = new mysqli('localhost','root','','todolist');

 $wat = $_POST['wat'];
 $wanneer = $_POST['wanneer'];

 $sql = "insert into info (wat, wanneer) values('$wat', '$wanneer')";

 $connection->query($sql);
 header("location: /davinci/todolist/todolist.php");

?>