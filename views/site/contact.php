<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
?>

<section class="section-padding wow fadeInUp delay-05s" id="contact">
    <div class="container">
        <div class="row white">
            <div class="col-md-8 col-sm-12">
                <div class="section-title">
                    <h2 class="head-title black">Contact Us</h2>
                    <hr class="botm-line">
                    <p class="sec-para black">
                        <?= Yii::t('app','How are you {name}', ['name' => 'Sarvar']) ?>
                    </p>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="col-md-4 col-sm-6" style="padding-left:0px;">
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                    <?= $form->field($model, 'email') ?>

                    <?= $form->field($model, 'subject') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                    <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                        'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                    ]) ?>

                    <div class="form-group">
                        <?= Html::submitButton(Yii::t('app','Submit'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
                <div class="col-md-4 col-sm-6">
                    <h3 class="cont-title">Visit Us</h3>
                    <div class="location-info">
                        <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Via Principe Amedeo 9, Torino, Italy</p>
                        <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Phone: 0039 333 12 68 347</p>
                        <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="" class="link-dec">hi@yourdomain.com</a></p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
                        <span aria-hidden="true" class="fa fa-envelope-o"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>