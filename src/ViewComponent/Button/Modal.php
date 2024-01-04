<?php

namespace LaravelViewComponents\ViewComponent\Button;

use LaravelViewComponents\ViewComponent\Button\Base\BaseButtonViewComponent;

/**
 * button/modal.blade.phpのViewComponent
 * ViewにModalを表示するButtonを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Button
 */
class Modal extends BaseButtonViewComponent
{
    public string $modalId;

    function __construct(
        string $modalId,
        string $addClass = "",
        string $buttonIcon = "",
        string $buttonText = "",
    ) {
        $this->modalId = $modalId;

        parent::__construct($addClass, $buttonIcon, $buttonText);
    }

    protected function defaultButtonText(): string
    {
        return __("view-components.word.show_modal");
    }
}
