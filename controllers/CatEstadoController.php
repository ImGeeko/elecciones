<?php

namespace app\controllers;

use app\models\CatEstado;
use app\models\CatEstadoSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * CatEstadoController implements the CRUD actions for CatEstado model.
 */
class CatEstadoController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'ghost-access' => [
                'class' => 'webvimark\modules\UserManagement\components\GhostAccessControl',
            ],
        ];
    }

    /**
     * Lists all CatEstado models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CatEstadoSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CatEstado model.
     * @param int $est_id Id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($est_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($est_id),
        ]);
    }

    /**
     * Creates a new CatEstado model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CatEstado();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'est_id' => $model->est_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CatEstado model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $est_id Id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($est_id)
    {
        $model = $this->findModel($est_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'est_id' => $model->est_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CatEstado model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $est_id Id
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($est_id)
    {
        $this->findModel($est_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CatEstado model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $est_id Id
     * @return CatEstado the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($est_id)
    {
        if (($model = CatEstado::findOne(['est_id' => $est_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
