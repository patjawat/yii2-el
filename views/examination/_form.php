<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Examination */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examination-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'lesson_id')->textInput() ?>

    <?= $form->field($model, 'question')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'b')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'd')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answer')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
