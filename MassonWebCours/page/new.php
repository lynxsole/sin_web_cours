<?php 
    session_start();

    if ($_SESSION == false) {
        header('Location: login.php?session=null');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <link rel="shortcut icon" href="../public/Asso_croizat_Logo.jpg" type="image/x-icon">
    <title>New</title>
</head>
<body>
   
       
    <form action="..\config\insert_article.php" method="post" class="max-w-sm mx-auto">
        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 ">Write name article</label>
            <input placeholder="Description" name="article_name" type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        <div>
            <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900 ">Write Description article</label>
            <input placeholder="nom" name="article_desc" type="text" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>

        
        <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your message</label>
        <textarea id="message" rows="4" name="article_message" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500  dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>

        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Select categories</label>
        <select id="countries" name="categories_section" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Windows</option>
            <option>Linux</option>
            <option>Script</option>
            
        </select>
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Select level</label>
        <select id="countries" name="article_level" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <option>Easy</option>
            <option>Medium</option>
            <option>Hard</option>
            
        </select>
        <label for="countries" class="block mb-2 text-sm font-medium text-gray-900">Select read time</label>
        <select id="countries" name="article_time" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:focus:ring-blue-500 dark:focus:border-blue-500">
            
            <option>Rapide</option>
            <option>Moyen</option>
            <option>Longue</option> 
            
        </select>

        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>

    
</body>
</html>
