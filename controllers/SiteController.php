<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\User;

class SiteController extends Controller
{
    public $layout = 'site';
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
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
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }



    /** registration page
     *
     *
     */
    public function actionRegistration()
    {
        return $this->render('registration');
    }

    /** upload_registration page
     *
     *
     */
    public function actionUpload_registration()
    {
        $model = new User();
        $request = Yii::$app->request;

        $fullName = $request->get('fullName');
        $login = $request->get('login');
        $password = $request->get('password');

        $model->fio = $fullName;
        $model->username = $login;
        $model->password = $password;
        $model->role = 0;
        $model->image = '/site/images/user.png';
        $model->save();
        
        if($model->save())
            return $this->redirect('index');

        return $this->redirect('registration');
    }


    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        $model_user = new User();

        if ($model->load(Yii::$app->request->post()) && $model->login() && $model_user->role == 1) {
            return $this->redirect('../admin/questions/index');
        }

        else if($model->load(Yii::$app->request->post()) && $model->login() && $model_user->role == 0){
            return $this->redirect('index');
        }

        else {
            $model->username = '';
            $model->password = '';
            return $this->render('login', [
                'model' => $model,
            ]);
        }

    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
