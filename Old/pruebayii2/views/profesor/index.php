<?php
/* @var $this yii\web\View */


use yii\helpers\Html;
use yii\grid\GridView;



$this->title = 'Proyectos';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="profesores-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Crear Proyecto', ['index.php/profesor/crear'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_profesor',
            'profesor_nombre',
            'profesor_apellido',
            'profesor_telefono',
            'profesor_email',
            'id_discapacidad',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

