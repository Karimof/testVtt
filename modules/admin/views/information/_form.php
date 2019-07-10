<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Information */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="information-form">

    <?php $form = ActiveForm::begin(
        [
            'options'=>[
                'enctype'=>'multipart/form-data'
            ]
        ]
    ); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'content')->widget(\vova07\imperavi\Widget::className(),[
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'imageUpload' => Url::to(['/information/image-upload']),
            'plugins' => [
                'imagemanager',
            ],
        ],
    ]);
    ?>

    <?= $form->field($model_upload, 'imageFile')->fileInput() ?>

       <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
