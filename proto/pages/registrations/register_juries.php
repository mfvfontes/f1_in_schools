<?php
include_once('../../config/init.php');

$smarty->assign('title', 'Register Juries');
$smarty->assign('action_page', 'j_registration.php');

$smarty->display('registrations/registration.tpl');