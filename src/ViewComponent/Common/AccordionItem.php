<?php

namespace LaravelViewComponents\ViewComponent\Common;

use LaravelViewComponents\ViewComponent\Common\Base\BaseCommonViewComponent;

/**
 * common/accordion-item.blade.phpのViewComponent
 * アコーディオンメニューのアイテムを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Common
 */
class AccordionItem extends BaseCommonViewComponent
{
    public string $accordionType;
    public string $accordionTitle;

    function __construct(
        string $accordionType,
        string $accordionTitle,
    ) {
        $this->accordionType  = $accordionType;
        $this->accordionTitle = $accordionTitle;
    }
}
