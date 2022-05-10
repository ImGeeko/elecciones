<?php

namespace app\controllers;

use app\models\CatEleccion;
use app\models\CatEleccionSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * CatEleccionController implements the CRUD actions for CatEleccion model.
 */
class CatEleccionController extends Controller
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
     * Lists all CatEleccion models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CatEleccionSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CatEleccion model.
     * @param int $ele_id Id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($ele_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($ele_id),
        ]);
    }

    /**
     * Creates a new CatEleccion model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CatEleccion();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'ele_id' => $model->ele_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CatEleccion model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $ele_id Id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($ele_id)
    {
        $model = $this->findModel($ele_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ele_id' => $model->ele_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CatEleccion model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $ele_id Id
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($ele_id)
    {
        $this->findModel($ele_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CatEleccion model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $ele_id Id
     * @return CatEleccion the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ele_id)
    {
        if (($model = CatEleccion::findOne(['ele_id' => $ele_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
