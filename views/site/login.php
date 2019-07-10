<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-login" style="background: url('/site/images/login.jpg'); min-height: 700px; width: 100%" >
    <div class="container">

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-12\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>
        <div class="container" style="margin-top: 50px; background-color: rgba(256,256,256,0.2); width:400px; text-align: center; padding-top: 30px; padding-bottom: 10px" >

            <img src="/site/images/user.png" style="width: 150px;">

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>
            <div style="margin-left: -70px">
                <?= $form->field($model, 'rememberMe')->checkbox([
                    'template' => "<div class=\"col-lg-offset-1 col-lg-12\">{input} {label}</div>\n<div class=\"col-lg-8\"></div>",
                ]) ?>
            </div>


            <div class="form-group" style="margin-left: -43.2px">
                <div class="col-lg-offset-1 col-lg-11">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>

        </div>




    <?php ActiveForm::end(); ?>
    </div>
</div>
