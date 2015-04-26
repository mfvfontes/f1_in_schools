<?php
include_once('../../config/init.php');

$smarty->assign('title', 'Register Managers');
$smarty->assign('action_page', 'm_registration.php');

$smarty->display('registrations/registration.tpl');