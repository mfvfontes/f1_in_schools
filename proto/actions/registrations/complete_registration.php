<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 27/04/2015
 * Time: 11:20
 */

include_once('../../config/init.php');
include_once($BASE_DIR .'lib/password.php');

$error = false;


/**
 * verificacao do email
 */
global $conn;
$stmt = $conn->prepare("SELECT * FROM Users WHERE (email = ?) ");
$stmt->execute(array($_POST['email']));
$result = $stmt->fetchAll();

$_SESSION['error_messages'] = array();


if($result != null){
    $_SESSION['error_messages'][] = 'Email already on use';
    $error = true;
}
/**
 * verificacao do comprimento password
 */
if(strlen($_POST['password']) < 5)
{
    $_SESSION['error_messages'][] = 'Your password must be at least 5 characters long';
    $error = true;
}

/**
 * verificacao das duas passwords
 */
if (strcmp($_POST['password'],$_POST['confirm_password']) !== 0)
{
    $_SESSION['error_messages'][] = 'Passwords do not match';
    $error = true;

}


/**
 * tratamento dos casos de erro
 */
if($error) {
    //var_dump($_SESSION['error_messages']);
    header('Location: ' . $BASE_URL . 'pages/registrations/confirm_registration.php');
}

/**
 * insercao na base de dados
 */
else{
    $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("INSERT INTO Users (password, name, birthdate, gender, email, cCode) VALUES (?, ?, ?, ?, ?, ?)");
    return $stmt->execute(array($hash, $_POST['name'], $_POST['dob'], $_POST['gender'], $_POST['email'], $_POST['country']));
}