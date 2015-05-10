<?php
include_once('../../config/init.php');
include_once($BASE_DIR .'database/registrations.php');

?>

<html>

<body>
    <?php

    var_dump($_POST);

    $emails = $_POST["email"];

    $headers = 'From: f1inschools@example.com';

    foreach($emails as $email)
    {
        if ($email != null) {
            echo("<br><p>$email</p>");
            $token = generateToken($email);
            registerOrganizer($email, 1, $token);

            $link = 'gnomo.fe.up.pt' . $BASE_URL . 'pages/registrations/confirm_registration.php?token=' . $token;
            mail($email, "F1 in Schools Organizer Invitation", "Please follow this link " . $link, $headers);

        } else {
            echo ("<p>Email Empty</p>");
        }

    }

    //header('Location: pages/registrations/register_juries.php');


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