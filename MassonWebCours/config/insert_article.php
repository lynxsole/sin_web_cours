<?php 
include "../db/log_db.php"; // Assurez-vous que ce fichier établit correctement la connexion PDO à $getDB

function errorMsg($e){
    header('Location: ../page/dashboard.php?error=' . urlencode($e));
    exit();
}

if (isset($_POST['article_name'], $_POST['article_desc'], $_POST['article_message'], $_POST['categories_section'], $_POST['article_level'], $_POST['article_time'])) {
    if (!empty($_POST['article_name']) && !empty($_POST['article_desc']) && !empty($_POST['article_message']) && !empty($_POST['categories_section']) && !empty($_POST['article_level']) && !empty($_POST['article_time'])) {

        $name = htmlspecialchars($_POST['article_name']);
        $level = htmlspecialchars($_POST['article_level']);
        $readTime = htmlspecialchars($_POST['article_time']);
        $message = htmlspecialchars($_POST['article_message']);
        $categories = htmlspecialchars($_POST['categories_section']);
        $description = htmlspecialchars($_POST['article_desc']);

        try {
            // Pour afficher les erreurs PDO
            $getDB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Démarre une transaction
            $getDB->beginTransaction();

            // Assurez-vous que l'ordre des colonnes et des valeurs correspond
            $q = $getDB->prepare('INSERT INTO article (article_name, article_level, article_time, article_desc, categories_section) VALUES (?, ?, ?, ?, ?)');
            $q->execute([$name, $level, $readTime, $description, $categories]);

            // Récupérer l'ID de l'article nouvellement inséré
            $articleId = $getDB->lastInsertId();

            // Insérer dans une autre table en utilisant l'ID de l'article
            // Assurez-vous que 'courses_get_id' et 'message' correspondent aux colonnes de la table 'courses'
            $otherTableQuery = $getDB->prepare('INSERT INTO courses (courses_get_id, courses_sujet) VALUES (?, ?)');
            $otherTableQuery->execute([$articleId, $message]);

            // Valider la transaction
            $getDB->commit();

            // Log de succès
            error_log("Insertion réussie : article_id=$articleId", 3, '../log/success.log');
            header('Location: ../page/dashboard.php?success=article_added');
            exit();
        } catch (PDOException $e) {
            // Annuler la transaction en cas d'erreur
            $getDB->rollBack();
            error_log("Erreur de base de données : " . $e->getMessage(), 3, '../log/errors.log');
            errorMsg('Erreur de base de données : ' . $e->getMessage());
        }
    } else {
        errorMsg('Tous les champs sont requis.');
    }
} else {
    errorMsg('Données de formulaire non reçues.');
}
?>
