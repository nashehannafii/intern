<?php

use app\models\Kendaraan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\KendaraanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pengajuan Penggunaan Kendaraan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kendaraan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Buat Pengajuan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'id',
            'nama_kendaraan',
            'kegunaan',
            'status',
            'tambang',
            'konsumsi',
            'jdw_service',
            'pj',
            // 'is_approval',
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
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Kendaraan $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
