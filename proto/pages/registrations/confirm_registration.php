<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 26/04/2015
 * Time: 22:15
 */

include_once('../../config/init.php');

$token = $_GET['token'];

global $conn;
$stmt = $conn->prepare("select (email,rType) from registrations where token = ?");
$stmt->execute(array($token));

$email = $stmt->fetch()['email'];
$email = $stmt->fetch()['rType'];

$smarty->assign('title','Confirm Registration');
$smarty->assign('email',$email);

$smarty->display('registrations/confirm_registration.tpl');