<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        '//fonts.googleapis.com/css?family=Raleway:300,400,600,700,300italic,400italic,600italic,700italic|Droid+Serif:400,400italic',
        'fonts/novecento/stylesheet.css',
        'icons/glyphicons/style.min.css',
        'icons/font-awesome/font-awesome.min.css',
        'css/bootstrap.min.css',
        'css/style.min.css',
        'css/theme-light.css',
        'css/theme-dark.css',
        'plugins/royalslider/royalslider.min.css',
        'plugins/owlcarousel/owl.carousel.min.css',
        'plugins/mfp/jquery.mfp.css',
    ];
    public $js = [
        'js/jquery-1.11.1.min.js',
        'js/hydrogen.setup.min.js',
        'js/hydrogen.scripts.min.js',
        'js/hydrogen.plugins.js',
        'plugins/royalslider/jquery.royalslider.min.js',
        'plugins/mfp/jquery.mfp-0.9.9.min.js',
        'plugins/mediaelement/mediaelement-and-player.min.js',
        'plugins/gmap/gmap3.min.js',
        'plugins/owlcarousel/owl.carousel.min.js',
        'plugins/isotope/jquery.isotope.min.js',
        'plugins/form/jquery.form.min.js',
        'plugins/form/jquery.validate.min.js',
    ];
    public $depends = [
    ];
}
