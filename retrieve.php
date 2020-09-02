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
	
	$sql = "select name, surname, photo, email from users";
?>
<!doctype html>

<html lang="en">
	<head>
	</head>
	
	<body>
		<?php
			try {
				$data = $conn->query($sql);
				
				foreach($data as $results) {
					echo "<div>";
						echo '<img src="data:image/*; charset=utf8; base64'. base64_encode($results['photo']). '"/>';
						echo "<p>".$results['name']$results['surname']."</P>";
						echo "<p>".$results['email']."</P>";
						echo "<p>".."</P>";
					echo "</div>";
				}
			}
		?>
	</body>
</html>