<?php

include_once('../../config/init.php');

$error = false;
$_SESSION['error_messages'] = array();


/**
 * **********************************verificar se isto dos emails esta correto e completar*****************************
 */
/**
 * verificacao do email
 */
global $conn;
$stmt = $conn->prepare("SELECT * FROM Users WHERE (email = ?) ");
$stmt->execute(array($_POST['participant1']));
$result = $stmt->fetchAll();

if($result != null){
    $_SESSION['error_messages'][] = 'Email already on use';
    $error = true;
}






/**
 * tratamento dos casos de erro
 */
if($error) {
    //var_dump($_SESSION['error_messages']);
    header('Location: ' . $BASE_URL . 'pages/registrations/register_team.php');
}

/**
 * insercao na base de dados ******************************completar aqui

else {
$stmt = $conn->prepare("INSERT INTO ParticipantRegistrations (token,email,manID,rType) VALUES (?, ?, ?, 1)");
return $stmt->execute(array($token, $email, $manID));
}*/