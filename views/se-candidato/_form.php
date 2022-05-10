<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SeCandidato */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="se-candidato-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'can_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'can_paterno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'can_materno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'can_fkpartidopolitico')->textInput() ?>

    <?= $form->field($model, 'can_fkmunicipio')->textInput() ?>

    <?= $form->field($model, 'can_fkestado')->textInput() ?>

    <?= $form->field($model, 'can_fkeleccion')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
