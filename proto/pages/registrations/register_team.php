<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 25/04/2015
 * Time: 13:20
 */
include_once('../../config/init.php');

$smarty->assign('title', 'Team Register');


$smarty->assign('action_page', 't_registration.php');

$smarty->display('registrations/team_registration.tpl');
