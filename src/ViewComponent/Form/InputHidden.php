<?php

namespace LaravelViewComponents\ViewComponent\Form;

use LaravelViewComponents\ViewComponent\Form\Base\BaseFormViewComponent;

/**
 * form/input-hidden.blade.phpのViewComponent
 * hiddenのinputを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Form
 */
class InputHidden extends BaseFormViewComponent
{
    public string $name;

    public string $type;

    public mixed $value;

    function __construct(
        string $name,
        string $type,
        mixed $value,
    ) {
        $this->name  = $name;
        $this->type  = $type;
        $this->value = $value;
    }
}
