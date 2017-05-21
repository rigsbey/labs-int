<?
	$login = $_POST['form-login'];
	$pass = $_POST['form-password'];
	$pass2 = $_POST['form-password-again'];
	$regName = $_POST['reg-name'];
	$regFIO = $_POST['reg-fio'];
	
	if (empty($login)) {
		echo 'Не введён логин!';
	}
	
	if (empty($pass)) {
		echo 'Не введён пароль!';
	}
	
	if (empty($pass2)) {
		echo 'Повторите пароль!';
	}
	
	if ($pass != $pass2) {
		echo 'Введённые пароли не совпадают!';
	}
	
	require_once('lib/db.php');
	$password = md5($pass);
        $mysqli->query("INSERT INTO users (login, pass, name, fio) VALUES ('$login', '$password', '$regName', '$regFIO')");

	$q = $mysqli->query("SELECT * FROM `users` WHERE `login` LIKE '$login'");
	$user = $q->fetch_assoc();
	
	header('Location: index.php?success=1&name='.$user['name']);
?>
	