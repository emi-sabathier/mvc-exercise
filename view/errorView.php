<?php $title = 'Blog Marmithon';?>

<?php ob_start();?>
<h1>Bienvenue sur marmithon!</h1>

    <div>
        <p><?= $errorMessage ?></p>
    </div>

<?php $content = ob_get_clean();?>

<?php require 'template.php';?>