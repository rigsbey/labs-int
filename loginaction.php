<?
	require_once('lib/db.php');
	
	$login = $_POST['form-login'];
	$pass = $_POST['form-password'];
	
	if (empty($login)) {
		die ('Не введён логин!');
	}
	
	if (empty($pass)) {
		die ('Не введён пароль!');
	}
	
	$q = $mysqli->query("SELECT * FROM `users` WHERE `login` LIKE '$login' AND `pass` = MD5('$pass')");
	if ($q->num_rows == 0) {
		die ('Вы ввели неправильный логин и/или пароль!');
	}
	$user = $q->fetch_assoc();
	if (isset($_COOKIE["PHPSESSID"])) {
		session_unset();
	}
	session_start();
	$_SESSION['login'] = $user['login'];
	$_SESSION['password'] = $user['pass'];
	$_SESSION['name'] = $user['name'];
	$_SESSION['id'] = $user['id'];
	$_SESSION['isAdmin'] = $user['isAdmin'];
	
	header('Location: index.php');	