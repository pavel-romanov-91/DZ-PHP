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
	function printCurrentMonth() {
   $dayofmonth = date('t');
   $day_count = 1;
   $num = 0;
   for($i = 0; $i < 7; $i++) 
	{
      $dayofweek = date('w', mktime(0, 0, 0, date('m'), $day_count, date('Y')));
      $dayofweek = $dayofweek - 1;
      if($dayofweek == -1) $dayofweek = 6;
      if($dayofweek == $i) {$week[$num][$i] = $day_count;$day_count++;} 
		else {$week[$num][$i] = "";}
   }
   while(true) 
	{
      $num++;
      for($i = 0; $i < 7; $i++) 
		{
			$week[$num][$i] = $day_count; $day_count++;
         if($day_count > $dayofmonth) break;
      }
      if($day_count > $dayofmonth) break;
   }
   echo date("F Y");
   echo "<table border=1>";
   echo "<tr>";
   echo "<td>Пн</td>";
   echo "<td>Вт</td>";
   echo "<td>Ср</td>";
   echo "<td>Чт</td>";
   echo "<td>Пт</td>";
   echo "<td>Сб</td>";
   echo "<td>Вс</td>";
   echo "</tr>";
   for($i = 0; $i < count($week); $i++)
	{
   	echo "<tr>";
      for($j = 0; $j < 7; $j++) 
		{
         if(!empty($week[$i][$j])) 
			{
        		if($j == 5 || $j == 6) 
         	echo "<td><font color=red>".$week[$i][$j]."</font></td>";
         	else echo "<td>".$week[$i][$j]."</td>";
      	}	else echo "<td>&nbsp;</td>";
      }
      echo "</tr>";
   } 
   echo "</table>";
}
printCurrentMonth();
?>

</body>
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
	function printCurrentMonth() {
   $dayofmonth = date('t');
   $day_count = 1;
   $num = 0;
   for($i = 0; $i < 7; $i++) 
	{
      $dayofweek = date('w', mktime(0, 0, 0, date('m'), $day_count, date('Y')));
      $dayofweek = $dayofweek - 1;
      if($dayofweek == -1) $dayofweek = 6;
      if($dayofweek == $i) {$week[$num][$i] = $day_count;$day_count++;} 
		else {$week[$num][$i] = "";}
   }
   while(true) 
	{
      $num++;
      for($i = 0; $i < 7; $i++) 
		{
			$week[$num][$i] = $day_count; $day_count++;
         if($day_count > $dayofmonth) break;
      }
      if($day_count > $dayofmonth) break;
   }
   echo date("F Y");
   echo "<table border=1>";
   echo "<tr>";
   echo "<td>Пн</td>";
   echo "<td>Вт</td>";
   echo "<td>Ср</td>";
   echo "<td>Чт</td>";
   echo "<td>Пт</td>";
   echo "<td>Сб</td>";
   echo "<td>Вс</td>";
   echo "</tr>";
   for($i = 0; $i < count($week); $i++)
	{
   	echo "<tr>";
      for($j = 0; $j < 7; $j++) 
		{
         if(!empty($week[$i][$j])) 
			{
        		if($j == 5 || $j == 6) 
         	echo "<td><font color=red>".$week[$i][$j]."</font></td>";
         	else echo "<td>".$week[$i][$j]."</td>";
      	}	else echo "<td>&nbsp;</td>";
      }
      echo "</tr>";
   } 
   echo "</table>";
}
printCurrentMonth();
?>

</body>
>>>>>>> c8a75be (Dz)
</html>