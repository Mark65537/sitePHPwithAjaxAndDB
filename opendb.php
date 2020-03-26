<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$database = "news";	
   $db = mysql_connect ($servername,$username,$password);
   mysql_select_db ($database,$db);
   // Ругаемся, если соединение установить не удалось
   if (!$db) {
    exit('Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error());
  }
 ?>