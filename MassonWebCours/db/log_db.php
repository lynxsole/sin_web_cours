<?php 
    $user = "root";
    $pass = "";

    try {
        $getDB = new PDO('mysql:host=localhost;dbname=masson_bdd', $user, $pass);
    } catch (PDOException $e) {
        echo "error".$e;
    }
?>