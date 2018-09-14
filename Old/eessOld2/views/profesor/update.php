<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Profesor */

$this->title = 'Modificar Profesor: ' . $model->id_profesor;
$this->params['breadcrumbs'][] = ['label' => 'Profesores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_profesor, 'url' => ['view', 'id' => $model->id_profesor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profesor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
