<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="container">
    <h2 id="header-title">
        <a href="<?= Url::home() ?>">Галымжан Абдугалимов</a>
    </h2>

    <nav id="header-nav">
        <ul>
            <li><a href="<?= Url::to(['/site/about']) ?>">О себе</a></li>
            <li><a href="<?= Url::to(['/projects']) ?>">Проекты</a></li>
            <li><a href="<?= Url::to(['/music']) ?>">Музыка</a></li>
            <li><a href="<?= Url::to(['/blog']) ?>">Блог</a></li>
            <li><a href="<?= Url::to(['/contact']) ?>">Контакты</a></li>
        </ul>
    </nav>

    <?= $content ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
