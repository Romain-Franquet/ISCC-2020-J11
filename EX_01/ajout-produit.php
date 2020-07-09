<?php

$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
   die('Impossible de se connecter : ' . mysql_error());
}

$db_selected = mysql_select_db('basetest01', $link);
if (!$db_selected) {
   die ('Impossible de sélectionner la base de données : ' . mysql_error());
}
mysql_query("INSERT INTO `produit` (`id`, `nom`, `description`, `prix`, `quantite`,)
	VALUES(8, 'T-shirt noir', 'T-shirt coton de couleur noire', "15.50", "10"),
	");

	mysql_close($con);
	?> 
