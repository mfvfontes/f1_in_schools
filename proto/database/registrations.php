<?php

function registerJury($email, $orgID)
{
    global $conn;
    $stmt = $conn->prepare("INSERT INTO registrations (token,email,orgID,rType) VALUES (?, ?, ?, 1)");
    return $stmt->execute(array(generateToken(), $email, $orgID));
}

function generateToken()
{
    return substr(str_shuffle(MD5(microtime())), 0, 10);
}