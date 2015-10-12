<?php
try
{
	$DB = new PDO('mysql:host=localhost;dbname=wild_circus;charset=utf8', 'root', '');
	$DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$DB->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
}
catch (Exception $e)
{
       die('Erreur : ' . $e->getMessage());
}
?>