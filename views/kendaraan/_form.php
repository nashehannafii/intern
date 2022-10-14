<?php

use app\models\Kegunaan;
use app\models\Status;
use app\models\Driver;
use app\models\Mobil;
use app\models\Tambang;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Kendaraan $model */
/** @var yii\widgets\ActiveForm $form */
$kegunaan = Kegunaan::find()->orderBy(['jenis_kendaraan' => SORT_ASC])->all();
$mobil = Mobil::find()->orderBy(['nama_kendaraan' => SORT_ASC])->all();
$status = Status::find()->orderBy(['status_sewa' => SORT_ASC])->all();
$tambang = Tambang::find()->orderBy(['nama_tambang' => SORT_ASC])->all();
$driver = Driver::find()->orderBy(['nama' => SORT_ASC])->all();
?>

<div class="kendaraan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_kendaraan')->dropDownList(ArrayHelper::map($mobil, 'nama_kendaraan', 'nama_kendaraan')) ?>

    <?= $form->field($model, 'kegunaan')->dropDownList(ArrayHelper::map($kegunaan, 'jenis_kendaraan', 'jenis_kendaraan')) ?>

    <?= $form->field($model, 'status')->dropDownList(ArrayHelper::map($status, 'status_sewa', 'status_sewa')) ?>

    <?= $form->field($model, 'konsumsi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jdw_service')->widget(\yii\widgets\MaskedInput::class, [
        'mask' => '9999/99/99 99/99/99',
    ]); ?>

    <?= $form->field($model, 'pj')->dropDownList(ArrayHelper::map($driver, 'nama', 'nama')) ?>

    <?= $form->field($model, 'tambang')->dropDownList(ArrayHelper::map($tambang, 'nama_tambang', 'nama_tambang')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>