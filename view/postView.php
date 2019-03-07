<?php $title = 'Blog Marmithon';?>

<?php ob_start();?>
<h1>Bienvenue sur marmithon!</h1>

<div class="content">
    <h3>
        <?=htmlspecialchars($dataPost['title'])?>
    </h3>
    <p>Par
        <?=htmlspecialchars($dataPost['author'])?>
        posté le
        <?=htmlspecialchars($dataPost['date_creation_fr'])?>
    </p>
    <p><?= htmlspecialchars($dataPost['content']) ?></p>
</div>

<?php $content = ob_get_clean();?>

<?php require 'template.php';?>