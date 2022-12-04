<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Registeration Form</title>
	</head>
	<body>
	<center>
		<header><h1>Registration Form</h1><hr><br></header>
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
	</center>
	</body>
</html>

<?php 

include 'connection.php';

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