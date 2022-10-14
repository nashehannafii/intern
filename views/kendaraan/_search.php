<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\KendaraanSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="kendaraan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nama_kendaraan') ?>

    <?= $form->field($model, 'kegunaan') ?>

    <?= $form->field($model, 'status') ?>

    <?= $form->field($model, 'tambang') ?>

    <?php // echo $form->field($model, 'konsumsi') ?>

    <?php // echo $form->field($model, 'jdw_service') ?>

    <?php // echo $form->field($model, 'pj') ?>

    <?php // echo $form->field($model, 'is_approval') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>