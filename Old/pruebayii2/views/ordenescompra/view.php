<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ordenescompra */

$this->title = $model->id_ordencompra;
$this->params['breadcrumbs'][] = ['label' => 'Ordenescompras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ordenescompra-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id_ordencompra], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id_ordencompra], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_ordencompra',
            'desc_ordencompra',
            'monto_ordencompra',
            'id_proveedor',
            'fecha_ordencompra',
        ],
    ]) ?>

</div>
