<? session_start(); ?>
<? //var_dump($_SESSION);?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Камиль</title>

<meta http-equiv="Content-type" content="text/html"; charset="utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

<link href="nazil1.html" rel="stylesheet" type="text/css"/>
<link href="gallery.html" rel="stylesheet" type="text/css"/>


<link rel="shortcut icon" type="image/x-icon" href="css/images/favicon.ico" />
<script src="js/jquery-1.4.2.js" type="text/javascript"></script>
<script src="js/js-fnc.js" type="text/javascript"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->

 
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="header">
  <div class="shell">
    <div id="logo-holder">
      <h1 id="logo"><a href="#">Абулханов Камиль</a></h1>
      
    </div>
    <div id="navigation">
      <ul>
        <li><a href="#" class="active"><span>Обо мне</span></a></li>
        <li><a href="plans.php"><span>Дискретка</span></a></li>
        <li><a href="contacts.php">Контакты</a></span></a></li>
        <li><a href="gallery.php"><span>Галлерея </span></a></li>
        <? if (isset ($_SESSION ['login']) && isset ($_SESSION ['password'])) { ?>
			<li><span><? echo $_SESSION['login']; ?></span></li>
			<li><a href="logout.php"><span>Выход</a></li>
		<? } else {?>
		<li><a href="login.php"><span>Вход </span></a></li>
        <li><a href="signup.php"><span>Регистрация</span></a></li>
		<? } ?>
        
		
      </ul>
    </div>
    <div class="cl">&nbsp;</div>
  </div>
</div>


<div id="gallery">



</div>
<? if (array_search('success', $_REQUEST)) { 
		if ($_REQUEST['success'] == 1) echo '<P>Поздравляем, '.$_REQUEST['name'].'! Теперь Вы можете зайти на сайт под своим именем!</P>';
 } ?>
<div id="featured-content">
  <div class="shell">
    <h2>Сайт Абулханова Камиля</h2>
    <p>Лабараторные</p>
   
  </div>
</div>
<div id="main">
  <div class="shell">
    <div class="col">
      <div class="post">


<?
	require_once('lib/db.php');
	$q = $mysqli->query("SELECT * FROM texts WHERE header LIKE 'mainpage'");
	$text = $q->fetch_assoc();
	echo($text['text']);
        if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] == 1)
        {    ?>
             <FORM action="edittext.php">
                <INPUT type="submit" value="Редактировать">
             </FORM>
             <?
        }
?>
      </div>
    </div>
    
    <div class="cl">&nbsp;</div>
   
    <div class="cl">&nbsp;</div>
  </div>
</div>
<div class="footer">
  <div class="shell">
    
   
    <div style="clear:both;"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>