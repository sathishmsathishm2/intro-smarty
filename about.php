<?php
require_once('settings.php');

$cars = ['BMW','Audi','Benz'];

$smarty->assign('title','About');
$smarty->assign('cars',$cars);

$smarty->display('about.tpl'); 
?>