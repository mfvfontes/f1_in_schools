<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 26/04/2015
 * Time: 22:15
 */

include_once('../../config/init.php');
include_once($BASE_DIR .'database/registrations.php');
include_once($BASE_DIR .'database/general.php');


$reg = getRegistration($_GET['token'])[0];
$schools = null;

if (strcmp($reg['rtype'],'3') == 0)
{
    $schools = getSchools();
}

var_dump($reg);
echo("<br>");
var_dump($schools);

$smarty->assign('rID', $reg['regid']);
$smarty->assign('email' ,$reg['email']);
$smarty->assign('rType' ,$reg['rtype']);
$smarty->assign('schools', $schools);



$smarty->assign('title','Confirm Registration');

$smarty->display('registrations/confirm_registration.tpl');