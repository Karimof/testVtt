<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Teachers */

$this->title = 'O`qituvchini o`zgartirish: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Teachers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="teachers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model_upload' => $model_upload,
    ]) ?>

</div>
