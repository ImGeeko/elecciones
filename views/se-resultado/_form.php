<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SeResultado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="se-resultado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'res_fkmunicipio')->textInput() ?>

    <?= $form->field($model, 'res_fkeleccion')->textInput() ?>

    <?= $form->field($model, 'res_fkpartidopolitico')->textInput() ?>

    <?= $form->field($model, 'res_fkcasilla')->textInput() ?>

    <?= $form->field($model, 'res_votos')->textInput() ?>

    <?= $form->field($model, 'res_fecha')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
