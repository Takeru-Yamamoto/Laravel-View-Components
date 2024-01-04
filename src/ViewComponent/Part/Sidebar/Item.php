<?php

namespace LaravelViewComponents\ViewComponent\Part\Sidebar;

use LaravelViewComponents\ViewComponent\Part\Sidebar\Base\BaseSidebarPartViewComponent;

/**
 * part/sidebar/item.blade.phpのViewComponent
 * Sidebarに表示する項目
 * 条件によって表示方法を変える
 * 
 * @package LaravelViewComponents\ViewComponent\Part\Sidebar
 */
class Item extends BaseSidebarPartViewComponent
{
    /* view function sidebar item */
    public function isUserCan(): bool
    {
        return !isset($this->page["can"]) || (isLoggedIn() && userCan($this->page["can"]));
    }

    public function hasChildren(): bool
    {
        return isset($this->page["children"]);
    }
}
