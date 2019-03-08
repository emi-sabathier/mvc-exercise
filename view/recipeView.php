<?php $title = 'Blog Marmithon';?>

<?php ob_start();?>
<h1>Bienvenue sur marmithon!</h1>

<div class="content">
    <h3>
        <?=htmlspecialchars($recipe['title'])?>
    </h3>
    <p>Par
        <?=htmlspecialchars($recipe['author'])?>
        posté le
        <?=htmlspecialchars($recipe['date_fr'])?>
    </p>
    <p><?= htmlspecialchars($recipe['content']) ?></p>
    <p><a href="index.php">Retour</a></p>
</div>

<?php $content = ob_get_clean();?>

<?php require 'template.php';?>