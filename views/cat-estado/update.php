<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CatEstado */

$this->title = 'Actualizar Estado: ' . $model->est_id;
$this->params['breadcrumbs'][] = ['label' => 'Estados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->est_id, 'url' => ['view', 'est_id' => $model->est_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="cat-estado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
