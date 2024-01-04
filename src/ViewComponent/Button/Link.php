<?php

namespace LaravelViewComponents\ViewComponent\Button;

use LaravelViewComponents\ViewComponent\Button\Base\TransitionButtonViewComponent;

/**
 * button/link.blade.phpのViewComponent
 * ViewにLink Buttonを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Button
 */
class Link extends TransitionButtonViewComponent
{
    protected function defaultButtonText(): string
    {
        return __("view-components.word.link");
    }
}
