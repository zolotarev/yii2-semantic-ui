<?php

namespace Zolotarev\yii\SemanticUI\assets;

use Yii;
use yii\web\AssetBundle;

class SemanticUIJSAsset extends AssetBundle
{
    public $sourcePath = '@vendor/bower/semantic/dist';

    public $depends = [
        'yii\web\JqueryAsset',
        'Zolotarev\yii\SemanticUI\assets\SemanticUICSSAsset'
    ];

    public function init()
    {
        $postfix = YII_DEBUG ? '' : '.min';
        $this->js[] = 'semantic' . $postfix . '.js';

        parent::init();
    }
}
