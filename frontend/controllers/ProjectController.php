<?php
/**
 * Created by PhpStorm.
 * User: naffiq
 * Date: 11/9/2016
 * Time: 10:23 PM
 */

namespace frontend\controllers;


use common\models\Project;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class ProjectController extends Controller
{
    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $projectQuery = Project::find()->active()
            ->orderBy(['updated_at' => SORT_DESC]);

        $projectProvider = new ActiveDataProvider([
            'query' => $projectQuery
        ]);

        return $this->render('index', [
            'projectProvider' => $projectProvider
        ]);
    }
}