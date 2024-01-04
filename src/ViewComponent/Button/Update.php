<?php

namespace LaravelViewComponents\ViewComponent\Button;

use LaravelViewComponents\ViewComponent\Button\Base\TransitionButtonViewComponent;

/**
 * button/update.blade.phpのViewComponent
 * ViewにUpdate Buttonを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Button
 */
class Update extends TransitionButtonViewComponent
{
    protected function defaultButtonText(): string
    {
        return __("view-components.word.update");
    }
}
