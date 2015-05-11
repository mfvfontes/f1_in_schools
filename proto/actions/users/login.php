<?php
  include_once('../../config/init.php');
include_once($BASE_DIR .'database/users.php');
include_once($BASE_DIR .'lib/password.php');


  if (!$_POST['email'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Invalid login';
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
  }

  if (isLoginCorrect($_POST['email'], $_POST['password'])) {
    $_SESSION['name'] = getName($_POST['email']);
    $_SESSION['userID'] = getID($_POST['email']);
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['success_messages'][] = 'Login successful';
  } else {
    $_SESSION['error_messages'][] = 'Login failed';
  }

 header('Location: ' . $_SERVER['HTTP_REFERER']);
?>
