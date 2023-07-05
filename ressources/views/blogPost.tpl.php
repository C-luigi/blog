<?php
require_once 'ressources/views/layouts/header.tpl.php';
var_dump($articlescontent);
var_dump($articlesCommentary);
?>
    <main>
        <?php foreach ($articlescontent as $viewArticles): ?>
            <?php if (isset($viewArticles)): ?>
                <article>
                    <h2>
                        <?= $viewArticles['title'] ?>
                    </h2>
                    <div>
                        <?= $viewArticles['txtart'] ?>
                    </div>
                    <div>
                        <?= $viewArticles['datestart'].' /' ?>
                        <?= $viewArticles['datend'] ?>
                    </div>
                    <div>
                        <b><?= $viewArticles['psauthor'] ?></b>
                        <i><?= $viewArticles['nauthor'] ?></i>
                        <?= $viewArticles['pauthor'] ?><br><br>
                    </div>
                </article>
            <?php else: ?>
                <h2>pas d'article</h2>
            <?php endif; ?>
        <?php endforeach; ?>
        <?php foreach ($articlesCommentary as $viewArticles): ?>
                <article>
                    <div>
                        <?= $viewArticles['comart'] ?>
                    </div>
                    <div>
                        <b><?= $viewArticles['psauthor'] ?></b>
                        <i><?= $viewArticles['nauthor'] ?></i>
                        <?= $viewArticles['pauthor'] ?>
                    </div>
                    <div>
                        <?= $viewArticles['datedefault']?><br><br>
                    </div>
                </article>
        <?php endforeach; ?>
    </main>
<?php
require_once 'ressources/views/layouts/footer.tpl.php';