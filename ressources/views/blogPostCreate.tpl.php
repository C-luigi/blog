<?php
require_once 'ressources/views/layouts/header.tpl.php';
?>
<main>
    <form action="index.php?action=blogPostCreate" method="post">
        <label>Titre :
            <textarea name="title" placeholder="Titre d'article en 40 caractères" rows="5"></textarea><br>
        </label>
        <label>Contenu :
            <textarea name="txtart" placeholder="Contenu de l'article sur 150 caractères" rows="5"></textarea><br>
        </label>
        <label for="start">Début parution</label>
        <input type="date" id="start" name="datestart"><br>
        <label for="end">Fin parution</label>
        <input type="date" id="end" name="datend"><br>
        <label for="importantArticle">Importance de l'article</label>
        <select name="importantArticle" id="importantArticle">
            <option value="0" selected>0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select><br>
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="author_id"><br>
        <input type="submit" name="submit_button" value="Envoyer">
    </form>
    <a href="index.php?action=home">Home</a>
</main>
<?php
require_once 'ressources/views/layouts/footer.tpl.php';