<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tambang $model */

$this->title = 'Update Tambang: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tambangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tambang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
