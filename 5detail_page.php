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
    <TD> <LI> <A href="2news_page.php?page=1">Новости</A>
	<TD> <LI> <A href="3about_page.php">О компании</A>
	<TD> <LI> <A href="4kontakt_page.php">Контакты</A>       
   </TR>
   </TABLE>
   
   <?php
	if(isset($_GET["new"])){		
	  $new=$_GET["new"]+1;
      echo "<h1>Новость {$new}</h1><p>Подробное описание {$new}</p>";
	}	  
   ?>
 </body>
</HTML>