<?php
	$dsn = "mysql:host=localhost; dbname=blog";
	$user = "root";
	$pswrd = "";
	
	try {
		$conn = new PDO($dsn, $user, $pswrd);
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo "connection failed because ...".$e->getMessage();
	}
	
	if(isset($_POST['name']) && ISSET($_POST['surname']) && ISSET($_POST['email']) && isset($_POST['password']) && ISSET($_POST['conpassword']) && isset($POST['photo'])) {
		$name = $_POST['name'];
		$surname = $_POST['surname'];
		$photo = $POST['photo'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$conpassword = $_POST['conpassword'];
		
		$sql = "insert into users (name, surname, photo, email, password) values ('$name', '$surname', '$photo', '$email', '$password')";
		
		try {
			$conn->query($sql);
		}
		catch(PDOException $e){
			echo "Data failed to upload ". $e;
		}
	}
?>

<!DOCTYPE html>

<html lang="en">
	<head>
	<link rel="stylesheet" type="text/css" href="task1.css" />
	</head>
	
	<body>
		<form id="register" action="task1.php" method="POST" onsubmit="return validation()">
			<p> Please fill in your details... </p>
			
			<input type="text" name="name" id="name" placeholder="your name" minLength="4" maxLength="12" />
			<span id="nameMes"></span><br>
			<input type="text" name="surname" id="surname" placeholder="Your surname" /> 
			<span id="surMes"></span><br>
			<label for="photo">profile picture</label>
			<input type="file" name="photo" accept="image/*"/>
			<span id="phoMes"></span><br>
			<input type="email" name="email" id="email" placeholder="email" /> 
			<span id="mailMes"></span><br>
			<input type="password" name="password" id="password" placeholder="Password" /> 
			<span id="pasMes"></span><br>
			<input type="password" name="conpassword" id="conpassword" placeholder="Confirm password"/><br>
			<span id="conMes"></span> <br>
			<input type="submit" value="register" />
			<br>
			<span id="button2" > I have acount </span>
		</form>
		
		<script src="task1.js"></script>
	</body>
</html>