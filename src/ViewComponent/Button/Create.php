<?php

namespace LaravelViewComponents\ViewComponent\Button;

use LaravelViewComponents\ViewComponent\Button\Base\TransitionButtonViewComponent;

/**
 * button/create.blade.phpのViewComponent
 * ViewにCreate Buttonを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Button
 */
class Create extends TransitionButtonViewComponent
{
    protected function defaultButtonText(): string
    {
        return __("view-components.word.create");
    }
}
