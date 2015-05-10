<?php

function registerJury($email, $orgID, $token)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO registrations (token,email,inviterID,rType) VALUES (?, ?, ?, 1)");
    return $stmt->execute(array($token, $email, $orgID));
}

function registerOrganizer($email, $orgID, $token)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO registrations (token,email,inviterID,rType) VALUES (?, ?, ?, 2)");
    return $stmt->execute(array($token, $email, $orgID));
}

function registerManager($email, $orgID, $token)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO registrations (token,email,inviterID,rType) VALUES (?, ?, ?, 3)");
    return $stmt->execute(array($token, $email, $orgID));
}

function generateToken($email)
{
    return substr(str_shuffle(MD5(microtime() . $email)), 0, 10);
}

function getRegistration($token)
{
    global $conn;
    $stmt = $conn->prepare("select * from registrations where token = ?");
    $stmt->execute(array($token));

    return $stmt->fetchAll();
}

function isEmailRegistered($email)
{

}