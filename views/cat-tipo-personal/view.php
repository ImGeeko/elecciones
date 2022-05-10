<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CatTipoPersonal */

$this->title = $model->tipenc_id;
$this->params['breadcrumbs'][] = ['label' => 'Personal', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cat-tipo-personal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'tipenc_id' => $model->tipenc_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'tipenc_id' => $model->tipenc_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Desea eliminiar este personal?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'tipenc_id',
            'tipenc_nombre',
        ],
    ]) ?>

</div>
