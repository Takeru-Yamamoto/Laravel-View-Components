<?php

namespace LaravelViewComponents\ViewComponent\Button;

use LaravelViewComponents\ViewComponent\Button\Base\SubmitButtonViewComponent;

/**
 * button/submit-update.blade.phpのViewComponent
 * ViewにFormをSubmitするSearch Buttonを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Button
 */
class SubmitUpdate extends SubmitButtonViewComponent
{
    protected function defaultButtonText(): string
    {
        return __("view-components.word.update");
    }
}
