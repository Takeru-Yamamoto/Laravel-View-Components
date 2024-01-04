<?php

namespace LaravelViewComponents\ViewComponent\Common\Base;

use LaravelViewComponents\ViewComponent\Base\BaseViewComponent;

/**
 * commonディレクトリ配下のViewComponentの基底クラス
 * 
 * @package LaravelViewComponents\ViewComponent\Common\Base
 */
abstract class BaseCommonViewComponent extends BaseViewComponent
{
    public function getComponentName(): string
    {
        return "common." . parent::getComponentName();
    }
}
