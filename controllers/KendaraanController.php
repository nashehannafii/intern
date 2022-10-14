<?php

namespace app\controllers;

use app\models\Kendaraan;
use app\models\KendaraanSearch;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * KendaraanController implements the CRUD actions for Kendaraan model.
 */
class KendaraanController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'denyCallback' => function ($rule, $action) {
                    throw new \yii\web\ForbiddenHttpException('Oops, You are not allowed to access this page');
                },
                'only' => ['create', 'update', 'delete', 'index'],
                'rules' => [

                    [
                        'actions' => [
                            'create', 'update', 'index'
                        ],
                        'allow' => true,
                        'roles' => ['theCreator'],
                    ],
                    [
                        'actions' => [
                            'index'
                        ],
                        'allow' => true,
                        'roles' => ['admin'],
                    ],
                    [
                        'actions' => [
                            'persetujuan'
                        ],
                        'allow' => true,
                        'roles' => ['atasan'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Kendaraan models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new KendaraanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionPersetujuan()
    {
        $searchModel = new KendaraanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('persetujuan', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Kendaraan model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Kendaraan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Kendaraan();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $model->is_approval = '2';
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Kendaraan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionSetujui($id)
    {

        $searchModel = new KendaraanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $model = $this->findModel($id);
        $model->is_approval = '2';
        $model->save();
        // return $this->redirect(['persetujuan', 'id' => $model->id]);

        return $this->render('persetujuan', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionTolak($id)
    {

        $searchModel = new KendaraanSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        $model = $this->findModel($id);
        $model->is_approval = '3';
        $model->save();
        // return $this->redirect(['persetujuan', 'id' => $model->id]);

        return $this->render('persetujuan', [
            'model' => $model,
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Deletes an existing Kendaraan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Kendaraan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Kendaraan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Kendaraan::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
