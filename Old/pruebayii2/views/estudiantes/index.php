<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EstudiantesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Proveedores';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estudiantes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Proveedor', ['index.php/estudiantes/crear'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id_estudiante',
            //'id_categoria',
            'estudiante_nombre',
            'estudiante_apellido',
            'estudiante_matricula',
            //'estudiante_direccion',
            'estudiante_telefono',
            'estudiante_email',
            'activo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
