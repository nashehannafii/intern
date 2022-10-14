<?php

use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

NavBar::begin([
    'brandLabel' => Yii::$app->name,
    'brandUrl' => Yii::$app->homeUrl,
    'options' => ['class' => 'navbar-expand-md navbar-dark bg-dark fixed-top']
]);
echo Nav::widget([
    'options' => ['class' => 'navbar-nav'],
    'items' => [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Dashboard', 'url' => ['/site/dashboard'], 'visible' => Yii::$app->user->can('atasan') || Yii::$app->user->can('admin') || Yii::$app->user->can('theCreator'),],
        ['label' => 'Pengajuan', 'url' => ['/kendaraan'], 'visible' => Yii::$app->user->can('admin') || Yii::$app->user->can('theCreator'),],
        ['label' => 'Persetujuan', 'url' => ['/kendaraan/persetujuan'], 'visible' => Yii::$app->user->can('atasan') || Yii::$app->user->can('theCreator'),],
        [
            'label' => 'Master',
            'visible' => Yii::$app->user->can('admin') || Yii::$app->user->can('theCreator'),
            'items' => [
                ['label' => 'AuthItem', 'url' => ['/auth-item'],'visible' => Yii::$app->user->can('theCreator'),],
                ['label' => 'AuthItemChild', 'url' => ['/auth-item-child'],'visible' => Yii::$app->user->can('theCreator'),],
                ['label' => 'Driver', 'url' => ['/driver'],'visible' => Yii::$app->user->can('admin') || Yii::$app->user->can('theCreator'),],
                ['label' => 'Kegunaan', 'url' => ['/kegunaan'],'visible' => Yii::$app->user->can('admin') || Yii::$app->user->can('theCreator'),],
                ['label' => 'Status', 'url' => ['/status'],'visible' => Yii::$app->user->can('admin') || Yii::$app->user->can('theCreator'),],
                ['label' => 'Tambang', 'url' => ['/tambang'],'visible' => Yii::$app->user->can('admin') || Yii::$app->user->can('theCreator'),],
                ['label' => 'Kendaraan', 'url' => ['/mobil'],'visible' => Yii::$app->user->can('admin') || Yii::$app->user->can('theCreator'),],
            ],
        ],
        
        Yii::$app->user->isGuest
            ? ['label' => 'Login', 'url' => ['/site/login']]
            : '<li class="nav-item">'
                . Html::beginForm(['/site/logout'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'nav-link btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
    ]
]);
NavBar::end();
