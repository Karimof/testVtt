<?php

namespace app\modules\admin\controllers;

use app\models\ImageUpload;
use app\models\User;
use Yii;
use app\models\Information;
use app\models\InformationSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\UploadedFile;

/**
 * InformationController implements the CRUD actions for Information model.
 */
class InformationController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                        'matchCallback' => function ($rule, $action) {
                            return User::isUserAdmin(Yii::$app->user->identity->username);
                        }
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Information models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new InformationSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Information model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Information model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $size='information';
        $model = new Information();
        $model_upload=new ImageUpload();
        if(Yii::$app->request->isPost){
            $model_upload->imageFile=UploadedFile::getInstance($model_upload,'imageFile');
            $images=$model_upload->upload($size);
            if(is_array($images)){
                $model->image     = $images['original'];
                $model->thumb_img = $images['thumb'];
            }
            if($model->load(Yii::$app->request->post()) && $model->validate())
            {
                $model->save();
                return $this->redirect(['information/index', 'id' => $model->id]);
            }
        }
        return $this->render('create', [
            'model' => $model,
            'model_upload'=>$model_upload,
        ]);
    }

    /**
     * Updates an existing Information model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model_upload = new ImageUpload();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'model_upload' => $model_upload,
            ]);
    }

    /**
     * Deletes an existing Information model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actions()
    {
        return [
            'image-upload' => [
                'class' => 'vova07\imperavi\actions\UploadFileAction',
                'url' => 'http://testVtt.uz/uploads/', // Directory URL address, where files are stored.
                'path' => 'uploads/', // Or absolute path to directory where files are stored.
            ],
        ];
    }



    /**
     * Finds the Information model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Information the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Information::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
