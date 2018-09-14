<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Proveedores */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proveedores-form">






    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">

        <div class="col-md-2">
           <?= $form->field($model, 'empresa_proveedor')->textInput(['maxlength' => true]) ?>
        </div>



        <div class="col-md-4">
            <?= $form->field($model, 'nombre_proveedor')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
        <?= $form->field($model, 'apellido_proveedor')->textInput(['maxlength' => true]) ?>
        </div>


        <div class="col-md-6">
        <?= $form->field($model, 'direccion_proveedor')->textInput(['maxlength' => false]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'ciudad_proveedor')->textInput(['maxlength' => false]) ?>
        </div>

            <div class="col-md-4">
                <?= $form->field($model, 'telefono_proveedor')->textInput(['maxlength' => true]) ?>
            </div>

                <div class="col-md-4">
                <?= $form->field($model, 'email_proveedor')->textInput(['maxlength' => true]) ?>
                </div>
        <div class="col-md-2">
            <?= $form->field($model, 'rnc_proveedor')->textInput() ?>
        </div>
            <div class="col-md-2">

            </div>
    <div class="form-group">
        <div class="col-md-10">

        </div>
        <div class="col-md-2">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Modificar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>

        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
