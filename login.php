<? require_once ('templates/top.php'); 
if ($_POST){
	$errors = [];
	$p_name = $_POST['name'];
	$p_password = $_POST['password'];
	$puss=$_POST['puss'];
	if(!$p_name){
	$errors[]='Поле Name обязательно для заполнения ';
	}
	if(!$_POST['password']){
	$errors[]='Поле Password обязательно для заполнения ';
	}
	if (empty($errors)){   //если ошибок нету
	$query = "SELECT * FROM reg WHERE name = '$p_name' AND password='$p_password'";
	echo $query;
	$cat = mysqli_query ($dbconect, $query);
	if (!$cat){
		exit('ERROR query');
	}
	$user = mysqli_fetch_array($cat);
	  if($user[0]){
		$_SESSION['used_id']=$user['id'];
		$query="UPDATE reg SET lastvisit=NOW() where iol=".$user['id'];
			?>
	<!--редирект посредством js  -->
	<script>
		document.location.href='index.php';
	</script>
	<?php
	}else{
		$error[]="Неправильное имя или пароль"; 
	}
	}else
		{
		foreach ($errors as $arr){
			echo "<div class='error'>";
			echo $arr;
			echo "</div>";
		}
		}
}
?>

<h1>Авторизация</h1>
<form method="post" action="login.php">
	<div class="form-group">
    <label for="name">Name</label>
    <input required type="text" class="form-control" id="name" name="name" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input required type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>

 <!-- <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div> -->
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>

<? require_once ('templates/botton.php'); ?>
