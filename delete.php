<?php
 // server, username, password, databasename
 $connection = new mysqli('localhost','root','','todolist');

 // prepare id from the url querystring to find record
 $id = $_GET['id'];

 // prepare delete instruction
 $sql = "DELETE FROM info WHERE id = $id";

 // execute delete instruction
 $connection->query($sql);
 header("location: /davinci/todolist/todolist.php");
?>