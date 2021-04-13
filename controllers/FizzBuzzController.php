<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\GameForm;

class FizzBuzzController extends Controller
{
    /**
     * {@inheritdoc}
     */
    /*public function behaviors()
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
    }*/

    /**
     * {@inheritdoc}
     */
    /*public function actions()
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
    }*/

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new GameForm();
        $results = [];
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            Yii::$app->session->setFlash('gameFormSubmitted');
            $fizz =0;
            $buzz = 0;
            for ($index = 1; $index <= $model->number; $index++) {
                $fizz ++;
                $buzz ++;
                if ($fizz === 3 && $buzz ===5) {
                    $results[] = "FizzBuzz";
                    $fizz = 0;
                    $buzz = 0;
                } elseif ($fizz === 3) {
                    $results[] = "Fizz";
                    $fizz = 0;
                } elseif ($buzz === 5) {
                    $results[] = "Buzz";
                    $buzz = 0;
                } else {
                    $results[] = (string) $index;
                }
            }
        }
        
        //return $this->render('index');
        return $this->render('index', [
            'model' => $model,
            'results' => $results,
        ]);
    }
}
