<html>
<?php require('common/header.php'); ?>
<body>
<?php require('api/db/db.php'); ?>
<!--bb<button class="btn btn-primary">YOLO</button>-->
<table class="table table-bordered table-hover" id="roleTable">
	<thead>
	<tr>
		<th>id</th>
		<th>role name</th>
	</tr></thead>
<tbody>
<?php
$result = mysqli_query($con,'select * from roles');
while($row = mysqli_fetch_assoc($result))
	echo "<tr><td>".$row['id']." </td><td>".$row['name']." </td></tr>";
?>
<tbody>
</table>



<form action="./api/menu_entry.php">
<input type="text" value="" name="roleName">
<input type="hidden" value="insert" name="operation">
<button type="submit">Insert</button>
</form>

<form action="./api/menu_entry.php">
<input type="text" value="" name="roleName">
<input type="hidden" value="delete" name="operation">
<button type="submit">Delete</button>
</form>

</body>
<?php require('common/footer.php');?>

<script type="text/javascript" src="./js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="./js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="./plugins/datatables.min.js"></script>
<script>

	$('#roleTable').DataTable( {
    dom: 'Bfrtip',
    buttons: [
        'copy', 'excel', 'pdf'
    ]
} );
	</script>

</html>