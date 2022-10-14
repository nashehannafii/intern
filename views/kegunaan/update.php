<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Kegunaan $model */

$this->title = 'Update Kegunaan: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kegunaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kegunaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
