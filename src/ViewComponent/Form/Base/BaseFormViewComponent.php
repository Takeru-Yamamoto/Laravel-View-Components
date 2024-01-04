<?php

namespace LaravelViewComponents\ViewComponent\Form\Base;

use LaravelViewComponents\ViewComponent\Base\BaseViewComponent;

/**
 * フォーム関係のViewComponentの基底クラス
 * 
 * @package LaravelViewComponents\ViewComponent\Form\Base
 */
abstract class BaseFormViewComponent extends BaseViewComponent
{
    public function getComponentName(): string
    {
        return "form." . parent::getComponentName();
    }
}
