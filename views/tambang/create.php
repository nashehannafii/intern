<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Tambang $model */

$this->title = 'Create Tambang';
$this->params['breadcrumbs'][] = ['label' => 'Tambangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tambang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
