<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Information */

$this->title = 'Yangilik Kiritish';
$this->params['breadcrumbs'][] = ['label' => 'Informations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="information-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model_upload'=>$model_upload,
    ]) ?>

</div>
