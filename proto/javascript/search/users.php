<?php
/**
 * Created by PhpStorm.
 * User: João
 * Date: 11/05/2015
 * Time: 12:15
 */

include_once('../../config/init.php');

global $conn;

$stmt = $conn->prepare("SELECT * FROM users WHERE users.name LIKE '%{$_GET['search']}%'");
$stmt->execute();

$result = $stmt->fetchAll();


foreach($result as $user)
{
    echo "<tr> <td> " . $user['name'] . " </td> <td> " . $user['ccode'] . " </td> </tr>";
}