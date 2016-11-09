<?php
/**
 * @var $model \common\models\Project
 * @var $key integer
 * @var $index integer
 * @var $widget \yii\widgets\ListView
 */

$total = $widget->dataProvider->getTotalCount();
?>

<span class="article-index"><?= $key ?>.</span>
<h4>
    <a href="<?= $model->link ?>" target="_blank" rel="noopener">
        <?= $model->title ?>
    </a>
</h4>

<?= $model->description ?>
