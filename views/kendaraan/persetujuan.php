<?php

use app\models\Kendaraan;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\KendaraanSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Kendaraans';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="kendaraan-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kendaraan', ['create'], ['class' => 'btn btn-success']) ?>
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
            // 'jdw_service',
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
                            $label = 'Setujui';
                            $st = 'btn-warning';
                            break;
                        case 2:
                            $label = 'Telah disetujui';
                            $st = 'btn-success';
                            break;
                        case 3:
                            $label = 'Ditolak';
                            $st = 'btn-danger';
                            break;
                    }

                    return $model->is_approval == '1' ? Html::a('<div class="btn-warning btn-sm btn">Setujui</div>', ['kendaraan/setujui', 'id'=>$model->id], ['title'=>'Setujui']).Html::a('<div class="btn-danger btn-sm btn">Tolak</div>', ['kendaraan/tolak', 'id'=>$model->id], ['title'=>'Setujui']) : Html::button($label, ['class' => $st . ' btn-sm btn disabled']);
                },
            ],
            // [
            //     'class' => ActionColumn::className(),
            //     'urlCreator' => function ($action, Kendaraan $model, $key, $index, $column) {
            //         return Url::toRoute([$action, 'id' => $model->id]);
            //      }
            // ],
            // [
            //     'class' => 'yii\grid\ActionColumn',
            // ]
            [
                'class' => 'yii\grid\ActionColumn',
                'headerOptions' => ['syle' => 'width:65px'],
            ],
        ],
    ]); ?>


</div>
