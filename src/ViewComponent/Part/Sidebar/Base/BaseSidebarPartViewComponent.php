<?php

namespace LaravelViewComponents\ViewComponent\Part\Sidebar\Base;

use LaravelViewComponents\ViewComponent\Part\Base\BasePartViewComponent;

/**
 * Sidebarの各パーツのViewComponentの基底クラス
 * 
 * @package LaravelViewComponents\ViewComponent\Part\Sidebar\Base
 */
abstract class BaseSidebarPartViewComponent extends BasePartViewComponent
{
    public array $page;

    function __construct(array $page)
    {
        $this->page = $page;
    }

    public function getComponentName(): string
    {
        return str_replace("part.", "part.sidebar.", parent::getComponentName());
    }
}
