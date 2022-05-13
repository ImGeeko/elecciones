<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\SeResultado */

$this->title = 'Crear Resultado';
$this->params['breadcrumbs'][] = ['label' => 'Resultados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-resultado-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
