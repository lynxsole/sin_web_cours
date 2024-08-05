<?php

    session_start();

    require "../db/log_db.php";


    $select_categories = $_GET['categories'];

    if($select_categories){
        global $getDB;

        $categories_get = $getDB->prepare('Select * FROM article, categories Where categories.categories_name = article.categories_section');
        $categories_get->execute();

        // Récupération tout les résultats
        $q = $categories_get->fetchAll(PDO::FETCH_ASSOC);

        header("Location: ../courses.php?categories=". $select_categories);

    }else{
        global $getDB;
        
        // Récupération de la catégorie depuis les paramètres GET
        $select_categories = $_GET['categories'];

        // Préparation de la requête SQL avec une variable de liaison
        $categories_get = $getDB->prepare('SELECT * FROM article, categories WHERE categories.categories_name = article.categories_section AND categories_section = :select_categories');

        // Liaison de la variable
        $categories_get->bindParam(':select_categories', $select_categories);

        // Exécution de la requête
        $categories_get->execute();

        // Récupération des résultats
        $q = $categories_get->fetchAll(PDO::FETCH_ASSOC);


        header("Location: ../courses.php?categories=". $select_categories);
    }
    
    


    

    
