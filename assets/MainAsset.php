<?php
/**
 * @link https://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license https://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;
use Yii;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class MainAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        // '../themes/vuexy/app-assets/css/components.css',

        '../themes/vuexy/inicss.css',

        // <!-- BEGIN: Vendor CSS-->
        '../themes/vuexy/app-assets/vendors/css/vendors.min.css',
        '../themes/vuexy/app-assets/vendors/css/charts/apexcharts.css',
        '../themes/vuexy/app-assets/vendors/css/extensions/toastr.min.css',
        // <!-- END: Vendor CSS-->

        // <!-- BEGIN: Theme CSS-->
        '../themes/vuexy/app-assets/css/bootstrap.css',
        '../themes/vuexy/app-assets/css/bootstrap-extended.css',
        '../themes/vuexy/app-assets/css/colors.css',
        '../themes/vuexy/app-assets/css/components.css',
        '../themes/vuexy/app-assets/css/themes/dark-layout.css',
        '../themes/vuexy/app-assets/css/themes/bordered-layout.css',
        '../themes/vuexy/app-assets/css/themes/semi-dark-layout.css',

        // <!-- BEGIN: Page CSS-->
        '../themes/vuexy/app-assets/css/core/menu/menu-types/vertical-menu.css',
        '../themes/vuexy/app-assets/css/pages/dashboard-ecommerce.css',
        '../themes/vuexy/app-assets/css/plugins/charts/chart-apex.css',
        '../themes/vuexy/app-assets/css/plugins/extensions/ext-component-toastr.css',
        // <!-- END: Page CSS-->

        // <!-- BEGIN: Custom CSS-->
        '../themes/vuexy/assets/css/style.css',
        // <!-- END: Custom CSS-->
    ];
    public $js = [
        // <!-- BEGIN: Vendor JS-->
        '../themes/vuexy/app-assets/vendors/js/vendors.min.js',
        // <!-- BEGIN Vendor JS-->

        // <!-- BEGIN: Page Vendor JS-->
        '../themes/vuexy/app-assets/vendors/js/charts/apexcharts.min.js',
        '../themes/vuexy/app-assets/vendors/js/extensions/toastr.min.js',
        // <!-- END: Page Vendor JS-->

        // <!-- BEGIN: Theme JS-->
        '../themes/vuexy/app-assets/js/core/app-menu.js',
        '../themes/vuexy/app-assets/js/core/app.js',
        // <!-- END: Theme JS-->

        // <!-- BEGIN: Page JS-->
        '../themes/vuexy/app-assets/js/scripts/pages/dashboard-ecommerce.js',
        // <!-- END: Page JS-->
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap5\BootstrapAsset'
    ];
}
