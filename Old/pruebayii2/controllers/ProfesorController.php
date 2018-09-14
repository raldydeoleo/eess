<?php

namespace app\controllers;

use Yii;
use app\models\Profesor;
use app\models\ProfesorSearch;
use yii\web\Controller;



class ProfesorController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new ProfesorSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_profesor]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }


    /**
     * Crea un Profesor nuevo.
     * Si se crea exitosamente el profesor se redirige la vista a  'view'.
     * @return mixed
     */
    public function actionCrear()
    {
        $model = new Profesor();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id_profesor]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }


    protected function findModel($id)
    {
        if (($model = Profesor::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
