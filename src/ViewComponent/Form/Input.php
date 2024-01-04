<?php

namespace LaravelViewComponents\ViewComponent\Form;

use LaravelViewComponents\ViewComponent\Form\Base\BaseFormViewComponent;

/**
 * form/input.blade.phpのViewComponent
 * デザインを整えたinputを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Form
 */
class Input extends BaseFormViewComponent
{
    public string $name;

    public string $type;

    public mixed $value;

    public string $addClass;

    public bool $isReadonly;

    public bool $isDisabled;

    public bool $isAutoFocus;

    function __construct(
        string $name,
        string $type,
        mixed $value = null,
        string $addClass = "",
        bool $isReadonly = false,
        bool $isDisabled = false,
        bool $isAutoFocus = false,
    ) {
        $this->name        = $name;
        $this->type        = $type;
        $this->value       = $value;
        $this->addClass    = $addClass;
        $this->isReadonly  = $isReadonly;
        $this->isDisabled  = $isDisabled;
        $this->isAutoFocus = $isAutoFocus;
    }
}
