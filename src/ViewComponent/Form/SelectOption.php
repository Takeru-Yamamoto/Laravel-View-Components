<?php

namespace LaravelViewComponents\ViewComponent\Form;

use LaravelViewComponents\ViewComponent\Form\Base\BaseFormViewComponent;

/**
 * form/select-option.blade.phpのViewComponent
 * selectのoptionを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Form
 */
class SelectOption extends BaseFormViewComponent
{
    public mixed $value;

    public bool $isSelected;

    function __construct(
        mixed $value     = null,
        bool $isSelected = false,
    ) {
        $this->value      = $value;
        $this->isSelected = $isSelected;
    }
}
