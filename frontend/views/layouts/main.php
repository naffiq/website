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

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

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
            <li <?= Url::current() == Url::to(['/site/about']) ? "class=\"active\"" : "" ?>>
                <a href="<?= Url::to(['/site/about']) ?>">О себе</a>
            </li>
            <li <?= Url::current() == Url::to(['/projects']) ? "class=\"active\"" : "" ?>>
                <a href="<?= Url::to(['/projects']) ?>">Проекты</a>
            </li>
            <?php /*
            <li><a href="<?= Url::to(['/music']) ?>">Музыка</a></li>
            <li><a href="<?= Url::to(['/blog']) ?>">Блог</a></li>
            */ ?>
            <li <?= Url::current() == Url::to(['/site/contact']) ? "class=\"active\"" : "" ?>>
                <a href="<?= Url::to(['/site/contact']) ?>">Контакты</a>
            </li>
        </ul>
    </nav>

    <?= $content ?>
</div>

<footer>
    <div class="container">
        «Безделье — игрушка дьявола» © <?= date('Y') ?>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
