<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CatTipoPersonalSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Personal';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cat-tipo-personal-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear personal', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tipenc_id',
            'tipenc_nombre',
             [
                 'class' => ActionColumn::className(),
                 'urlCreator' => function ($action, $model, $key, $index, $column) {
                     return Url::toRoute([$action, 'tipenc_id' => $model->tipenc_id]);
                  }
             ],
        ],
    ]); ?>


</div>
