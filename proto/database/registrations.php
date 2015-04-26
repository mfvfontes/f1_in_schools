<?php

function registerJury($email, $orgID, $token)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO registrations (token,email,orgID,rType) VALUES (?, ?, ?, 1)");
    return $stmt->execute(array($token, $email, $orgID));
}

function generateToken($email)
{
    return substr(str_shuffle(MD5(microtime() . $email)), 0, 10);
}