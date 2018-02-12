<? require_once ('templates/top.php'); 

if($_POST){
$erors=[];
/*назначение переменных*/
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];



if (!$name){$erors[]='Заполните поле';
}
if (!$email){$erors[]='Заполните поле';
}
if (!$password){$erors[]='Заполните поле';
}
if ($_POST['password']!= $_POST['password2']){$erors[]='Пароль не совпадает';
}
/*обращение к базе reg*/
if (empty ($erors)) {
	$qeri="INSERT INTO reg VALUES(
	NULL,
	'$name',
	'$email',
	'$password',
	NOW(),
	NOW(),
	'unblok'	
	)";
	$cat=mysqli_query($dbconect, $qeri);
	if (!$cat){exit ('EROR');
	}
?>
	<script>
	document.location.href='index.php';
	</script>	
<?	
} else {
	foreach ($erors as $arr){
	echo "<div class='errors'>";
	echo $arr;
	echo "</div>";}
}
echo '<pre>';	
print_r($_POST);
echo '</pre>';	
}

?> 
<! регистрация с сайта getbootstrap.com>
<h2> Регистрация </h2>

<form method="post" action="reg.php">
 <div class="form-group">
    <label for="exampleInputName">Имя</label>
    <input required type="Name" class="form-control" id="Name1" placeholder="name" name="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Почта</label>
    <input required type="email" class="form-control" id="Email1" placeholder="email" name="email">
  </div>
  <div class="form-group">
    <label for="password">Пароль</label>
    <input required type="password" class="form-control" id="password" placeholder="password" name="password">
  </div>
  <div class="form-group">
    <label for="password2">Повтор пароля</label>
    <input required type="password" class="form-control" id="password2" placeholder="password2" name="password2">
  </div>
  
  <button type="submit" class="btn btn-default">Регистрация</button>
</form>
<? require_once ('templates/top.php'); ?>