<?php

 $mail_template = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/output.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="overflow-x-hidden">
  <section class="max-w-2xl px-6 py-8 mx-auto text-black bg-white ">
    <header>
        <a  href="#">
            <img class="w-auto h-[150px]" src="https://pbs.twimg.com/media/FLjXYINWQAIZWxv.png" alt="">
        </a>
    </header>

    <main class="mt-8">
        <h2 class="text-gray-700">Hello,</h2>

        <p class="mt-2 leading-loose text-gray-600">
          your former account was created by the <span class="font-semibold ">Admin</span>.
        </p>

        <p class="mt-2 leading-loose text-gray-600"">
          here is your username
        </p>

        <p class="mt-2 leading-loose text-gray-600"">
          Mail : '.$user_Mail.'
        </p>

        <p class="mt-2 leading-loose text-gray-600"">
          Password : '.$hashedPassword = null.'
        </p>

        <p class="mt-2 leading-loose text-gray-600"">
          please do not disclose this to anyone
        </p>
        
        <p class="mt-8 text-gray-600">
            Thanks, <br>
            Team Asso_Croizat
        </p>
    </main>

    <footer class="mt-8">
        <p class="mt-3 text-gray-500 dark:text-gray-400">© 2024 Asso_Croizat, Inc. All rights reserved.</p>
    </footer>
</section>
</body>
</html>';




