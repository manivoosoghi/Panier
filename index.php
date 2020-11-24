<?php
// Controller pour le front-office
ini_set('display_errors', '1');

require_once('./classes/Database.php');

require_once('./classes/Templating.php');
$templating = (object) new Templating('front-office/');
$smarty = (object) $templating->getSmarty();


$smarty->assign('page', $_SERVER['QUERY_STRING']);

$smarty->assign('produits', Database::query('SELECT * FROM `produits`', array()));
    
$smarty->display('index.master.tpl');
?>