<?php

namespace app\controllers;

use app\models\SeCandidato;
use app\models\SeCandidatoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SeCandidatoController implements the CRUD actions for SeCandidato model.
 */
class SeCandidatoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all SeCandidato models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new SeCandidatoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single SeCandidato model.
     * @param int $can_id Id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($can_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($can_id),
        ]);
    }

    /**
     * Creates a new SeCandidato model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new SeCandidato();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'can_id' => $model->can_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing SeCandidato model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $can_id Id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($can_id)
    {
        $model = $this->findModel($can_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'can_id' => $model->can_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing SeCandidato model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $can_id Id
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($can_id)
    {
        $this->findModel($can_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the SeCandidato model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $can_id Id
     * @return SeCandidato the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($can_id)
    {
        if (($model = SeCandidato::findOne(['can_id' => $can_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
