<body>
    <div class="container">
            <?php foreach($articles as $article) : ?>
                <div class="grid" >
                    <div class="displayGridImg">
                         <img src="./artImg/<?=$article['image']?>">
                    </div>

                    <h2><?= $article['titre'] ?></h2>
                    <p class="overflow-ellipsis"><?=$article['article']?></p>
                    <span><?= $article['date']?></span>
                </div>

            <?php endforeach; ?>
            <div id="imgContainer">
                
            <p id="artMsg"></p>
    </div>
    </div>
    <script src="./js/article.js"></script>
</body>
