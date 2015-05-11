<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');
include_once($BASE_DIR .'lib/password.php');


$error =false;

if (!isLoginCorrect($_SESSION['email'], $_POST['oldPassword'])) {
    $_SESSION['error_messages'][] = 'Incorrect Login';
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

    header('Location: ' . $BASE_URL . 'pages/users/edit_password.php');
}

/**
 * insercao na base de dados
 */
else {

    global $conn;
    $hash = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare(" UPDATE users SET password = ?");
    $stmt->execute(array($hash));

    header('Location: ' . $BASE_URL );
}
?>
