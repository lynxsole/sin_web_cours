<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="shortcut icon" href="../public/Asso_croizat_Logo.jpg" type="image/x-icon">
    <title>Asso Croizat - Cours</title>
</head>
<body class="mx-0 py-0 overflow-x-hidden max-md:overflow-x-hidden">
  <header class="inset-x-0 top-0 w-full">
    <?php include "../components/navWebCours.php"; ?>
  </header>

  <section class="h-screen bloc flex-col items-center justify-center">
    <div class="container">
        <p>
            <?php echo $_GET['nma'] ?>
        </p>
    </div>
  </section>

  <footer class="w-full h-16 border-t-2 flex inset-x-0 bottom-0 text-black bg-white shadow-xl fixed z-20 items-center justify-between">
    <?php include "../components/footer.php"; ?>
  </footer>

  <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/tailspin.js"></script>
</body>
</html>
