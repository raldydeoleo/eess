<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Compras */

$this->title = 'Update Compras: ' . $model->id_compra;
$this->params['breadcrumbs'][] = ['label' => 'Compras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_compra, 'url' => ['view', 'id' => $model->id_compra]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="compras-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
