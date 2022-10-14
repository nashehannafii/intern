<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Kegunaan $model */

$this->title = 'Create Kegunaan';
$this->params['breadcrumbs'][] = ['label' => 'Kegunaans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kegunaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
