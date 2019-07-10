<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Library */
/* @var $model_upload app\models\Library */

$this->title = 'Kitob Qo`shish';
$this->params['breadcrumbs'][] = ['label' => 'Libraries', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="library-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'model_upload' => $model_upload,
    ]) ?>

</div>
