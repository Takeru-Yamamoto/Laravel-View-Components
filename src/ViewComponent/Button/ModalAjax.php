<?php

namespace LaravelViewComponents\ViewComponent\Button;

use LaravelViewComponents\ViewComponent\Button\Base\BaseButtonViewComponent;

/**
 * button/modal-ajax.blade.phpのViewComponent
 * ViewにAjaxを用いて取得したModalを表示するButtonを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Button
 */
class ModalAjax extends BaseButtonViewComponent
{
    public int $id;
    public string $modalId;
    public string $url;
    public string $type;

    function __construct(
        int $id,
        string $modalId,
        string $url,
        string $type,
        string $addClass = "",
        string $buttonIcon = "",
        string $buttonText = "",
    ) {
        $this->id      = $id;
        $this->modalId = $modalId;
        $this->url     = $url;
        $this->type    = $type;

        parent::__construct($addClass, $buttonIcon, $buttonText);
    }

    protected function defaultButtonText(): string
    {
        return __("view-components.word.show_modal");
    }
}
