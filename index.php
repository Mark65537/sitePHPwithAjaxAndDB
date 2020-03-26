<!DOCTYPE html>
<HTML lang="ru">
 <HEAD>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <TITLE>Главная страница</TITLE>
  <link rel="stylesheet" href="class1.css"> 
 <body>
  
  <TABLE rules="all" frame="box" width="100%">
   <TR>
    <TD> <LI> Главная  
    <TD> <LI> <A href="2news_page.php?page=1">Новости</A>
	<TD> <LI> <A href="3about_page.php">О компании</A>
	<TD> <LI> <A href="4kontakt_page.php">Контакты</A>       
   </TR>
   </TABLE>
   
   <?php
	include 'opendb.php';//соединяюсь с базой данных
	$result = mysql_query("SELECT * FROM new",$db);
	$i=0;
	while (($myrow = mysql_fetch_array($result)) && $i<5) {
      $i++;
      echo "<h1>{$myrow['name']}</h1><p>{$myrow['description']}</p>
	        <a href='5detail_page.php?new={$i}'>подробнее</a><p>";
   }
   ?>
 </body>
</HTML>