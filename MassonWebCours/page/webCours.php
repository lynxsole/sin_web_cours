<?php

  include"../db/log_db.php";
  
  if (isset($_GET['article_id'])) {
    $getId = $_GET['article_id'];

    $getCourses = $getDB->prepare("
        SELECT article.article_name, courses.courses_sujet 
        FROM article
        JOIN courses ON article.article_id = courses.courses_get_id
        WHERE article.article_id = :article_id
    ");

    $getCourses->bindParam(':article_id', $getId, PDO::PARAM_INT);

    $getCourses->execute();

    $results = $getCourses->fetchAll(PDO::FETCH_ASSOC);
}

foreach ($results as $results) {
  
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="shortcut icon" href="../public/Asso_croizat_Logo.jpg" type="image/x-icon">
    <title>Asso Croizat - <?php echo htmlspecialchars($results['article_name']); ?></title>
</head>
<body class="mx-0 py-0 overflow-x-hidden max-md:overflow-x-hidden">
  <header class="inset-x-0 top-0 w-full">
    <?php include "../components/navWebCours.php"; ?>
  </header>

  <section class="h-screen my-1 bloc items-start justify-start">
      <div class="mx-1 md:mx-32 md:my-32">
        <a href="../courses.php?categories=All" class="flex items-center">
            <span class="font-semibold hover:border-b-2 hover:border-black ease-in">Revenir en arriere</span>
        </a>
      </div>
    <div class="mx-1 md:mx-32 md:my-32 md:text-start">
        <p id="sujet">
          <?php echo $results['courses_sujet']; ?>
        </p>
    </div>
  </section>

  <footer class="w-full h-16 border-t-2 flex inset-x-0 bottom-0 text-black bg-white shadow-xl fixed z-20 items-center justify-between">
    <?php include "../components/footer.php"; ?>
  </footer>
  <script src="../src/js/main.js"></script>
  <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/tailspin.js"></script>
</body>
</html>
