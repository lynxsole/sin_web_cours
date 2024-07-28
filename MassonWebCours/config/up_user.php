<?php 
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../db/log_db.php";
require_once '../mail/mail_config.php';



function errorMsg($error) {
    error_log($error, 3, '../log/error.log');
    header("Location: ../page/login.php?error=" . urlencode($error));
    exit();
}

if (isset($_POST['formateur_name'], $_POST['formateur_mail'], $_POST['formateur_pass'])) {
    if (!empty($_POST['formateur_name']) && !empty($_POST['formateur_mail']) && !empty($_POST['formateur_pass'])) {
        $name = htmlspecialchars($_POST['formateur_name']);
        $mail = filter_var($_POST['formateur_mail'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['formateur_pass'];

        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            try {
                // Check if the user already exists
                $checkUser = $getDB->prepare('SELECT * FROM formateur WHERE formateur_mail = ?');
                $checkUser->execute([$mail]);

                if ($checkUser->rowCount() == 0) {
                    // Insert new user
                    $insertUser = $getDB->prepare('INSERT INTO formateur (formateur_name, formateur_mail, formateur_pass) VALUES (?, ?, ?)');
                    $insertUser->execute([$name, $mail, $hashedPassword]);

                    if ($insertUser->rowCount() > 0) {
                        // Envoi de l'email de bienvenue
                        new_Mail($mail);

                        // Logging success
                        error_log("Insertion réussie pour l'utilisateur $mail", 3, '../log/success.log');

                        // Redirection après succès
                        header('Location: ../page/dashboard.php?session=' . $_SESSION['formateur_id'] . '&add=success');
                        exit();
                    } else {
                        errorMsg("Failed to create user.");
                    }
                } else {
                    errorMsg("Email address is already in use.");
                }
            } catch (PDOException $e) {
                errorMsg("Database error occurred.");
            }
        } else {
            errorMsg("Invalid email address.");
        }
    } else {
        errorMsg("Please fill in all fields.");
    }
} else {
    errorMsg("No form data received.");
}

