<?php

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\carItem */
/* @var $form yii\bootstrap4\ActiveForm */
?>

<div class="car-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'brand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'priority')->checkbox() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'isPurchased')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
