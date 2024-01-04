<?php

namespace LaravelViewComponents\ViewComponent\Part;

use LaravelViewComponents\ViewComponent\Part\Base\BasePartViewComponent;

/**
 * part/navbar.blade.phpのViewComponent
 * Viewにナビゲーションバーを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Part
 */
class Navbar extends BasePartViewComponent
{
    /* view function user menu */
    public function isViewUserMenuHeader(): bool
    {
        return config("view-components.user_menu_header");
    }

    public function isViewUserMenuBody(): bool
    {
        return config("view-components.user_menu_body");
    }

    public function isViewUserMenuFooter(): bool
    {
        return config("view-components.user_menu_footer");
    }

    
    /* view function login/logout button */
    public function isViewLoginButton(): bool
    {
        return !isLoggedIn() && config("view-components.btn_login");
    }

    public function isViewLogoutButton(): bool
    {
        return isLoggedIn() && config("view-components.btn_logout");
    }
}
