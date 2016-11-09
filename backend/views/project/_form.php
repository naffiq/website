<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Project */
/* @var $form yii\widgets\ActiveForm */

$this->registerJs(<<<JS
    var descirptionEditor = new MediumEditor('.description-editor');

    $('#project-form').on('beforeValidate', function() {
        $('#project-description').val(descirptionEditor.serialize()['element-0'].value);
    });
JS
)
?>

<div class="project-form">

    <?php $form = ActiveForm::begin([
        'options' => ['id' => 'project-form']
    ]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'description', [
        'template' => "{label}<div class=\"medium-editor-placeholder description-editor\">{$model->description}</div>{input}{error}"
    ])->hiddenInput() ?>

    <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'is_active')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
