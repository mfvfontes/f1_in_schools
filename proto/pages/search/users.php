<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 11/05/2015
 * Time: 10:45
 */


include_once('../../config/init.php');

$smarty->assign('fields',['name','country']);
$smarty->assign('title',"Search Users");
$smarty->assign('jsPage',"users.js");
$smarty->display('search.tpl');