<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Kendaraan $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kendaraans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="kendaraan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nama_kendaraan',
            'kegunaan',
            'status',
            'tambang',
            'konsumsi',
            'jdw_service',
            'pj',
            [
                'attribute' => 'is_approval',
                'filter' => ['2' => 'Sudah disetujui', '1' => 'Belum disetujui'],
                'format' => 'raw',
                'value' => function ($model, $url) {
                    $label = '';
                    $st = 'btn-warning';
                    switch ($model->is_approval) {
                        case 0:
                            $label = 'Belum disetujui';
                            $st = 'btn-warning';
                            break;
                        case 1:
                            $label = 'Belum disetujui';
                            $st = 'btn-warning';
                            break;
                        case 2:
                            $label = 'Sudah disetujui';
                            $st = 'btn-success';
                            break;
                        case 3:
                            $label = 'Ditolak';
                            $st = 'btn-danger';
                            break;
                    }

                    return Html::button($label, ['class' => $st . ' btn-sm btn']);
                },
            ],
        ],
    ]) ?>

</div>
