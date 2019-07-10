<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\InformationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Yangiliklar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="information-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Yangilik Kiritish', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'title',
            'content:ntext',
            'image',
            'thumb_img',
            'create_date',
            'update_date',
            'views_count',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
