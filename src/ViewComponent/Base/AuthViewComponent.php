<?php

namespace LaravelViewComponents\ViewComponent\Base;

use LaravelViewComponents\ViewComponent\Base\BaseViewComponent;

/**
 * 認証系のViewComponentの基底クラス
 * 
 * @package LaravelViewComponents\ViewComponent\Base
 */
abstract class AuthViewComponent extends BaseViewComponent
{
    public string $bodyClass = "login-page";
}
