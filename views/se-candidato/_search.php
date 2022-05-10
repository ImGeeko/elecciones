<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SeCandidatoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="se-candidato-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'can_id') ?>

    <?= $form->field($model, 'can_nombre') ?>

    <?= $form->field($model, 'can_paterno') ?>

    <?= $form->field($model, 'can_materno') ?>

    <?= $form->field($model, 'can_fkpartidopolitico') ?>

    <?php // echo $form->field($model, 'can_fkmunicipio') ?>

    <?php // echo $form->field($model, 'can_fkestado') ?>

    <?php // echo $form->field($model, 'can_fkeleccion') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reiniciar', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
