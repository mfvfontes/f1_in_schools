<?php
/**
 * Created by PhpStorm.
 * User: Jo�o
 * Date: 26/04/2015
 * Time: 22:15
 */

include_once('../../config/init.php');

$token = $_GET['token'];

global $conn;
$stmt = $conn->prepare("select email from registrations where token = ?");
$stmt->execute(array($token));

$email = $stmt->fetch()['email'];

$smarty->assign('title','You have successfully completed your registration.');
$smarty->assign('email',$email);

$smarty->display('registrations/register_complete.tpl');