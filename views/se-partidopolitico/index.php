<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SePartidopoliticoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Se Partidopoliticos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="se-partidopolitico-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Partidopolitico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'par_id',
            'par_nombre',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'par_id' => $model->par_id]);
                 }
            ],
        ],
    ]); ?>


</div>
