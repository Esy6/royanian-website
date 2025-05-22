<?php
/**
 * @version   $Id: index.php 54236 2014-07-21 22:04:13Z  $
*/

session_start();
//sprachwahl einer Session zuweisen
if(isset($_POST['lang_en_x']) && isset($_POST['lang_en_y']))
{
       $_SESSION['language'] = "en";
}
else if(isset($_POST['lang_de_x']) && isset($_POST['lang_de_y']))
{
       $_SESSION['language'] = "de";
}

//anhand des Wertes in der Session die Sprachdatei
//mit den Konstanten laden wobei deutsch standartsprachdatei darstellt
if($_SESSION['language'] == "en")
{
       require('languages/lang_en.php');
}
else if($_SESSION['language'] == "de")
{
       require('languages/lang_de.php');
}
else
{
       require('languages/lang_en.php');
}
//anhand des Wertes in der Session die Sprachdatei  ---------------  -
switch ($_SERVER['HTTP_ACCEPT_LANGUAGE')) {

     case 'en' :
	   header('Location: http://www.royanian.com/');
	 exit;

     case 'de' :
     header('Location: http://www.royanian.com/de/');
     exit;


     default :
     header('Location: http://www.royanian.com');
     exit;
}
?>
