<?php

namespace LaravelViewComponents\ViewComponent\Common;

use LaravelViewComponents\ViewComponent\Common\Base\BaseCommonViewComponent;

/**
 * common/tooltip.blade.phpのViewComponent
 * Viewにツールチップを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Common
 */
class Tooltip extends BaseCommonViewComponent
{
    public string $tooltipTitle;
    public string $tooltipOption;

    function __construct(
        string $tooltipTitle,
        string $tooltipOption = "",
    ) {
        $this->tooltipTitle  = $tooltipTitle;
        $this->tooltipOption = $tooltipOption;
    }
}
