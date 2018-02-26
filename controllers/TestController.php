<?php

namespace app\controllers;

use Yii;
use yii\helpers\VarDumper;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models;
//use app\models\LoginForm;
//use app\models\ContactForm;

class TestController extends Controller
{
    /**
     * "/test/index" route
     */
    public function actionIndex()
    {
        $model = new models\Product();
        $model->id = 1;
        $model->name = 'name';
        $model->price = 20;

        VarDumper::dump(Yii::$app->test, 10, true);

        $testservice = Yii::$app->test->getValue();

        return $this->render('index', [
            'model' => $model, 
            'test' => 'test variable', 
            'testservice' => $testservice]
        );

    } // end function
    

    /**
     * "/test/test" route
     *
     * @param string $message
     */
    public function actionTest($message = 'hello')
    {

        return $this->renderContent($message);

    } // end function

} // end class
