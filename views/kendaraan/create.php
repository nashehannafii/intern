<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Kendaraan $model */

$this->title = 'Buat Pengajuan';
$this->params['breadcrumbs'][] = ['label' => 'Kendaraans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
