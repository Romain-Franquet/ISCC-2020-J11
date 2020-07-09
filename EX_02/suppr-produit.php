<?php

$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
   die('Impossible de se connecter : ' . mysql_error());
}

$db_selected = mysql_select_db('basetest01', $link);
if (!$db_selected) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());
}
mysql_query("DELETE FROM 'produit' WHERE nom='T-shirt noir'");
mysql_close($con);
	?> 
