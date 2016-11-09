<?php
namespace frontend\controllers;

use common\models\Project;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
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
     * @return mixed
     */
    public function actionIndex()
    {
        $projectQuery = Project::find()->active()
            ->orderBy(['updated_at' => SORT_DESC])->limit(5);

        $projectProvider = new ActiveDataProvider([
            'query' => $projectQuery
        ]);

        return $this->render('index', [
            'projectProvider' => $projectProvider
        ]);
    }

    public function actionAbout()
    {
        // TODO : Display data from DB

        return $this->render('about');
    }

    public function actionContact()
    {
        // TODO : Display data from DB

        return $this->render('contact');
    }

}
