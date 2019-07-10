<?php
use app\assets\SiteAsset;
use yii\helpers\Html;
use \yii\bootstrap\Nav;
SiteAsset::register($this);
?>
<?php $this->beginPage(); ?>
    <!DOCTYPE html>
    <html class="no-js" lang="<?= Yii::$app->language ?>">
        <head>
            <meta charset="<?= Yii::$app->charset ?>">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">

            <title><?= Html::encode($this->title) ?></title>
            <?php $this->registerCsrfMetaTags() ?>
            <?php $this->head() ?>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

            <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
        </head>
        <body class="index">
            <?php $this->beginBody() ?>
                <!-- Navigation -->
                <nav class="navbar navbar-default navbar-fixed-top" style="background-color: rgba(0,0,0, 0.95); max-height: 80px">
                    <div class="container">
                        <a class="navbar-brand page-scroll" href="/site/index">Fame</a>
                        <?= Nav::widget([
                            'options' => ['class' => 'navbar-nav navbar-right'],
                            'items' => [
                                ['label' => Yii::t('app','Home'), 'url' => ['/site/index']],
        //                        ['label' => Yii::t('app','News'),'url' => ['/site/news'],
        //                            'visible' => !Yii::$app->user->isGuest
        //                        ],
                                ['label' => Yii::t('app','Contact'), 'url' => ['/site/contact']],
                                ['label' => Yii::t('app','About'), 'url' => ['/site/about']],

                                '<form class="navbar-form navbar-left" action="/site/search" method="get">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="key" value="" placeholder='. Yii::t('app','Search') . ' required>
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit">
                                                <i class="glyphicon glyphicon-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>',
                                ['label' => Yii::t('app','Registration'),'url' => ['/site/registration']],
                                Yii::$app->user->isGuest ? (
                                ['label' => Yii::t('app','Login'), 'url' => ['/site/login']]
                                ) : (
                                    '<li>'
                                    . Html::beginForm(['/site/logout'], 'post')
                                    . Html::submitButton(
                                        Yii::t('app','Logout') . ' (' . Yii::$app->user->identity->username . ')',
                                        ['class' => 'btn btn-link logout']
                                    )
                                    . Html::endForm()
                                    . '</li>'
                                )
                            ],
                        ])
                        ; ?>
                    <!-- /.navbar-collapse -->
                    </div>
                <!-- /.container-fluid -->
                </nav>
                <br><br><br><br>

                <!-- CONTENT BEGIN -->
                <div style="">
                    <?php echo $content; ?>
                </div>
                <!-- CONTENT END -->

                <!-- Footer Area -->
                <footer class="style-1">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-xs-12">
                                <span class="copyright">Copyright &copy; <a href="http://guardiantheme.com">GuardinTheme</a> 2015</span>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="footer-social text-center">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="footer-link">
                                    <ul class="pull-right">
                                        <li><a href="#">Privacy Policy</a>
                                        </li>
                                        <li><a href="#">Terms of Use</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!--/ End Footer Top -->

            <?php $this->endBody(); ?>

    <!--    <script>-->
    <!--        wow = new WOW({}).init();-->
    <!--    </script>-->
        </body>
    </html>
<?php $this->endPage(); ?>

<!--bu shilasa ung yuqorida turadi-->
<!-- Styleswitcher
================================================== -->
<!--        <div class="colors-switcher">-->
<!--            <a id="show-panel" class="hide-panel"><i class="fa fa-tint"></i></a>-->
<!--            <ul class="colors-list">-->
<!--                <li><a title="Light Red" onClick="setActiveStyleSheet('light-red'); return false;" class="light-red"></a></li>-->
<!--                <li><a title="Blue" class="blue" onClick="setActiveStyleSheet('blue'); return false;"></a></li>-->
<!--                <li class="no-margin"><a title="Light Blue" onClick="setActiveStyleSheet('light-blue'); return false;" class="light-blue"></a></li>-->
<!--                <li><a title="Green" class="green" onClick="setActiveStyleSheet('green'); return false;"></a></li>-->
<!---->
<!--                <li class="no-margin"><a title="light-green" class="light-green" onClick="setActiveStyleSheet('light-green'); return false;"></a></li>-->
<!--                <li><a title="Yellow" class="yellow" onClick="setActiveStyleSheet('yellow'); return false;"></a></li>-->
<!---->
<!--            </ul>-->
<!---->
<!--        </div>-->
<!-- Styleswitcher End
