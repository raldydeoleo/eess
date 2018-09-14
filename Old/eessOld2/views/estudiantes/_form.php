<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Estudiantes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estudiantes-form">






    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">

        <div class="col-md-2">
           <?= $form->field($model, 'estudiante_matricula')->textInput(['maxlength' => true]) ?>
        </div>



        <div class="col-md-4">
            <?= $form->field($model, 'estudiante_nombre')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
        <?= $form->field($model, 'estudiante_apellido')->textInput(['maxlength' => true]) ?>
        </div>


        <div class="col-md-6">
        <?= $form->field($model, 'estudiante_direccion')->textInput(['maxlength' => false]) ?>
        </div>

            <div class="col-md-4">
                <?= $form->field($model, 'estudiante_telefono')->textInput(['maxlength' => true]) ?>
            </div>

                <div class="col-md-4">
                <?= $form->field($model, 'estudiante_email')->textInput(['maxlength' => true]) ?>
                </div>
        <div class="col-md-2">
            <?= $form->field($model, 'id_categoria')->textInput() ?>
        </div>
            <div class="col-md-2">
                <?= $form->field($model, 'activo')->textInput() ?>
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
