<?php

 namespace app\assets;

 use yii\web\AssetBundle;

 class LoginAsset extends AssetBundle{
    public $basePath = "@webroot";
    public $baseUrl = "@web";
    public $css = [
        'loginassets/css/font-awesome/css/font-awesome.min.css',
        'loginassets/css/form-elements.css',
        'loginassets/css/style.css'
    ];
    public $js = [
        'loginassets/js/jquery.backstretch.min.js',
        'loginassets/js/scripts.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset'
    ];
 }
 
?>