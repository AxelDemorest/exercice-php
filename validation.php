<?php

if(!empty($_POST)) {

    $errors = array();

    $valid = true;

    if (isset($_POST['submit'])) {

        $identifiant  = htmlspecialchars(trim($_POST['name']));
        $mail  = htmlspecialchars(strtolower(trim($_POST['mail'])));
        $message  = htmlspecialchars(trim($_POST['message']));

        if (empty($identifiant)) {
            $errors['id'] = "Identifiant incorrect.";
            $valid = false;
        }

        if (empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $errors['mail'] = "L'email est incorrect.";
            $valid = false;
        }

        if (empty($message)) {
            $errors['message'] = "Message incorrect.";
            $valid = false;
        }

        if ($valid && empty($errors)) {

            header('Location: good.php');

            exit;

        } 

    }

}