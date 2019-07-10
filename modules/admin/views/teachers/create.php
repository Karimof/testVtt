<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Teachers */

$this->title = 'O`qituvchi Kiritish';
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model_upload' =>$model_upload,
    ]) ?>

</div>
