<?php
/**
 * Created by PhpStorm.
 * User: Joel
 * Date: 11/05/2015
 * Time: 10:35
 */

include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');
include_once($BASE_DIR .'database/general.php');

/** BD buscar os dados atuais do user */



$userInfo = getUserInformation($_SESSION['userID']);

$smarty->assign('userInfo', $userInfo);


/*
 * Chamar o template passando o array
 */
$smarty->assign('title','Change Password');
$smarty->display('users/edit_password.tpl');