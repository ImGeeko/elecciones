<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SeResultadoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="se-resultado-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'res_id') ?>

    <?= $form->field($model, 'res_fkmunicipio') ?>

    <?= $form->field($model, 'res_fkeleccion') ?>

    <?= $form->field($model, 'res_fkpartidopolitico') ?>

    <?= $form->field($model, 'res_fkcasilla') ?>

    <?php // echo $form->field($model, 'res_votos') ?>

    <?php // echo $form->field($model, 'res_fecha') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reiniciar', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
