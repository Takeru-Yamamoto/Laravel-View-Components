<?php

namespace LaravelViewComponents\ViewComponent\Form;

use LaravelViewComponents\ViewComponent\Form\Base\BaseFormViewComponent;

/**
 * form/input-file.blade.phpのViewComponent
 * fileのinputを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Form
 */
class InputFile extends BaseFormViewComponent
{
    public string $name;

    public string $type;

    public bool $isMultiple;

    function __construct(
        string $name,
        string $type,
        bool $isMultiple = false
    ) {
        $this->name       = $name;
        $this->type       = $type;
        $this->isMultiple = $isMultiple;
    }
}
