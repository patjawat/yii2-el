<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ExaminationSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="examination-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'lesson_id') ?>

    <?= $form->field($model, 'question') ?>

    <?= $form->field($model, 'a') ?>

    <?= $form->field($model, 'b') ?>

    <?php // echo $form->field($model, 'c') ?>

    <?php // echo $form->field($model, 'd') ?>

    <?php // echo $form->field($model, 'answer') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
