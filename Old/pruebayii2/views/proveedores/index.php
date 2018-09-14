<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EstudiantesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proveedores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="proveedores-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Proveedor', ['index.php/proveedores/crear'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_proveedor',
            'nombre_proveedor',
            'apellido_proveedor',
            'empresa_proveedor',
            'rnc_proveedor',
            'direccion_proveedor',
            'telefono_proveedor',
            'email_proveedor',


            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
