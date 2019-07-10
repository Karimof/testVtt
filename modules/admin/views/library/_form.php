<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Library */
/* @var $model_upload app\models\Library */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="library-form">


    <?php $form = ActiveForm::begin(
        [
            'options'=>[
                'enctype'=>'multipart/form-data'
            ]
        ]
    ); ?>

    <div class="form-group bmd-form-group">
        <?= $form->field($model, 'subject_id')->
        dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Subject::find()->all(),'id','name'),
            ['class'=>'form-control','id'=>'directionInQuestion'])
            ->label('Fanni tanlang') ?>
    </div>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model_upload, 'imageFile')->input('file') ?>

    <?= $form->field($model, 'file')->textInput(['maxlength' => true]) ?>

    <?php
    echo $form->field($model, 'information')->widget(\vova07\imperavi\Widget::className(),[
        'settings' => [
            'lang' => 'ru',
            'minHeight' => 200,
            'imageUpload' => Url::to(['/library/image-upload']),
            'plugins' => [
                'imagemanager',
            ],
        ],
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
