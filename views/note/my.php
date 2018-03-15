<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="note-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a('Create Note', ['create'], ['class' => 'btn btn-success', 'style' => 'background-color: gray']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'text:ntext',
            'created_at',
            [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{share} {view} {update} {delete} ',
                    'buttons' => [
                            'share' => function($url, $model, $key) {
                                        return Html::a(\yii\bootstrap\Html::icon('share') , ['access/create', 'id' => $model->id]);
                            }
                    ]
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
