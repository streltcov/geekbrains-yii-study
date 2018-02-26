
<?php

use yii\helpers\Html;
use yii\helpers\VarDumper;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a('Create Product', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'name',
                'label' => 'Name',
                'format' => 'html',
                'value' => function($model, $key, $index, $column) {
                    return '<a href="/product/view?id='.$model->id.'">'.$model->name.'</a>';
                },
            ],
            //'name',
            'price',
            [
                'class' => 'yii\grid\DataColumn',
                'attribute' => 'created_at',
                'label' => 'createdat',
                'value' => function($model, $key, $index, $column) {
                    return Yii::$app->formatter->asDatetime($model->created_at);
                },
                'contentOptions' => [
                    'class' => 'small'
                ],
            ],
            //'created_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
    
    //VarDumper::dump($dataProvider, 10, true);
    
    ?>
    <?php Pjax::end(); ?>
</div>
