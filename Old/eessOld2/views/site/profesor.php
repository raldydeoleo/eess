<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Crear Profesor';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-Profesor-form">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">


    <div class="col-md-6">

        <div class="col-md-2">
            <div class="col-sm-12"> <label>Nombre</label></div>


        </div>
    </div>

       <div class="col-md-4">


        </div>


    <div class="col-md-4">


    </div>

        <?php ActiveForm::end(); ?>
    </div>

</div>
