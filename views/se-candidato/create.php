<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeCandidato */

$this->title = 'Crear Candidato';
$this->params['breadcrumbs'][] = ['label' => 'Candidatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-candidato-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
