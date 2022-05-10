<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CatTipoPersonal */

$this->title = 'Actualizar Personal: ' . $model->tipenc_id;
$this->params['breadcrumbs'][] = ['label' => 'Personal', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tipenc_id, 'url' => ['view', 'tipenc_id' => $model->tipenc_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="cat-tipo-personal-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
