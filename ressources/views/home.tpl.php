<?php
require_once 'ressources/views/layouts/header.tpl.php';
//var_dump($articlescontent);
?>
<main>
<?php foreach ($articlescontent as $articles): ?>
    <?php if (isset($articles)): ?>
        <article>
            <h2>
                <?= $articles['title'] ?>
            </h2>
            <div>
                <?= $articles['datestart'].' /' ?>
                <?= $articles['datend'] ?>
            </div>
            <div>
                <i><?= $articles['psauthor'] ?></i>
            </div>
        </article>
    <?php else: ?>
        pas d'article
    <?php endif; ?>
<?php endforeach; ?>
</main>
<?php
require_once 'ressources/views/layouts/footer.tpl.php';