<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/registrations.php');


$emails = $_POST["email"];
foreach($emails as $email)
{
    mail($email, "F1 in Schools Manager Invitation", "Please follow this link");
}

?>

<html>

<body>
    <?php
    var_dump($_POST);

    ?>
</body>

</html>



<?php
/*
if(!$_POST['email'])
{

    $_SESSION['error_messages'][] = 'At least one e-mail is needed';
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/registrations/j_register.php');
}*/