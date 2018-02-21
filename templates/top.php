<?session_start();
require_once ('config/config.php'); 
?>

<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title> проект  </title> 
<meta name='discription' content="текст о проекте">
<meta name='keywords' content="текст о проекте">
<link rel='stylesheet' href='media/css/style.css' />
<link rel='stylesheet' href='media/bootstrap-3.3.7/css/bootstrap.min.css' />
<meta name='автор' >
<script src ="media/js/jquery-3.3.1.min.js"> </script>
<script src ="media/js/main.js"> </script>
</head>

<body>

<div class='header'>
<img src='media/img/logo.png' alt='логотип' id='logo'>
<h1 class='logotext'>Первый сайт</h1>
</div>
<form action="search.php"
		method="GET">
		<input type="searh" name="name">
		<button type="submit" class="btn btn-info">Найти</button>
</form>
<div>
<nav class='menutop'>
<a href="/" data-url="media/img/about.jpg" data-title="О компании">главная</a>
<a href="/" data-url="media/img/acsessuar.jpg" data-title="О компании 2">Аксекссуары</a>
<a href="/" data-url="media/img/about.jpg" data-title="О компании 3">Квадроциклы</a>
<a href="/" data-url="media/img/about.jpg" data-title="О компании 4">Ремзона</a>
<a href="/" data-url="media/img/about.jpg" data-title="О компании 5">Экиперовка</a>

<? 
if(isset($_SESSION['used_id'])){
	?>
	<a href ="products.php">Товары</a>
	<a href ="cart.php">карзина</a>
	<a href ="kabinet.php">+товар</a>
    <a href ="logout.php">выход</a>
	
	<?
}else{
	?>
		<a href ="login.php">Вход</a>
    <a href ="reg.php">Регистрация</a>
	<?
}


?>

    </nav>

</div>
<div class='col-md-2'>
Меню
<a href='#' class='btn btn-block btn-success' >
Разработка сайтов
</a>

<a href='#' class='btn btn-block btn-primary' >
Продвижение сайтов
</a>
<a href='#' class='btn btn-block btn-primary' >
Верстка сайтов
</a>
<a href='#' class='btn btn-block btn-primary' >
Иное
</a>
</div>
<div class='col-md-8'>