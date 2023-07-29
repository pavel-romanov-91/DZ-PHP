<?php 
$users = 'pages/users.txt';
function register($name, $pass, $email)
{
	//data validation block
	//trim - обрезает пробельные символы в начале и конце строки
	// htmlspecialchars - преобразует спецсимволы html в текст
	// это защищает от данных вида <script>вредоносный код</script>
	$name=trim(htmlspecialchars($name));
	$pass=trim(htmlspecialchars($pass));
	$email=trim(htmlspecialchars($email));
	if($name =='' || $pass =='' || $email =='') 
	{ 
		echo "<h3/><span style='color:red;'>Fill All Required Fields!</span><h3/>";
		return false;
	}
	if(strlen($name) < 3 || strlen($name) > 30 || strlen($pass) < 3 || strlen($pass) > 30)
	{
		echo "<h3/><span style='color:red;'>Values Length Must Be Between 3 And 30!</span><h3/>";
		return false;	
	}
	//login uniqueness check block
	global $users;
	$file=fopen($users,'a+'); //открывает файл на чтение и запись
	while($line=fgets($file, 128)) //читаем в цикле строки из файла
	{
		$readname=substr($line,0,strpos($line,':')); // вытащили подстроку с именем пользователя
		if($readname == $name) // проверяем имя пользователя на уникальность
		{
			echo "<h3/><span style='color:red;'>Such Login Name Is Already Used!</span><h3/>";
			return false;
		}
	}
	//new user adding block
	$line=$name.':'.md5($pass).':'.$email."\r\n"; //формируем новую строку для записи в файл
	fputs($file,$line); // запись в файл
	fclose($file);      // закрыть файл
	return true;
	

	$line=$name.':'.md5($pass).':'.$email."\r\n"; //формируем новую строку для записи в файл
	fputs($file,$line); // запись в файл
	fclose($file);      // закрыть файл
	return true;

function isLogged()
{
    return false;
}

}
?>