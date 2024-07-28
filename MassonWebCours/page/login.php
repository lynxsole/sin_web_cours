<?php 
    session_start();

    $p = "get";

    if ($_SESSION) {
        header('Location: dashboard.php?session='. $_SESSION['formateur_id']);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="shortcut icon" href="../public/Asso_croizat_Logo.jpg" type="image/x-icon">
    <title>Formateur Connexion</title>
</head>
<body class="overflow-hidden">

    <section class="h-auto">
    <div class="mx-32 my-32 md:mx-32 md:my-32">
        <a href="../courses.php?session" class="flex items-center">
            <span class="font-semibold hover:border-b-2 hover:border-black ease-in">Revenir en arriere</span>
        </a>
      </div>
      <div class="w-full text-center">
        <h2 class="text-2xl">
            Formateur Connexion
        </h2>
      </div>
    <div class="h-auto my-[32px] px-3 bloc flex-col item-center relative">
        <form action="..\config\<?php echo $p ?>_user.php" method="post" class="max-w-sm mx-auto text-black">
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                <input type="email" name="mail" autocomplete="off" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required />
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                <input type="password" name="pass" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="" required />
            </div>
            <div class="flex items-start mb-5">
                <div class="flex items-center h-5">
                <input id="remember" type="checkbox" value="" class="w-4 h-4 border text-black border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                </div>
                <label class="ms-2 text-sm font-medium text-gray-900">Remember me</label>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
        </form>
    </div>
    </section>
    
</body>
</html>