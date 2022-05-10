<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\SeCandidato */

$this->title = $model->can_id;
$this->params['breadcrumbs'][] = ['label' => 'Candidatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="se-candidato-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'can_id' => $model->can_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'can_id' => $model->can_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Deseas borrar al candidato?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'can_id',
            'can_nombre',
            'can_paterno',
            'can_materno',
            'can_fkpartidopolitico',
            'can_fkmunicipio',
            'can_fkestado',
            'can_fkeleccion',
        ],
    ]) ?>

</div>
