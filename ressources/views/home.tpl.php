<?php
require_once 'ressources/views/layouts/header.tpl.php';
//var_dump($articlescontent);
?>
<main>
<?php foreach ($articlescontent as $viewArticles): ?>
    <?php if (isset($viewArticles)): ?>
        <article>
            <h2>
                <a href="?action=blogPost&id=<?= $viewArticles['id'] ?>"><?= $viewArticles['title'] ?></a>
            </h2>
            <div>
                <?= $viewArticles['datestart'].' /' ?>
                <?= $viewArticles['datend'] ?>
            </div>
            <div>
                <i><?= $viewArticles['psauthor'] ?></i>
            </div>
        </article>
    <?php else: ?>
        pas d'article
    <?php endif; ?>
<?php endforeach; ?>
    <a href="index.php?action=blogPostCreate">Create articles</a>
</main>
<?php
require_once 'ressources/views/layouts/footer.tpl.php';