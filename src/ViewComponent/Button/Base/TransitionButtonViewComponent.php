<?php

namespace LaravelViewComponents\ViewComponent\Button\Base;

use LaravelViewComponents\ViewComponent\Button\Base\BaseButtonViewComponent;

/**
 * ページを遷移するボタンのViewComponentの基底クラス
 * 
 * @package LaravelViewComponents\ViewComponent\Button\Base
 */
abstract class TransitionButtonViewComponent extends BaseButtonViewComponent
{
    public string $url;

    function __construct(
        string $url,
        string $addClass = "",
        string $buttonText = "",
        string $buttonIcon = "",
    ) {
        $this->url = $url;

        parent::__construct($addClass, $buttonIcon, $buttonText);
    }
}
