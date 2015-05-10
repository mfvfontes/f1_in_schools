<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 05/05/2015
 * Time: 19:23
 */

function getSchools()
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM schools");
    $stmt->execute(array());
    return $stmt->fetchAll();
}