<?php

namespace Zolotarev\yii\SemanticUI\modules;

use Yii;
use yii\helpers\Html;

class Radio extends Checkbox
{
    public $type = self::TYPE_RADIO;
    const TYPE_RADIO = 'radio';

    public function renderInput()
    {
        return $this->hasModel()
            ? Html::activeRadio($this->model, $this->attribute, $this->inputOptions)
            : Html::radio($this->name, $this->checked, $this->inputOptions);
    }
}
