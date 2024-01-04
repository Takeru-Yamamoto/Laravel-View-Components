<?php

namespace LaravelViewComponents\ViewComponent\Card\Base;

use LaravelViewComponents\ViewComponent\Base\BaseViewComponent;

/**
 * カード関係のViewComponentの基底クラス
 * 
 * @package LaravelViewComponents\ViewComponent\Card\Base
 */
abstract class BaseCardViewComponent extends BaseViewComponent
{
    public function getComponentName(): string
    {
        return "card." . parent::getComponentName();
    }
}
