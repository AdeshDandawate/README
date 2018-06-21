<html>
<?php require('common/header.php') ?>
<?php require('api/db/db.php') ?>
<body>
<?php

$result = mysqli_query($con,'select * from roles');

while($row = mysqli_fetch_assoc($result))
	echo $row['id']."\t".$row['name']."<br>"


?>

<form action="/api/menu_entry.php">
<input type="text" value="" name="roleName">
<button type="submit">Insert</button>
</form>

</body>
<?php require('common/footer.php') 

?>
</html>