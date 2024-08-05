

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

  <section class="w-full h-screen flex items-start justify-start pt-20 max-xl:block">
    <div class="py-5 px-2 w-full">
      <div class="mx-16 my-32 md:mx-32 md:my-32 ">
        <h2 class="font-bold text-3xl max-xl:text-base">Cours en libre accès</h2>
        <form action="config\get_categories.php" method="get">
          <div class="flex my-7 items-center justify-between">
            <select id="countries" name="categories" class=" mx-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-32 p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
              <option>All</option>  
              <option>Windows</option>
              <option>Linux</option>
              <option>Script</option>
          </select>

          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
             Rechercher
          </button>
          </div>
          
        </form>
      </div>
      <div class="w-full">
        <?php include "components/courses_block.php"; ?>
      </div>
    </div>
      
    <div class="">
      <!-- <?php include "components/pagination.php"; ?> -->
    </div>
  </section>



  <footer class="w-full h-16 border-t-2 flex inset-x-0 bottom-0 font-medium text-black bg-white shadow-xl fixed z-20 items-center justify-between">
    <?php include "components/footer.php"; ?>
  </footer>

  <script type="module" src="https://cdn.jsdelivr.net/npm/ldrs/dist/auto/tailspin.js"></script>
</body>
</html>

