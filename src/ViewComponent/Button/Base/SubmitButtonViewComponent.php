<?php

namespace LaravelViewComponents\ViewComponent\Button\Base;

use LaravelViewComponents\ViewComponent\Button\Base\BaseButtonViewComponent;

/**
 * フォームを送信するボタンのViewComponentの基底クラス
 * 
 * @package LaravelViewComponents\ViewComponent\Button\Base
 */
abstract class SubmitButtonViewComponent extends BaseButtonViewComponent
{
    public string $formId;

    function __construct(
        string $formId,
        string $addClass = "",
        string $buttonText = "",
        string $buttonIcon = "",
    ) {
        $this->formId = $formId;

        parent::__construct($addClass, $buttonIcon, $buttonText);
    }
}
