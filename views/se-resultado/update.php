<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeResultado */

$this->title = 'Actualizar Resultado: ' . $model->res_id;
$this->params['breadcrumbs'][] = ['label' => 'Resultados', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->res_id, 'url' => ['view', 'res_id' => $model->res_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="se-resultado-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
