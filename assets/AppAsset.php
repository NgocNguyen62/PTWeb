<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
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
    public $baseUrl = '@web';
    // public $css = [
    //     'css/site.css',
    // ];
    // public $js = [
    // ];
    public $css = [
        'https://adminlte.io/themes/v3/assets/css/adminlte.css',
        // Các tệp CSS khác của AdminLTE 3 (nếu có)
    ];
    public $js = [
        'https://adminlte.io/themes/v3/assets/js/adminlte.js',
        // Các tệp JavaScript khác của AdminLTE 3 (nếu có)
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset'
    ];
}
