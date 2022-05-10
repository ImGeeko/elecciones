<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SePartidopolitico */

$this->title = 'Crear Partidopolitico';
$this->params['breadcrumbs'][] = ['label' => 'Partidopoliticos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-partidopolitico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
