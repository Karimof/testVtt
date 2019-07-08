<?php

namespace app\assets;

use yii\web\AssetBundle;

class SiteAsset extends AssetBundle {
    public $basePath = '@webroot';
    public $baseUrl = '@web/site';
    public $css = [
        'css/animate.css',
//        'css/bootstrap.min.css',
        'css/font-awesome.min.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/owl.transitions.css',
        'css/style.css',
        'css/responsive.css',
//        'css/color/green.css',
//        'css/color/light-red.css',
        'css/color/blue.css',
//        'css/color/light-blue.css',
//        'css/color/yellow.css',
//        'css/color/light-green.css',
//        'css/color/light-red.css',

        'js/modernizr.custom.js',
        ];

    public $js = [
//        'js/modernizr.custom.js',
//          'js/npm.js',
//        'js/jquery-2.1.1.min.js',
//        'js/bootstrap.min.js',

    //timer
//        'js/timer/example/dojo.js',
//        'js/timer/example/jquery.simple.timer.js',
    ///timer
       // 'js/jquery-2.1.1.min.js',
        //'js/bootstrap.min.js',
        'js/jquery.easing.1.3.js',
        'js/classie.js',
        'js/count-to.js',
        'js/jquery.appear.js',
        'js/cbpAnimatedHeader.js',
        'js/owl.carousel.min.js',
        'js/jquery.fitvids.js',
        'js/styleswitcher.js',
        'js/jqBootstrapValidation.js',
        'js/owl.carousel.min.js',
        //'js/contact_me.js',
        'js/script.js',
//        'js/wow.min.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}