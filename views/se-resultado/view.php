<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SeResultado */

$this->title = $model->res_id;
$this->params['breadcrumbs'][] = ['label' => 'Resultados', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="se-resultado-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'res_id' => $model->res_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'res_id' => $model->res_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Deseas eliminar el resultado?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'res_id',
            'res_fkmunicipio',
            'res_fkeleccion',
            'res_fkpartidopolitico',
            'res_fkcasilla',
            'res_votos',
            'res_fecha',
        ],
    ]) ?>

</div>
