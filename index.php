<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Registeration Form</title>
	</head>
	<body>
	<center>
		<header>
			<h1>Registration Form</h1>
			<hr><br>
		</header>
		<div>
			<form action="#" method="Post">
				<div>
					<input type="text" name="name" placeholder="enter your name*">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="degree" placeholder="enter your qualification*">
				</div>
				<div style="padding-top:10px;">
					<input type="text" name="mobile" placeholder="mobile number*">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="text" name="email" placeholder="email id*">
				</div>
				<div style="padding-top:30px;">
					<input type="submit" name="submit" value="Register">
				</div><br><br>
			</form>
		</div>
		<hr>
		<h2>DataList</h2>
		<div>
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>Degree</th>
						<th>Mobile</th>
						<th>Email</th>
						<th>Operation</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$selectquery = "select * from datalist";
					$select_from_db = mysqli_query($connection, $selectquery);
					while ($res = mysqli_fetch_array($select_from_db)) {
					?>
					<tr>
						<td><?php echo $res['id']; ?></td>
						<td><?php echo $res['name']; ?></td>
						<td><?php echo $res['degree']; ?></td>
						<td><?php echo $res['mobile']; ?></td>
						<td><?php echo $res['email']; ?></td>
						<td><a href="delete.php?id=<?php echo $res['id']; ?>">Delete</a></td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
	</center>
	</body>
</html>

<?php 
if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$degree = $_POST['degree'];
	$mobile = $_POST['mobile'];
	$email = $_POST['email'];
	$insertquery = "insert into datalist(name,degree,mobile,email) values('$name','$degree','$mobile','$email')";
	$insert_into_db = mysqli_query($connection, $insertquery);
if ($insert_into_db) {
?>
<script type="text/javascript">
	alert('data inserted properly');
</script>
<?php
}else{
?>
<script type="text/javascript">
	alert('data not inserted');
</script>
<?php
}
}
?>