<?php
namespace frontend\assets;

use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{
    public $basePath = "@webroot";
    public $baseUrl = "@web";
    public $css = [
        'css/main.css',
        'css/reset.css'
    ];
	  public $js = [
		    'js/index.js',
		    'js/modal.js',
	  ];
	  public $img = [
		    'favicon' =>  'favicon.ico',
    ];
	  public $depends = [
	  ];
}
