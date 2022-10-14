<?php

use app\models\AuthItem;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AuthItemChild $model */
/** @var yii\widgets\ActiveForm $form */
$list = AuthItem::find()->orderBy(['name'=>SORT_ASC])->all();
?>

<div class="auth-item-child-form">

    <?php $form = ActiveForm::begin([
    	'options' => [
    		'class' => 'form-horizontal'
    	]
    ]); ?>

    <?= $form->field($model, 'parent')->dropDownList(ArrayHelper::map($list,'name','name')) ?>

    <?= $form->field($model, 'child')->dropDownList(ArrayHelper::map($list,'name','name')) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>