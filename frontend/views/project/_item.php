<?php
/**
 * @var $model \common\models\Project
 * @var $key integer
 * @var $index integer
 * @var $widget \yii\widgets\ListView
 */
$page = $widget->dataProvider->getPagination()->page;
$pageSize = $widget->dataProvider->getPagination()->pageSize;
?>
<span class="article-index"><?= $index + ($page * $pageSize) + 1 ?>.</span>
<h4>
    <a href="<?= $model->link ?>" target="_blank" rel="noopener">
        <?= $model->title ?>
    </a>
</h4>

<?= $model->description ?>
