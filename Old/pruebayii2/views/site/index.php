<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MateriaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Compras';
$this->params['breadcrumbs'][] = $this->title;

?>


<div class="materia-index">

    <h1><?= Html::encode($this->title) ?></h1>


    <p>
        <?= Html::a('Registrar Compra', ['index.php/site/crear'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_materia',
            'materia_nombre',
            'cantidad_credito',
            'hora_practica',
            'hora_teoria',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
