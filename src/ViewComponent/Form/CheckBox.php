<?php

namespace LaravelViewComponents\ViewComponent\Form;

use LaravelViewComponents\ViewComponent\Form\Base\BaseFormViewComponent;

/**
 * form/check-box.blade.phpのViewComponent
 * デザインを整えたcheckboxを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Form
 */
class CheckBox extends BaseFormViewComponent
{
    public string $name;

    public mixed $value;

    public bool $isChecked;

    function __construct(
        string $name,
        mixed $value = null,
        bool $isChecked = false,
    ) {
        $this->name      = $name;
        $this->value     = $value;
        $this->isChecked = $isChecked;
    }
}
