<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CatEleccion */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cat-eleccion-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ele_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ele_anio')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
