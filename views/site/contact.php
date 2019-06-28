<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>



<section id="contact" class="contact">
    <div class="container">
        <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

            <div class="alert alert-success">
                Thank you for contacting us. We will respond to you as soon as possible.
            </div>

            <p>
                Note that if you turn on the Yii debugger, you should be able
                to view the mail message on the mail panel of the debugger.
                <?php if (Yii::$app->mailer->useFileTransport): ?>
                    Because the application is in development mode, the email is not sent but saved as
                    a file under <code><?= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?></code>.
                                                                                                        Please configure the <code>useFileTransport</code> property of the <code>mail</code>
                    application component to be false to enable email sending.
                <?php endif; ?>
            </p>

        <?php else: ?>

            <p align="center">
                If you have business inquiries or other questions, please fill out the following form to contact us.
                Thank you.
            </p>

            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Contact With Us</h3>
                        <p class="white-text">Duis aute irure dolor in reprehenderit in voluptate</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

                                    <!--                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">-->
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <?= $form->field($model, 'email') ?>
                                    <!--                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">-->
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <?= $form->field($model, 'subject') ?>
                                    <!--                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">-->
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

                                    <!--                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>-->
                                    <p class="help-block text-danger"></p>
                                </div>
                                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                                ]) ?>
                            </div>

                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <div class="form-group">
                                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                </div>
                                <!--                                <button type="submit" class="btn btn-primary">Send Message</button>-->
                            </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <h4>Contact info</h4>
                        <ul>
                            <li><strong>E-mail :</strong> your-email@mail.com</li>
                            <li><strong>Phone :</strong> +8801-6778776</li>
                            <li><strong>Mobile :</strong> +8801-45565378</li>
                            <li><strong>Web :</strong> yourdomain.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
                    <div class="footer-contact-info">
                        <h4>Working Hours</h4>
                        <ul>
                            <li><strong>Mon-Wed :</strong> 9 am to 5 pm</li>
                            <li><strong>Thurs-Fri :</strong> 12 pm to 10 pm</li>
                            <li><strong>Sat :</strong> 9 am to 3 pm</li>
                            <li><strong>Sunday :</strong> Closed</li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<!---->
<!---->
<!---->
<!--<div class="container">-->
<!--    <div class="site-contact">-->
<!--        <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--        --><?php //if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>
<!---->
<!--            <div class="alert alert-success">-->
<!--                Thank you for contacting us. We will respond to you as soon as possible.-->
<!--            </div>-->
<!---->
<!--            <p>-->
<!--                Note that if you turn on the Yii debugger, you should be able-->
<!--                to view the mail message on the mail panel of the debugger.-->
<!--                --><?php //if (Yii::$app->mailer->useFileTransport): ?>
<!--                    Because the application is in development mode, the email is not sent but saved as-->
<!--                    a file under <code>--><?//= Yii::getAlias(Yii::$app->mailer->fileTransportPath) ?><!--</code>.-->
<!--                    Please configure the <code>useFileTransport</code> property of the <code>mail</code>-->
<!--                    application component to be false to enable email sending.-->
<!--                --><?php //endif; ?>
<!--            </p>-->
<!---->
<!--        --><?php //else: ?>
<!---->
<!--            <p>-->
<!--                If you have business inquiries or other questions, please fill out the following form to contact us.-->
<!--                Thank you.-->
<!--            </p>-->
<!---->
<!--            <div class="row">-->
<!--                <div class="col-lg-5">-->
<!---->
<!--                    --><?php //$form = ActiveForm::begin(['id' => 'contact-form']); ?>
<!---->
<!--                        --><?//= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
<!---->
<!--                        --><?//= $form->field($model, 'email') ?>
<!---->
<!--                        --><?//= $form->field($model, 'subject') ?>
<!---->
<!--                        --><?//= $form->field($model, 'body')->textarea(['rows' => 6]) ?>
<!---->
<!--                        --><?//= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
//                            'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
//                        ]) ?>
<!---->
<!--                        <div class="form-group">-->
<!--                            --><?//= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
<!--                        </div>-->
<!---->
<!--                    --><?php //ActiveForm::end(); ?>
<!---->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--        --><?php //endif; ?>
<!--    </div>-->
<!--</div>-->