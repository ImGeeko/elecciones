<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CatEleccion */

$this->title = 'Actualizar Elección: ' . $model->ele_id;
$this->params['breadcrumbs'][] = ['label' => 'Elecciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ele_id, 'url' => ['view', 'ele_id' => $model->ele_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="cat-eleccion-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
