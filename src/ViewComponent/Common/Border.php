<?php

namespace LaravelViewComponents\ViewComponent\Common;

use LaravelViewComponents\ViewComponent\Common\Base\BaseCommonViewComponent;

/**
 * common/border.blade.phpのViewComponent
 * Viewにボーダーを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Common
 */
class Border extends BaseCommonViewComponent
{
    public int $margin;

    function __construct(int $margin = 3)
    {
        $this->margin = $margin;
    }
}
