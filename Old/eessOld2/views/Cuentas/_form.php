<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Compras */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="compras-form">

            <?php $form = ActiveForm::begin(); ?>
        <div class="col-lg-6">
            <?= $form->field($model, 'id_proveedor')->textInput() ?>
        </div>

         <div class="col-lg-6">
            <?= $form->field($model, 'id_proyecto')->textInput() ?>
        </div>

        <div class="col-lg-1">
            <?= $form->field($model, 'cantidad_compra')->textInput() ?>
        </div>

         <div class="col-lg-7">
            <?= $form->field($model, 'desc_compra')->textInput(['maxlength' => true]) ?>
         </div>

        <div class="col-lg-2">
            <?= $form->field($model, 'unidad_compra')->textInput() ?>
        </div>

    <div class="col-lg-2">
    <?= $form->field($model, 'precio_compra')->textInput() ?>
    </div>

    <div class="col-lg-2">
            <?= $form->field($model, 'fecha_compra')->textInput() ?>
    </div>

    <div class="col-lg-2">
            <?= $form->field($model, 'hora_compra')->textInput() ?>
    </div>
    <div class="col-lg-11">

    </div>
    <div class="col-lg-1">
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Registrar' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    </div>
    <?php ActiveForm::end(); ?>

</div>
