<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Electrical Equipment Supply and Service',
        //'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/index.php/site/login']],
            ['label' => 'Proveedores', 'url' => ['/index.php/proveedores/index']],
            ['label' => 'Compras', 'url' => ['/index.php/compras/index']],
            ['label' => 'Proyectos', 'url' => ['/index.php/proyectos/index']],
            ['label' => 'Cuentas por Pagar', //'url' => ['#']

                     'items' => [
                    ['label' => 'Todas las Cuentas', 'url' => ['#']],
                    ['label' => 'Facturas Vencidas', 'url' => ['#']],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">submenu</li>',
                    ['label' => 'Facturas no vencidas', 'url' => ['#']],
                    ['label' => 'Ordenes de Compra', 'url' => ['/index.php/ordenescompra/index']],
                                ],

            ],
            [
                'label' => 'Mantenimientos',
                'items' => [
                    ['label' => 'Crear Proveedor', 'url' => ['/index.php/proveedores/crear']],
                    ['label' => 'Crear Proyecto', 'url' => ['/index.php/proyectos/create']],
                    '<li class="divider"></li>',
                    '<li class="dropdown-header">Proyectos</li>',
                    ['label' => 'Crear Orden de Compra', 'url' => ['/index.php/ordenescompra/create']],
                    ['label' => 'Registrar Compra', 'url' => ['/index.php/compras/create']],
                ],

            ],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Sistek <?= date('Y') ?></p>

        <p class="pull-right"></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
