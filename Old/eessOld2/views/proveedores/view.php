<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Estudiantes */

$this->title = $model->id_proveedor;
$this->params['breadcrumbs'][] = ['label' => '[Proveedores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedores-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('update', ['update', 'id' => $model->id_proveedor], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_proveedor], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Esta seguro que desea borrar este proveedor?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_proveedor',
            'empresa_proveedor',
            'nombre_proveedor',
            'apellido_proveedor',
            'rnc_proveedor',
            'direccion_proveedor',
            'telefono_proveedor',
            'email_proveedor',

        ],
    ]) ?>

</div>
