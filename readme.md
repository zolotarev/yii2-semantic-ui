# Yii2 Semantic UI extension

[Semantic UI](http://semantic-ui.com) extension for [Yii2](http://www.yiiframework.com)

## Installation

### Composer

The preferred way to install this extension is through [Composer](http://getcomposer.org/).

Either run

```
php composer.phar require Zolotarev/yii2-semantic-ui "*"
```

or add

```
"Zolotarev/yii2-semantic-ui": "*"
```

to the require section of your ```composer.json```

## Usage

Add SemanticUICSSAsset to AppAsset:

```php
<?php

namespace backend\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [];
    public $js = [];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\web\JqueryAsset',
        'Zolotarev\yii\SemanticUI\assets\SemanticUICSSAsset'
    ];
}
```

Use Semantic UI widgets and elements. Standard Yii2 widgets also adopted.

You may replace yii2 standard widgets. Write in bootstrap.php:

```php
Yii::$container->set(\yii\grid\GridView::className(), \Zolotarev\yii\SemanticUI\widgets\GridView::className());
Yii::$container->set(\yii\widgets\ActiveForm::className(), \Zolotarev\yii\SemanticUI\widgets\ActiveForm::className());
Yii::$container->set(\yii\bootstrap\ActiveForm::className(), \Zolotarev\yii\SemanticUI\widgets\ActiveForm::className());
Yii::$container->set(\yii\widgets\Breadcrumbs::className(), \Zolotarev\yii\SemanticUI\collections\Breadcrumb::className());
Yii::$container->set(\yii\grid\CheckboxColumn::className(), \Zolotarev\yii\SemanticUI\widgets\CheckboxColumn::className());
```

Be very careful with it.

### Demo

[Demo site](http://yii2-semantic-ui.Zolotarev.pw)

### Work in progress

I need your feedback! I need your pull requests!

## Author

[Aleksandr Zolotarev](https://github.com/Zolotarev/), e-mail: [aleksandr@Zolotarev.me](mailto:aleksandr@Zolotarev.me)
