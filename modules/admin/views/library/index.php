<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\LibrarySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kitoblar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="library-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Kitob Qo`shish', ['create'], ['class' => 'btn btn-primary']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'image',
            //'thumb_img',
            'file',
            'information:ntext',
            //'subject_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
