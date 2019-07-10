<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Questions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questions-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="form-group bmd-form-group">
        <?= $form->field($model, 'subject_id')->
        dropDownList(\yii\helpers\ArrayHelper::map(\app\models\Subject::find()->all(),'id','name'),
            ['class'=>'form-control','id'=>'directionInQuestion'])
            ->label('Fanni tanlang') ?>
    </div>

    <?= $form->field($model, 'question')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'answerA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answerB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answerC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answerD')->textInput(['maxlength' => true]) ?>

    <div class="form-group bmd-form-group ">
        <?=$form->field($model,'trueAnswer')->radioList([
            '1'=>'A javob',
            '2'=>'B javob',
            '3'=>'C javob',
            '4'=>'D javob'
        ],['class'=>'','style'=>'color: #000','required'=>'required'])?>
    </div>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
