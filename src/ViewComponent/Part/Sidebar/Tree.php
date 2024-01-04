<?php

namespace LaravelViewComponents\ViewComponent\Part\Sidebar;

use LaravelViewComponents\ViewComponent\Part\Sidebar\Base\BaseSidebarPartViewComponent;

/**
 * part/sidebar/tree.blade.phpのViewComponent
 * Sidebarに項目をツリー構造で設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Part\Sidebar
 */
class Tree extends BaseSidebarPartViewComponent
{
    public string $navLinkClass;
    public string $navLinkIcon;
    public string $navLinkIconClass;
    public string $navLinkTitle;
    public string $navLinkTitleClass;

    public array $children;

    function __construct(array $page)
    {
        parent::__construct($page);

        $this->navLinkClass = isset($this->page["class"]) ? $this->page["class"] : "";

        $this->navLinkIconClass = isset($this->page["icon_class"]) ? $this->page["icon_class"] : "";
        $this->navLinkIcon      = isset($this->page["icon"]) ? $this->page["icon"] : "";

        $this->navLinkTitleClass = isset($this->page["title_class"]) ? $this->page["title_class"] : "";
        $this->navLinkTitle      = isset($this->page["title"]) ? __($this->page["title"]) : "";

        $this->children = isset($this->page["children"]) ? $this->page["children"] : [];
    }
}
