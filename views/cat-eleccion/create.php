<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CatEleccion */

$this->title = 'Crear Elección';
$this->params['breadcrumbs'][] = ['label' => 'Elecciones', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-eleccion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
