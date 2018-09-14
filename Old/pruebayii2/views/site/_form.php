<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Materia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="materia-form">


    <?php $form = ActiveForm::begin(); ?>
    <div class="col-lg-4">
    <?= $form->field($model, 'materia_nombre')->textInput(['maxlength' => true]) ?>
    </div>
    <div class="col-lg-2">
    <?= $form->field($model, 'cantidad_credito')->textInput() ?>
     </div>

    <div class="col-lg-2">

        <?= $form->field($model, 'hora_practica')->textInput() ?>
    </div>


            <div class="col-lg-2" class="glyphicon-align-right" >

                <?= $form->field($model, 'hora_teoria')->textInput() ?>
            </div>


    <div class="form-group ">
        <div class="col-lg-12">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
