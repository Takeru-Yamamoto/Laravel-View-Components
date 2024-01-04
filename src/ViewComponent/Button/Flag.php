<?php

namespace LaravelViewComponents\ViewComponent\Button;

use LaravelViewComponents\ViewComponent\Button\Base\BaseButtonViewComponent;

/**
 * button/flag.blade.phpのViewComponent
 * ViewにisValidを表すボタンを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Button
 */
class Flag extends BaseButtonViewComponent
{
    public int $id;
    public string $url;
    public bool $isValid;
    public string $buttonColor;

    function __construct(
        int $id,
        string $url,
        bool $isValid,
        string $addClass = "",
        string $buttonIcon = "",
    ) {
        $this->id          = $id;
        $this->url         = $url;
        $this->isValid     = $isValid;
        $this->buttonColor = $isValid ? "btn-light" : "btn-secondary";

        parent::__construct($addClass, $buttonIcon);
    }

    protected function defaultButtonText(): string
    {
        return $this->isValid ? __("view-components.word.valid") : __("view-components.word.invalid");
    }
}
