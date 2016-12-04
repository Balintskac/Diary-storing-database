<?php

function input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

function registerUser($name,$username,$password,$age){
 //Ha form lefut, illesze be az adatokat az adatbázisba.
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "sharebase";

 $conn = new mysqli($servername, $username, $password, $dbname);
 $sql = "INSERT INTO users (name, username, password, age)
            VALUES ('$name', '$username', '".md5($password)."', '$age')";
 return ($conn->query($sql) === TRUE);
 }
 if (isset($_POST['name']) && !empty(trim($_POST['name']))
		&& isset($_POST['username']) && !empty(trim($_POST['username']))
		&& isset($_POST['password']) && !empty(trim($_POST['password']))
    && isset($_POST['age']) && !empty(trim($_POST['age'])))  {

		if (registerUser($_POST['name'],$_POST['username'],$_POST['password'],$_POST['age'])) {
			echo 'Fiok letrehozva, <a href="index.php">jelentkezz be</a>.';
		} else {
			echo 'Valami hiba tortent, probald ujra!';
		}
	}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Registration</title>
</head>
<body>
<center>
<h1>Regisztráció</h1>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Név:<input type="text" name="name" placeholder="name" required />
    </br></br>
    Felhasználónév:<input type="text" name="username" placeholder="Username" required />
    </br></br>
    Jelszó:<input type="password" name="password" placeholder="1234" required />
    </br></br>
    Kor:<input type="text" name="age" placeholder="1234" required />
    </br></br>
<input type="submit" name="login" value="Regisztrálás" />
<a href="register.php"><input type="button" name="back" value="vissza"></a>
</form>
</center>
</body>
</html>
