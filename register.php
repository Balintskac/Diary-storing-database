<?php
  session_start();

function getUser($name) {
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "sharebase";

  $conn = new mysqli($servername, $username, $password, $dbname);

  $sql = "SELECT * FROM users where name = '$name' limit 1";
  $result = $conn->query($sql);

  return $result->fetch_assoc();
}


	if (
		(isset($_POST['username']) && !empty(trim($_POST['username']))
		&& isset($_POST['password']) && !empty(trim($_POST['password'])))
		||
		(isset($_COOKIE['user']) && isset($_COOKIE['password']))
		) {

		if (isset($_COOKIE['user'])) {
			$keresett_felhasznalo = $_COOKIE['user'];
			$keresett_jelszo = $_COOKIE['password'];
		} else {
			$keresett_felhasznalo = $_POST['username'];
			$keresett_jelszo = $_POST['password'];
		}

		$user = getUser($keresett_felhasznalo);

		if ($user) {
			if ($user['password'] == $keresett_jelszo) {
				$_SESSION['logged_in'] = $user;

				if (isset($_POST['rememberme'])) {
					setcookie('user',$_POST['username'], time() + 60*60);
					setcookie('password',$_POST['password'], time() + 60*60);
				}


			/*	switch ($felhasznalo['jogosultsag']) {
					case 'diak':
						header('Location: profil.php');
						break;
					case 'admin':
						header('Location: admin.php');
						break;
				}
        */
			} else {
				print "Nem jo a jelszo. Talalgass tovabb!";
			}
		} else {
			echo "Nincs ilyen felhasznalo";
		}

	}

 ?>
<DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Felhasználó</title>
</head>
<body>
  <div class="container">
<form action="" method="POST" name="login">
  <div class="form-group">
    <label for="usr">Felhasználónév:</label>
    <input type="text" name="username" class="form-control" id="usr" placeholder="Kérlek add meg a nevet" required>
  </div>
  <div class="form-group">
    <label for="pwd">Jelszó:</label>
    <input type="password" name="password" class="form-control" id="pwd" placeholder="Kérlek add meg a jelszót" required>
  </div>
<div class="checkbox">
	<label><input type="checkbox" name="rememberme">Emlekezz ram</input></label><br><br>
</div>
  <input type="submit" name="login" value="login">
  <p>Nem vagy még regisztrálva?? <a href='registration.php'><input type="button" value="Regisztráció"></a></p>
</form>
</div>
</body>
</html>
