<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\CatTipoPersonal;

/* @var $this yii\web\View */
/* @var $model app\models\CatTipoPersonal */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cat-tipo-personal-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tipenc_nombre')->dropDownList(CatTipoPersonal::map(), ['prompt' => 'Selecciona el personal']) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
