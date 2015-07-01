<?php

namespace Zolotarev\yii\SemanticUI\widgets;

class GridView extends \yii\grid\GridView
{
    public $tableOptions = ['class' => 'ui table'];
    public $dataColumnClass = 'Zolotarev\yii\SemanticUI\widgets\DataColumn';
    public $pager = ['class' => 'Zolotarev\yii\SemanticUI\widgets\LinkPager'];
}
