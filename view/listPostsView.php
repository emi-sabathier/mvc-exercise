<?php $title = 'Blog Marmithon';?>

<?php ob_start();?>
<h1>Bienvenue sur marmithon!</h1>

<div class="content">
    <h3>Liste des recettes</h3>
    <?php while ($dataListPosts) {?>
    <p>
        <?=htmlspecialchars($dataListPosts['title'])?>
        écrit par
        <?=htmlspecialchars($dataListPosts['author'])?>
        le
        <?=htmlspecialchars($dataListPosts['date_creation_fr'])?>
    </p>
    <p><a href="index.php?action=recipe&id=<?= $dataListPosts['id'] ?>">Voir la recette</a></p>
</div>
<?php 
}
?>
<?php $content = ob_get_clean();?>

<?php require 'template.php';?>