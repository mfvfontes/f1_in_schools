<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/registrations.php');



?>

<html>

<body>
    <?php
    var_dump($_POST);

    echo("<br>");

    $emails = $_POST["email"];
    foreach($emails as $email)
    {
        if ($email != null) {
            echo("<br><p>$email</p>");
            registerJury($email, 1);
            mail($email, "F1 in Schools Jury Invitation", "Please follow this link");
        } else {
            echo ("Email empty");
        }

    }


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