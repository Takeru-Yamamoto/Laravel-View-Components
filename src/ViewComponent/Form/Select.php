<?php

namespace LaravelViewComponents\ViewComponent\Form;

use LaravelViewComponents\ViewComponent\Form\Base\BaseFormViewComponent;

/**
 * form/select.blade.phpのViewComponent
 * デザインを整えたselectを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Form
 */
class Select extends BaseFormViewComponent
{
    public string $name;

    public string $addClass;

    function __construct(
        string $name,
        string $addClass = "",
    ) {
        $this->name     = $name;
        $this->addClass = $addClass;
    }
}
