<?php

namespace LaravelViewComponents\ViewComponent\Button;

use LaravelViewComponents\ViewComponent\Button\Base\SubmitButtonViewComponent;

/**
 * button/submit-create.blade.phpのViewComponent
 * ViewにFormをSubmitするCreate Buttonを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Button
 */
class SubmitCreate extends SubmitButtonViewComponent
{
    protected function defaultButtonText(): string
    {
        return __("view-components.word.create");
    }
}
