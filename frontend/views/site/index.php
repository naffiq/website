<?php
/**
 * @var $this yii\web\View
 * @var $projectProvider \yii\data\ActiveDataProvider
 */
use yii\helpers\Url;

$this->title = 'Галымжан Абдугалимов — тот ещё лентяй';
?>
<div class="site-index">

    <h1>Главная</h1>

    <div class="row">
        <div class="col-md-9">
            <h4>Последние проекты</h4>

            <?= \yii\widgets\ListView::widget([
                'dataProvider' => $projectProvider,
                'itemView' => '@frontend/views/project/_item',
                'itemOptions' => [
                    'tag' => 'article'
                ],
                'options' => ['class' => 'ordered-list-view'],
                'layout' => '{items}{pager}'
            ]) ?>

            <a href="<?= Url::to(['']) ?>"></a>
        </div>

        <?php /*
        <div class="col-md-3">
            <h3>Записи в блоге</h3>
        </div>
        */ ?>
    </div>


</div>
