<!DOCTYPE html>
<HTML lang="ru">
 <HEAD>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <TITLE>Главная страница</TITLE>
  <link rel="stylesheet" href="class1.css"> 
 <body>
  
  <TABLE rules="all" frame="box" width="100%">
   <TR>
    <TD> <LI> <A href="index.php">Главная</A>  
    <TD> <LI> Новости
	<TD> <LI> <A href="3about_page.php">О компании</A>
	<TD> <LI> <A href="4kontakt_page.php">Контакты</A>       
   </TR>
   </TABLE>
   
   <?php
	include 'opendb.php';//соединяюсь с базой данных
	$result = mysql_query("SELECT * FROM new",$db);
	$name=array();
	$description=array();
	while ($myrow = mysql_fetch_array($result)) {
	  array_push($name, $myrow['name']);
	  array_push($description, $myrow['description']);      
    }
    if($_GET["page"]){
     $page=$_GET["page"];
	 for($i=($page-1)*5;$i<$page*5;$i++){
		 echo "<h1>{$name[$i]}</h1><p>{$description[$i]}</p>
	        <a href='5detail_page.php?new={$i}'>подробнее</a><p>";
	 }
	}	
   ?>
  <TABLE rules="all" frame="box" width="100%">
   <TR>
    <TD> <LI> <A href="2news_page.php?page=1">1</A>
	<TD> <LI> <A href="2news_page.php?page=2">2</A>
	<TD> <LI> <A href="2news_page.php?page=3">3</A>       
   </TR>
   </TABLE>
 </body>
</HTML>