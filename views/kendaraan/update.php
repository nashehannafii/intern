<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Kendaraan $model */

$this->title = 'Update Kendaraan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kendaraans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kendaraan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
