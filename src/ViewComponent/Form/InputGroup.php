<?php

namespace LaravelViewComponents\ViewComponent\Form;

use LaravelViewComponents\ViewComponent\Form\Base\BaseFormViewComponent;

/**
 * form/input-group.blade.phpのViewComponent
 * フォームの項目をグループ化する
 * 
 * @package LaravelViewComponents\ViewComponent\Form
 */
class InputGroup extends BaseFormViewComponent
{
    public string $name;

    function __construct(
        string $name,
    ) {
        $this->name = $name;
    }
}
