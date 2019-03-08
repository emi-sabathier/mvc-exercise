<?php $title = 'Blog Marmithon';?>

<?php ob_start();?>
<h1>Bienvenue sur marmithon!</h1>

<div>
    <h3>Liste des recettes</h3>

    <?php
foreach ($recipes as $recipe) {?>

    <p>
        <strong><?=htmlspecialchars($recipe['title'])?></strong>
        écrit par
        <?=htmlspecialchars($recipe['author'])?>
        le
        <?=htmlspecialchars($recipe['date_fr'])?>
    </p>
    <p><a href="index.php?action=recipe&id=<?=$recipe['id']?>">Voir la recette</a></p>
    <?php
}
?>
</div>


<?php $content = ob_get_clean();?>

<?php require 'template.php';?>