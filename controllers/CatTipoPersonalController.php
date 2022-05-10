<?php

namespace app\controllers;

use app\models\CatTipoPersonal;
use app\models\CatTipoPersonalSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

/**
 * CatTipoPersonalController implements the CRUD actions for CatTipoPersonal model.
 */
class CatTipoPersonalController extends Controller
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
     * Lists all CatTipoPersonal models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new CatTipoPersonalSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CatTipoPersonal model.
     * @param int $tipenc_id Id
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($tipenc_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($tipenc_id),
        ]);
    }

    /**
     * Creates a new CatTipoPersonal model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new CatTipoPersonal();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'tipenc_id' => $model->tipenc_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CatTipoPersonal model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $tipenc_id Id
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($tipenc_id)
    {
        $model = $this->findModel($tipenc_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'tipenc_id' => $model->tipenc_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CatTipoPersonal model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $tipenc_id Id
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($tipenc_id)
    {
        $this->findModel($tipenc_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CatTipoPersonal model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $tipenc_id Id
     * @return CatTipoPersonal the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($tipenc_id)
    {
        if (($model = CatTipoPersonal::findOne(['tipenc_id' => $tipenc_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
