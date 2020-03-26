<!DOCTYPE html>
<HTML lang="ru">
 <HEAD>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <TITLE>Главная страница</TITLE>
  <link rel="stylesheet" href="class1.css">
  <SCRIPT LANGUAGE='JavaScript' src='ajax_GET_UTF8.js'></SCRIPT>
  <script>
  function func(res) {
		    
			 if(res==1){
			  alert("сообщение отправлено")
			 }
			 else{
			  alert("ошибка сообщение не отправлено")
			 }		  
            
        }
 
        function do_get_ajax() {
            var url = 'php_for_ajax.php?id=' + encodeURIComponent(document.forms[0].ident.value)+
			          '&name_attr='+ encodeURIComponent(document.forms[0].name_attr.value)+
					  '&val_attr='+ encodeURIComponent(document.forms[0].val_attr.value);
            getAjax(url, func);
		}
 </script>			
 <body>
  
  <TABLE rules="all" frame="box" width="100%">
   <TR>
    <TD> <LI> <A href="index.php">Главная</A>  
    <TD> <LI> <A href="2news_page.php?page=1">Новости</A>
	<TD> <LI> <A href="3about_page.php">О компании</A>
	<TD> <LI> Контакты       
   </TR>
   </TABLE>
   
   <fieldset>
  <legend>Обратная связь</legend>
  <form>
  <label>ФИО:</label>
  <input name="fio" type="text" size="15"></p>
  <label>Тема обращения:</label>
  <input name="tema" type="text" size="15"></p>
  <label>Текст письма:</label>
  <input name="text" type="text" size="15"></p>
  <label>телефон:</label>
  <input name="telefon" type="text" size="15"></p>
  <label>email:</label>
  <input name="email" type="text" size="15"></p>
  <input type="button" name="button" value="отправить" onclick="do_get_ajax()">
  </form>
 </fieldset>
 </body>
</HTML>