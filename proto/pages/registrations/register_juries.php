<?php
include_once('../../config/init.php');

$smarty->assign('title', 'Register Juries');
$smarty->assign('title_image', 'register.png');
$smarty->assign('subtitle', 'Insert e-mail addresses');

$smarty->assign('action_page', 'jury_registration.php');

$smarty->display('registrations/email_list.tpl');