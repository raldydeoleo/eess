<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ordenescompra */

$this->title = 'Update Ordenescompra: ' . $model->id_ordencompra;
$this->params['breadcrumbs'][] = ['label' => 'Ordenescompras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_ordencompra, 'url' => ['view', 'id' => $model->id_ordencompra]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ordenescompra-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
