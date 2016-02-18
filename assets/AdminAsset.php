<?php

 namespace app\assets;

 use yii\web\AssetBundle;

 class AdminAsset extends AssetBundle{
 	
 	public $basePath = "@webroot";
 	public $baseUrl = "@web";
    public $css = [
         'adminassets/css/sb-admin.css',
         'adminassets/css/plugins/morris.css',
         'adminassets/css/font-awesome/css/font-awesome.min.css'
    ];
    public $js = [
         'adminassets/js/plugins/morris/raphael.min.js',
         'adminassets/js/plugins/morris/morris.min.js',
         'adminassets/js/plugins/morris/morris-data.js'
    ];
    public $depends = [
         'yii\web\YiiAsset',
         'yii\bootstrap\BootstrapAsset'
    ];
 }

?>