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

    //public $layout = 'testlayout';

    /**
     * "/test/index" route
     */
    public function actionIndex()
    {
        $model = new models\Product();
        $model->id = 1;
        $model->name = 'name';
        $model->price = 20;

        //VarDumper::dump(Yii::$app->test, 10, true);

        $testservice = Yii::$app->test->getValue();

        return $this->render('index', [
            'model' => $model, 
            'test' => 'test variable', 
            'testservice' => $testservice]
        );

    } // end action
    

    public function actionTest($message = 'hello')
    {

        return $this->renderContent($message);

    } // end action

    /**
     * @throws \yii\db\Exception
     */
    public function actionInsert()
    {

        Yii::$app->db->createCommand()->insert('user', [
            'username' => 'user1',
            'name' => 'name1',
            'surname' => 'surname1',
            'password_hash' => 'dfg',
            'access_token' => 'access',
            'created_at' => '123123',
            'updated_at' => time()
        ])->execute();

        Yii::$app->db->createCommand()->insert('user', [
            'username' => 'user2',
            'name' => 'name2',
            'surname' => 'surname2',
            'password_hash' => 'dfg',
            'access_token' => 'access',
            'created_at' => '235235',
            'updated_at' => time()
        ])->execute();

        Yii::$app->db->createCommand()->insert('user', [
            'username' => 'user3',
            'name' => 'name3',
            'surname' => 'surname3',
            'password_hash' => 'dfg',
            'access_token' => 'access',
            'created_at' => '321321',
            'updated_at' => time()
        ])->execute();

        //$ids = (new \yii\db\Query())->select('id')->from('user')->all();

        Yii::$app->db->createCommand()->batchInsert('note', ['text', 'creator_id', 'created_at'], [
            ['text note 1', 1, time()],
            ['text note 2', 2, time()],
            ['text note 3', 3, time()]
        ])->execute();

    } // end action

    public function actionSelect()
    {
        $query1 = (new \yii\db\Query())
            ->select('*')
            ->from('user')
            ->where(['id' => 1])
            ->all();

        VarDumper::dump($query1);

        $query2 = (new \yii\db\Query())
            ->select('*')
            ->from('user')
            ->where('id>1')
            ->orderBy('name DESC')
            ->all();

        VarDumper::dump($query2);

        $query3 = (new \yii\db\Query())
            ->select('*')
            ->from('user')
            ->all();

        echo count($query3);

        $notes = (new \yii\db\Query())
            ->select('*')
            ->from('note')
            ->innerJoin('user', 'note.creator_id=user.id')
            ->all();

        VarDumper::dump($notes);

    } // end action

} // end class
