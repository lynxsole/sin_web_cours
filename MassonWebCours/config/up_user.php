<?php 
session_start();

include "../db/log_db.php";

function errorMsg($error){
    header("Location: ../page/login.php?error=" . $error);
    exit();
}

if (isset($_POST['mail']) && isset($_POST['pass'])) {
    if (!empty($_POST['mail']) && !empty($_POST['pass'])) {
        $mail = filter_var($_POST['mail'], FILTER_SANITIZE_EMAIL);
        $password = $_POST['pass'];

        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            try {
                // Vérifier si l'utilisateur existe déjà
                $checkUser = $getDB->prepare('SELECT * FROM formateur WHERE formateur_mail = ?');
                $checkUser->execute([$mail]);

                if ($checkUser->rowCount() == 0) {
                    // Insérer un nouvel utilisateur
                    $insertUser = $getDB->prepare('INSERT INTO formateur (formateur_mail, formateur_pass) VALUES (?, ?)');
                    $insertUser->execute([$mail, $hashedPassword]);

                    if ($insertUser->rowCount() > 0) {
                        $_SESSION['mail'] = $mail;
                        $_SESSION['formateur_id'] = $getDB->lastInsertId(); // ID de l'utilisateur

                        header('Location: ../page/dashboard.php?user=' . urlencode($_SESSION['mail']));
                        exit();
                    } else {
                        echo "Échec de la création de l'utilisateur.";
                    }
                } else {
                    echo "L'adresse e-mail est déjà utilisée.";
                }
            } catch (PDOException $e) {
                echo "Erreur de base de données : " . $e->getMessage();
            }
        } else {
            echo "Adresse e-mail invalide.";
        }
    } else {
        echo "Merci de remplir tous les champs.";
    }
} else {
    echo "Aucune donnée de formulaire reçue.";
}

?>