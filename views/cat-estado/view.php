<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CatEstado */

$this->title = $model->est_id;
$this->params['breadcrumbs'][] = ['label' => 'Estados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="cat-estado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'est_id' => $model->est_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Borrar', ['delete', 'est_id' => $model->est_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Desea eliminar este estado?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'est_id',
            'est_nombre',
        ],
    ]) ?>

</div>
