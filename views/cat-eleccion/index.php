<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CatEleccionSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Elecciones';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-eleccion-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Elección', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            // 'ele_id',
            'ele_nombre',
            'ele_anio',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'ele_id' => $model->ele_id]);
                 }
            ],
        ],
    ]); ?>


</div>
