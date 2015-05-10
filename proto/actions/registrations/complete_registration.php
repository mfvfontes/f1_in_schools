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

$_SESSION['form_values'] = $_POST;
$_SESSION['error_messages'] = array();


var_dump($_POST);
if($result != null){
    $_SESSION['error_messages'][] = 'Email already on use, please log in';
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

    switch ($_POST['rType'])
    {
        case "1":     /* JURY */
            $stmt = $conn->prepare("SELECT insertjury(?,?,?,?,?,?,?)");
            $stmt->execute(array($hash, $_POST['name'], $_POST['dob'], $_POST['gender'], strtolower($_POST['email']) , $_POST['country'], $_POST['rID']));
            break;
        case "2":     /* ORGANIZER */
            $stmt = $conn->prepare("SELECT insertorganizer(?,?,?,?,?,?,?)");
            $stmt->execute(array($hash, $_POST['name'], $_POST['dob'], $_POST['gender'], strtolower($_POST['email']), $_POST['country'], $_POST['rID']));
            break;
        case "3":     /* MANAGER */
            $stmt = $conn->prepare("SELECT insertmanager(?,?,?,?,?,?,?,?)");
            $stmt->execute(array($hash, $_POST['name'], $_POST['dob'], $_POST['gender'], strtolower($_POST['email']), $_POST['country'], $_POST['rID'], $_POST['school']));
            break;

    }
}