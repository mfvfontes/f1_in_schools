<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');
include_once($BASE_DIR .'lib/password.php');




if (!isLoginCorrect($_SESSION['email'], $_POST['password'])) {
    //falta error message
    header('Location: ' . $BASE_URL . 'pages/users/edit_profile.php');
}




    global $conn;

    $stmt = $conn->prepare(" UPDATE users SET name = ?, birthdate = ?, gender = ?, cCode = ?  WHERE userID = ?");
    $stmt->execute(array( $_POST['name'], $_POST['dob'], $_POST['gender'], $_POST['country'], $_SESSION['userID']));

header('Location: ' . $BASE_URL );

?>
