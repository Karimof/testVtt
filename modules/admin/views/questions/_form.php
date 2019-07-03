<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Questions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'question')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'answerA')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answerB')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answerC')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'answerD')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trueAnswer')->textInput() ?>

    <?= $form->field($model, 'subject_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
