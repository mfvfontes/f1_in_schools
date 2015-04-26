<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 25/04/2015
 * Time: 13:20
 */
include_once('../../config/init.php');

$smarty->assign('title', 'User Register');




$smarty->display('registrations/user_registration.tpl');

