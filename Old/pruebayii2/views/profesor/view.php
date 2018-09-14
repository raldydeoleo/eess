<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Profesor */

$this->title = $model->id_profesor;
$this->params['breadcrumbs'][] = ['label' => 'Profesor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profesor-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Modificar', ['update', 'id' => $model->id_profesor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['Delete', 'id' => $model->id_profesor], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro que desea borrar este profesor?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_profesor',
            'profesor_nombre',
            'profesor_apellido',
            'profesor_telefono',
            'profesor_email:email',
            'id_discapacidad',
        ],
    ]) ?>

</div>
