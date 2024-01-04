<?php

namespace LaravelViewComponents\ViewComponent\Form;

use LaravelViewComponents\ViewComponent\Form\Base\BaseFormViewComponent;

/**
 * form/radio-button.blade.phpのViewComponent
 * デザインを整えたradiobuttonを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Form
 */
class RadioButton extends BaseFormViewComponent
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
