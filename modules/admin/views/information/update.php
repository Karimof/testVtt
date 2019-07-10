<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Information */

$this->title = 'Yangilikni o`zgartirish: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="information-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model_upload' => $model_upload,
    ]) ?>

</div>
