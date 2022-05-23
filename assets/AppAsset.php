<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css',
        'css/styles.css',
        'css/header.css',
        'css/sidebar.css',
        'css/glob.css',
        'css/footer.css',
        'css/services.css',
        'css/steps.css',
        'css/splide.min.css',
        'css/animate.css'
    ];
    public $js = [
        'https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js',
        'https://unpkg.com/scrollbooster@3/dist/scrollbooster.min.js',
        'https://cdn.jsdelivr.net/jquery.marquee/1.4.0/jquery.marquee.min.js',
        'js/script.js',
        'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js',
        'js/m_wow.js',
        'https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
