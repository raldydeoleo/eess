<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MateriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proveedores';
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="materia-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <p>
        <?= Html::a('Registrar Nuevo Proveedor', ['index.php/proveedores/crear'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'empresa_proveedor',
            'rnc_proveedor',
            'nombre_proveedor',
            'apellido_proveedor',
            'telefono_proveedor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
