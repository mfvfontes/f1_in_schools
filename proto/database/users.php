<?php


function isLoginCorrect($email, $password) {
    global $conn;
    $stmt = $conn->prepare("SELECT password
                            FROM users 
                            WHERE email = ? ");
    $stmt->execute(array($email));
    $hash = $stmt->fetch()['password'];

    return password_verify($password, $hash);
}

function getName($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT name
                            FROM users
                            WHERE email = ?");
    $stmt->execute(array($email));
    return $stmt->fetch()['name'];
}

function getID($email) {
    global $conn;
    $stmt = $conn->prepare("SELECT userid
                            FROM users
                            WHERE email = ?");
    $stmt->execute(array($email));
    return $stmt->fetch()['userID'];
}
?>
