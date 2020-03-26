<?php
 class mail{
  var $fio;
  var $tema;
  var $text;
  var $telefon;
  var $email;
 }
  $mymail=new mail;
  $mymail->$fio=$_GET["fio"];
  $mymail->$tema=$_GET["tema"];
  $mymail->$text=$_GET["text"];
  $mymail->$telefon=$_GET["telefon"];
  $mymail->$email=$_GET["email"];
 echo mail($mymail->$email, $mymail->$tema, $mymail->$text.'/n'.$mymail->$fio.' '.$mymail->$telefon);