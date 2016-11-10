<?php
/**
 * @var $this \yii\web\View
 * @var $projectProvider \yii\data\ActiveDataProvider
 */

$this->title = "Все проекты"
?>

<h1><?= $this->title ?></h1>

<?= \yii\widgets\ListView::widget([
    'dataProvider' => $projectProvider,
    'itemView' => '_item',
    'itemOptions' => [
        'tag' => 'article'
    ],
    'options' => ['class' => 'ordered-list-view'],
    'layout' => '{items}{pager}'
]) ?>