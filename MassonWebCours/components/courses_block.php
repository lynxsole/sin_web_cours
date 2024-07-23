<?php
    include"./db/log_db.php";

        $getArticle = $getDB->prepare("
        Select 
        article.article_id,
        article.article_name,
        article.article_level,
        article.article_time,
        article.article_desc,
        article.categories_section,
        categories.categories_id,
        categories.categories_color
        FROM article, categories
        Where categories.categories_name = article.categories_section");

    $getArticle->execute();

    $push = $getArticle->fetchAll();

    foreach($push as $push) { 
        ?>
        <a href="page/webCours.php?nma=<?php echo htmlspecialchars($push['article_name']); ?>&article_id=<?php echo htmlspecialchars($push['article_id']); ?>">
            <div class="w-[90%] h-auto mx-auto relative my-6 border shadow-sm hover:shadow-lg cursor-pointer transition-all flex rounded-sm bottom-10">
                <div class="w-[20%] h-auto max-xl:hidden">
                    <img src="public/Asso_Croizat_book.png" class="object-cover w-auto h-32 mx-auto my-8 items-cente justify-center" alt="">
                </div>
                <div class="block px-2 py-1">

                    <div style="color: <?php echo htmlspecialchars($push['categories_color']); ?>" class="categories_font_color font-semibold py-2"><?php echo htmlspecialchars($push['categories_section']); ?></div>

                    <div class="font-bold py-1"><?php echo htmlspecialchars($push['article_name']); ?></div>

                    <div class="flex items-center justify-start my-1 py-2">
                        <div class="flex items-center mx-2">
                            <div class="mx-1">
                                <img src="public/Asso_Croizat_level.png" class="w-5" alt="">
                            </div>
                            <span><?php echo htmlspecialchars($push['article_level']); ?></span>
                        </div>

                        <div class="flex items-center">
                            <div class="mx-2">
                                <img src="public/Asso_Croizat_clock.png" class="w-5" alt="">
                            </div>
                            <span><?php echo htmlspecialchars($push['article_time']); ?> Min</span>
                        </div>
                        
                    </div>
                    <div class="text-start font-light px-2 py-3">
                        <p>
                        <?php echo htmlspecialchars($push['article_desc']); ?>
                        </p>
                    </div>
                </div>
            </div>
        </a>
        <?php
    }


?>