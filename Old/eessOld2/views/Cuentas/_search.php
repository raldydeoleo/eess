<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComprasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compras-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_compra') ?>

    <?= $form->field($model, 'id_proveedor') ?>

    <?= $form->field($model, 'id_proyecto') ?>

    <?= $form->field($model, 'cantidad_compra') ?>

    <?= $form->field($model, 'desc_compra') ?>

    <?php // echo $form->field($model, 'unidad_compra') ?>

    <?php // echo $form->field($model, 'precio_compra') ?>

    <?php // echo $form->field($model, 'Fecha_compra') ?>

    <?php // echo $form->field($model, 'Hora_compra') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
