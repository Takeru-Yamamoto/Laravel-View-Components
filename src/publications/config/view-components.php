<?php

return [
    /**
     * 
     * Basic
     * 
     * 基本設定
     * 
     * site_name       : string サイト名。ログイン画面やサイドバー、titleタグに設定される
     * meta_description: string サイトにアクセスする際に使用されているデフォルトのURLプレフィックス
     * default_prefix  : string サイトにアクセスする際に使用されているデフォルトのURLプレフィックス
     */
    "site_name"        => env("APP_NAME", "Laravel CMS"),
    "meta_description" => env("META_DESCRIPTION", ""),
    "default_prefix"   => env("DEFAULT_PREFIX", ""),


    /**
     * Sidebar
     * 
     * サイドバー設定
     * 
     * pages => [
     *      (ページURLプレフィックス) => [
     *          Basic
     *              can  : サイドバーを表示する権限
     *              class: サイドバーに付与するクラス名
     * 
     *          Title
     *              title      : サイドバーで表示するページタイトル
     *              title_class: サイドバーで表示するページタイトルクラス
     * 
     *          URL
     *              link  : サイドバーで使用するURLリンク
     *              route : サイドバーで使用するURLのRoute
     *              params: routeで使用するパラメータ 配列の形で使用する
     * 
     *          Icon
     *              icon      : サイドバーで使用するFont Awesome Icon
     *              icon_class: サイドバーで使用するアイコンクラス
     * 
     *          Etc.
     *              children: サイドバーに表示する下部メニュー 配列の形で使用する
     *      ]
     * ]
     * 
     * 
     */
    "pages" => [],


    /**
     * User Menu
     * 
     * ユーザーメニュー設定
     * ページ右上に表示されるログイン中のユーザー名をクリックすると表示されるメニュー
     * 
     * user_menu_header: user_menu_header セッションを使用するかどうか
     * user_menu_body  : user_menu_body セッションを使用するかどうか
     * user_menu_footer: user_menu_footer セッションを使用するかどうか
     * 
     * btn_login : 未ログイン時にユーザーメニューのフッターにログインボタンを表示するかどうか 
     * btn_logout: ログイン時にユーザーメニューのフッターにログアウトボタンを表示するかどうか
     * 
     */
    "user_menu_header" => env("USER_MENU_HEADER", false),
    "user_menu_body"   => env("USER_MENU_BODY", false),
    "user_menu_footer" => env("USER_MENU_FOOTER", false),

    "btn_login"  => env("BTN_LOGIN", true),
    "btn_logout" => env("BTN_LOGOUT", true),


    /**
     * Icon
     * 
     * view_icon   : bool ログイン画面やサイドバーなどにアイコンを表示するかどうか
     * icon_path   : string 表示するアイコンのパス。asset(config("view-components.icon_path"))
     * favicon_path: string 表示するfaviconのパス。asset(config("view-components.favicon_path"))
     * 
     */
    "view_icon"    => env("VIEW_ICON", false),
    "icon_path"    => env("ICON_PATH", ""),
    "favicon_path" => env("FAVICON_PATH", ""),

    /**
     * Footer
     * 
     * page_footer           : bool サイトのフッターを表示するかどうか
     * copyright_holder_name : string サイトの著作権者名
     * first_publication_year: int 著作権発生年
     * 
     */
    "page_footer"            => env("PAGE_FOOTER", false),
    "copyright_holder_name"  => env("COPYRIGHT_HOLDER_NAME", ""),
    "first_publication_year" => env("FIRST_PUBLICATION_YEAR", 0),
];
