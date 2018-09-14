<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Profesor */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="panel-body">
<div class="panel-heading">
    <div class="panel panel-danger">

</div>
</div>
<div class="col-md-8">
<div class="profesor-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="col-md-6">

        <?= $form->field($model, 'profesor_nombre')->textInput(['maxlength' => true]) ?>
    </div>

    <div class="col-md-6">
    <?= $form->field($model, 'profesor_apellido')->textInput(['maxlength' => true]) ?>
    </div>



    <div class="col-md-4">
    <?= $form->field($model, 'profesor_telefono')->textInput(['maxlength' => true]) ?>
    </div>



    <div class="col-md-4">
    <?= $form->field($model, 'profesor_email')->textInput(['maxlength' => true]) ?>
    </div>




    <div class="col-md-4">
    <?= $form->field($model, 'id_discapacidad')->textInput() ?>
    </div>


    <div class="col-md-6">
    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-6">
    </div>
    <div class="col-md-12">
            <div class="form-group">
                <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>

</div>

    <div class="col-md-4">



    </div>