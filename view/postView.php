<?php $title = 'Blog Marmithon';?>

<?php ob_start();?>
<h1>Bienvenue sur marmithon!</h1>

<div class="content">
    <h3>
        <?=htmlspecialchars($dataRecipe['title'])?>
    </h3>
    <p>Par
        <?=htmlspecialchars($dataRecipe['author'])?>
        posté le
        <?=htmlspecialchars($dataRecipe['date_creation_fr'])?>
    </p>
    <p><?= htmlspecialchars($dataRecipe['content']) ?></p>
</div>

<?php $content = ob_get_clean();?>

<?php require 'template.php';?>