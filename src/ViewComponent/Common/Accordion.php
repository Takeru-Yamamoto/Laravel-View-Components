<?php

namespace LaravelViewComponents\ViewComponent\Common;

use LaravelViewComponents\ViewComponent\Common\Base\BaseCommonViewComponent;

/**
 * common/accordion.blade.phpのViewComponent
 * Viewにアコーディオンメニューを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Common
 */
class Accordion extends BaseCommonViewComponent
{
    public string $accordionId;

    function __construct(
        string $accordionId
    ) {
        $this->accordionId = $accordionId;
    }
}
