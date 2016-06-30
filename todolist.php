<?php 
	//server, username, password, databasename
	$connection = new mysqli('localhost','root', '', 'todolist');


	$sql = 'SELECT * FROM info';

	$buffer = $connection->query($sql);

	$info = $buffer->fetch_all(MYSQLI_ASSOC); 

	//var_dump($info); 
 ?>

  <ul>
  	<?php foreach ($info as $informatie) { ?>
 	<li>
 		id: <?=	$informatie['id']; ?>
 		wat: <?= $informatie['wat']; ?>
 		wanneer: <?php echo $informatie['wanneer']; ?>
 		<a href="edit.php?id=<?php echo $informatie ['id'] ?>"> Edit </a> 
 		<a href="delete.php?id=<?php echo $informatie ['id'] ?>"> Delete </a>


 	</li>
 	<?php } ?>
  </ul>

  <form action="insert.php" method="post">
 <label for="wat">wat:</label><br>
 <input name="wat"><br>

 <label for="wanneer">wanneer:</label><br>
 <input name="wanneer"><br>

 <input type="submit" name="submit" value="save">
</form>