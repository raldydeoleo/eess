<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\ComprasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Compras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="compras-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Compras', ['crear'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_compra',
            'id_proveedor',
            'id_proyecto',
            'cantidad_compra',
            'desc_compra',
            'unidad_compra',
            'precio_compra',
            'fecha_compra',
            'vencimiento_compra',
            'hora_compra',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
