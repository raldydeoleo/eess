<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ProfesorSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="profesor-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_profesor') ?>

    <?= $form->field($model, 'profesor_nombre') ?>

    <?= $form->field($model, 'profesor_apellido') ?>

    <?= $form->field($model, 'profesor_telefono') ?>

    <?= $form->field($model, 'profesor_email') ?>

    <?php // echo $form->field($model, 'id_discapacidad') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
