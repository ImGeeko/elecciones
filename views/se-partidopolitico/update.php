<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SePartidopolitico */

$this->title = 'Actualizar Partidopolitico: ' . $model->par_id;
$this->params['breadcrumbs'][] = ['label' => 'Partidopoliticos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->par_id, 'url' => ['view', 'par_id' => $model->par_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="se-partidopolitico-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
