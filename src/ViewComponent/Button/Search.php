<?php

namespace LaravelViewComponents\ViewComponent\Button;

use LaravelViewComponents\ViewComponent\Button\Base\TransitionButtonViewComponent;

/**
 * button/search.blade.phpのViewComponent
 * ViewにSearch Buttonを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Button
 */
class Search extends TransitionButtonViewComponent
{
    protected function defaultButtonText(): string
    {
        return __("view-components.word.search");
    }
}
