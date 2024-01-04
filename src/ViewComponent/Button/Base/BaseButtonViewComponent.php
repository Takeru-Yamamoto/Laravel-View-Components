<?php

namespace LaravelViewComponents\ViewComponent\Button\Base;

use LaravelViewComponents\ViewComponent\Base\BaseViewComponent;

/**
 * ボタン関係のViewComponentの基底クラス
 * 
 * @package LaravelViewComponents\ViewComponent\Button\Base
 */
abstract class BaseButtonViewComponent extends BaseViewComponent
{
    public string $addClass;
    public string $buttonIcon;
    public string $buttonText;

    function __construct(
        string $addClass = "",
        string $buttonIcon = "",
        string $buttonText = "",
    ) {
        $this->addClass   = $addClass;
        $this->buttonIcon = $buttonIcon;
        $this->buttonText = empty($buttonText) ? $this->defaultButtonText() : $buttonText;
    }

    public function getComponentName(): string
    {
        return "button." . parent::getComponentName();
    }

    abstract protected function defaultButtonText(): string;
}
