<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeCandidato */

$this->title = 'Actualizar Candidato: ' . $model->can_id;
$this->params['breadcrumbs'][] = ['label' => 'Candidatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->can_id, 'url' => ['view', 'can_id' => $model->can_id]];
$this->params['breadcrumbs'][] = 'Actualizar';
?>
<div class="se-candidato-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
