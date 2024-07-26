<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dist/output.css">
    <link rel="shortcut icon" href="public/Asso_croizat_Logo.jpg" type="image/x-icon">
    <title>Asso Croizat - Cours</title>
</head>
<body class="mx-0 py-0 overflow-x-hidden max-md:overflow-x-hidden">
  <header class="inset-x-0 top-0 w-full">
    <?php include "components/nav.php"; ?>
  </header>

  <section class="h-screen flex items-start justify-start pt-20 max-xl:block">
    <div class="py-5 px-2 w-full">
      <div class="mx-16 my-32 md:mx-32 md:my-32 ">
        <h2 class="font-bold text-3xl max-xl:text-base">Cours en libre accès</h2>
      </div>
      <div class="w-full">
        <?php include "components/courses_block.php"; ?>
      </div>
    </div>
  </section>

  <footer class="w-full h-16 border-t-2 flex inset-x-0 bottom-0 font-medium text-black bg-white shadow-xl fixed z-20 items-center justify-between">
    <?php include "components/footer.php"; ?>
  </footer>

  <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/tailspin.js"></script>
</body>
</html>

