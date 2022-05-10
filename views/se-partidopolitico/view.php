<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SePartidopolitico */

$this->title = $model->par_id;
$this->params['breadcrumbs'][] = ['label' => 'Partidopoliticos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="se-partidopolitico-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'par_id' => $model->par_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'par_id' => $model->par_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Deseas eliminar el partido politico?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'par_id',
            'par_nombre',
        ],
    ]) ?>

</div>
