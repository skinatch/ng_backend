<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        
        'css/bootstrap.min.css',
        'css/animate.css',
        'css/flaticon.css',
        'css/font-awesome.min.css',
        'css/magnific-popup.css',
        'css/nice-select.css',
        'css/owl.carousel.min.css',
        'css/site.css',
        'css/slicknav.css',
        // 'css/slick.css',
        'css/style.css',
        // 'css/style.map',
        'css/theme-default.css',
        // 'css/theme-default.map',
        // 'css/themify-icons.css',
        'css/login.css', 
        'css/signup.css', 
        // 'css/style.map', 
        'css/style.css',  


        /* FontAwesome */
        // 'fontawesome5/css/brands.min.css', 
        // 'fontawesome5/css/solid.min.css', 
        // 'fontawesome5/css/regular.min.css', 
        // 'fontawesome5/css/brands.min.css', 
        // 'fontawesome5/css/brands.css', 
        // 'fontawesome5/css/solid.css', 

        // 'fontawesome5/css/regular.css',  
        // 'fontawesome5/css/svg-with-js.min.css',  
        // 'fontawesome5/css/svg-with-js.css',  
        // 'fontawesome5/css/v4-shims.min.css',  
        // 'fontawesome5/css/v4-shims.css',  

        'fontawesome5/css/fontawesome.min.css',
        // 'fontawesome5/css/all.min..css',
        'fontawesome5/css/fontawesome.css',
        'fontawesome5/css/all.css',
    


    ];
    public $js = [
        
        "js/vendor/modernizr-3.5.0.min.js",
       
        "js/popper.min.js",
        "js/bootstrap.min.js",
        "js/owl.carousel.min.js",
        "js/isotope.pkgd.min.js",
        "js/ajax-form.js",
        "js/waypoints.min.js",
        "js/jquery.counterup.min.js",
        "js/imagesloaded.pkgd.min.js",
        "js/scrollIt.js",
        "js/jquery.scrollUp.min.js",
        "js/wow.min.js",
        "js/nice-select.min.js",
        "js/jquery.slicknav.min.js",
        "js/jquery.magnific-popup.min.js",
        "js/plugins.js",

        "js/contact.js",
        "js/jquery.ajaxchimp.min.js",
        "js/jquery.form.js",
        "js/jquery.validate.min.js",
        "js/mail-script.js",


        "js/jquery.steps.js",

        /* bootbox */
        // "js/bootbox.locales.min.js", 
        // "js/bootbox.locales.js",
        "js/bootbox.min.js", 
        "js/bootbox.all.min.js",
        "js/bootbox.js",
        "js/bootbox.all.js",

        /* FontAwesome */
        // "fontawesome5/js/conflict-detection.min.js",
        // "fontawesome5/js/v4-shims.min.js",
        // "fontawesome5/js/v4-shims.js",
        // "fontawesome5/js/conflict-detection.js",
        // "fontawesome5/js/fontawesome.min.js",
        // "fontawesome5/js/fontawesome.js",
        // "fontawesome5/js/regular.min.js", 
        // "fontawesome5/js/regular.js",
        // "fontawesome5/js/brands.min.js",
        // "fontawesome5/js/brands.js",
        // "fontawesome5/js/solid.min.js",
        // "fontawesome5/js/solid.js",
        "fontawesome5/js/all.min.js",
        "fontawesome5/js/all.js",

        "js/main.js",


        /* Pdf View */
        "js/jquery.gdocsviewer.js",
        "js/jquery.gdocsviewer.min.js",

        /* Documentos públicos PQRS */
        "js/publicDocuments.js",


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
