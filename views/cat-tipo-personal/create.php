<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CatTipoPersonal */

$this->title = 'Crear Personal';
$this->params['breadcrumbs'][] = ['label' => 'Cat Tipo Personal', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-tipo-personal-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
