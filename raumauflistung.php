<?php
session_start();
$session = $_SESSION;

if(isset($session['user']))
{
	$username = $session['user']['name'];
}

mysql_connect('localhost', 'testuser', 'test');
mysql_select_db('schulraumverwaltung');

$query = mysql_query('SELECT * FROM schulraeume');
?>