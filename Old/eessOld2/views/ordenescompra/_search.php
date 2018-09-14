<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrdenescompraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ordenescompra-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_ordencompra') ?>

    <?= $form->field($model, 'desc_ordencompra') ?>

    <?= $form->field($model, 'monto_ordencompra') ?>

    <?= $form->field($model, 'id_proveedor') ?>

    <?= $form->field($model, 'id_proyecto') ?>

    <?php // echo $form->field($model, 'fecha_ordencompra') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
