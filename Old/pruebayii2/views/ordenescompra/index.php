<?php

use yii\helpers\Html;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $searchModel app\models\OrdenescompraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ordenescompras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordenescompra-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ordenescompra', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_ordencompra',
            'desc_ordencompra',
            'monto_ordencompra',
            'id_proveedor',
            'fecha_ordencompra',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
