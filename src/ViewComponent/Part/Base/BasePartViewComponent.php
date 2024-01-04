<?php

namespace LaravelViewComponents\ViewComponent\Part\Base;

use LaravelViewComponents\ViewComponent\Base\BaseViewComponent;

/**
 * Viewの各パーツのViewComponentの基底クラス
 * 
 * @package LaravelViewComponents\ViewComponent\Part\Base
 */
abstract class BasePartViewComponent extends BaseViewComponent
{
    public function getComponentName(): string
    {
        return "part." . parent::getComponentName();
    }
}
