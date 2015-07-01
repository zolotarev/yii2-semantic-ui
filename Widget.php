<?php

namespace Zelenin\yii\SemanticUI;

use Zelenin\yii\SemanticUI\assets\SemanticUIJSAsset;

class Widget extends \yii\base\Widget
{
    public $options = [];
    public $clientOptions = [];

    public function init()
    {
        parent::init();
        isset($this->options['id'])
            ? $this->setId($this->options['id'])
            : $this->options['id'] = $this->getId();
    }

    public function registerJsAsset()
    {
        SemanticUIJSAsset::register($this->getView());
    }
}
