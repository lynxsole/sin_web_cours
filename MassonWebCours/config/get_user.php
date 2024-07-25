<?php 
session_start();

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

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
            try {
                // Vérifier si l'utilisateur existe
                $searchUser = $getDB->prepare('SELECT * FROM formateur WHERE formateur_mail = ?');
                $searchUser->execute([$mail]);

                if ($searchUser->rowCount() > 0) {
                    $load_user = $searchUser->fetch();

                    // Vérifier le mot de passe
                    if (password_verify($password, $load_user['formateur_pass'])) {
                        $_SESSION['mail'] = $load_user['formateur_mail'];
                        $_SESSION['formateur_id'] = $load_user['formateur_id']; // Assurez-vous que 'formateur_id' est correct
                        $_SESSION['name'] = $load_user['formateur_name'];

                        header('Location: ../page/dashboard.php?user=' . urlencode($_SESSION['formateur_id']));
                        exit();
                    } else {
                        echo "Mot de passe incorrect.";
                    }
                } else {
                    echo "Aucun utilisateur trouvé avec cet e-mail.";
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
