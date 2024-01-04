<?php

namespace LaravelViewComponents\ViewComponent\Button;

use LaravelViewComponents\ViewComponent\Button\Base\BaseButtonViewComponent;

/**
 * button/delete.blade.phpのViewComponent
 * ViewにDelete Buttonを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Button
 */
class Delete extends BaseButtonViewComponent
{
    public int $id;

    public string $url;

    function __construct(
        int $id,
        string $url,
        string $addClass = "",
        string $buttonIcon = "",
        string $buttonText = "",
    ) {
        $this->id  = $id;
        $this->url = $url;

        parent::__construct($addClass, $buttonIcon, $buttonText);
    }

    protected function defaultButtonText(): string
    {
        return __("view-components.word.delete");
    }
}
