<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
</head>
<body>
<?php
if(isset($_POST['r']) && isset($_POST['g']) && isset($_POST['b']))
{
   $color_b = "background:rgb(".$_POST['r'].",".$_POST['g'].",".$_POST['b']." )";
   $color_s =  "color:rgb(".$_POST['g'].",".$_POST['r'].",".$_POST['b']." )";
}
else
{
   $color_b = "background:rgb(255,255,255)";
   $color_s =  "color:rgb(255,51,51)";
}

?>
<style>
	body
	{
		<?=$color_b?>;
	}
	.span-color
	{
		<?=$color_s?>;
	}
</style>
<span class='span-color'>Красивый текст</span>
<form action='' method='post'>
	<p>Введите значения цветов</p>
	<label>R</label>
	<input type='text' name='r'>
	<label>G</label>
	<input type='text' name='g'>
	<label>B</label>
	<input type='text' name='b'>
	<input type='submit' name='sub' value='Accept'>
</form>
</body>
</html>
=======
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	
</head>
<body>
<?php
if(isset($_POST['r']) && isset($_POST['g']) && isset($_POST['b']))
{
   $color_b = "background:rgb(".$_POST['r'].",".$_POST['g'].",".$_POST['b']." )";
   $color_s =  "color:rgb(".$_POST['g'].",".$_POST['r'].",".$_POST['b']." )";
}
else
{
   $color_b = "background:rgb(255,255,255)";
   $color_s =  "color:rgb(255,51,51)";
}

?>
<style>
	body
	{
		<?=$color_b?>;
	}
	.span-color
	{
		<?=$color_s?>;
	}
</style>
<span class='span-color'>Красивый текст</span>
<form action='' method='post'>
	<p>Введите значения цветов</p>
	<label>R</label>
	<input type='text' name='r'>
	<label>G</label>
	<input type='text' name='g'>
	<label>B</label>
	<input type='text' name='b'>
	<input type='submit' name='sub' value='Accept'>
</form>
</body>
</html>
>>>>>>> c8a75be (Dz)
