<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/adminStyle';
    public $css = [
        'css/site.css',
        'fonts/css/font-awesome.min.css',
        'css/animate.min.css',
        'css/custom.css',
        'css/icheck/flat/green.css',
        'css/floatexamples.css',

    ];
    public $js = [
        'js/jquery.min.js',
        'js/nprogress.js',
        'js/gauge/gauge.min.js',
        'js/gauge/gauge_demo.js',
        'js/chartjs/chart.min.js',
        'js/progressbar/bootstrap-progressbar.min.js',
        'js/nicescroll/jquery.nicescroll.min.js',
        'js/icheck/icheck.min.js',
        'js/moment.min.js',
        'js/datepicker/daterangepicker.js',
        'js/custom.js',
        'js/excanvas.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
