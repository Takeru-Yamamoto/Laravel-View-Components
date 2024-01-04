<?php

namespace LaravelViewComponents;

use Illuminate\Support\ServiceProvider as Provider;

use Illuminate\Support\Facades\Blade;

/**
 * LaravelViewComponentsのServiceProvider
 * ViewComponentの登録や、パッケージに含まれるファイルの公開の設定を行う
 * 
 * @package LaravelViewComponents
 */
class ServiceProvider extends Provider
{
    /**
     * 読み込むViewのパス
     *
     * @var string
     */
    private string $loadViewsPath = __DIR__ . DIRECTORY_SEPARATOR . "resources" . DIRECTORY_SEPARATOR . "views";

    /**
     * publications配下を公開する際に使うルートパス
     *
     * @var string
     */
    private string $publicationsPath = __DIR__ . DIRECTORY_SEPARATOR . "publications";


    /**
     * アプリケーションのブート時に実行する
     * Viewの登録を行う
     * ViewComponentの登録を行う
     * パッケージに含まれるファイルの公開の設定を行う
     * 
     * @return void
     */
    public function boot(): void
    {
        // Viewの登録
        $this->loadViewsFrom($this->loadViewsPath, "components");

        // ViewComponentの登録
        Blade::componentNamespace("LaravelViewComponents\\ViewComponent", "components");

        // config配下の公開
        // 自作パッケージ共通タグ
        $this->publishes([
            $this->publicationsPath . DIRECTORY_SEPARATOR . "config" => config_path(),
        ], "publications");

        // このパッケージのみ
        $this->publishes([
            $this->publicationsPath . DIRECTORY_SEPARATOR . "config" => config_path(),
        ], "view-components");

        // lang配下の公開
        // 自作パッケージ共通タグ
        $this->publishes([
            $this->publicationsPath . DIRECTORY_SEPARATOR . "lang" => lang_path(),
        ], "publications");

        // このパッケージのみ
        $this->publishes([
            $this->publicationsPath . DIRECTORY_SEPARATOR . "lang" => lang_path(),
        ], "view-components");

        // resources配下の公開
        // 自作パッケージ共通タグ
        $this->publishes([
            $this->publicationsPath . DIRECTORY_SEPARATOR . "resources" => resource_path(),
        ], "publications");

        // このパッケージのみ
        $this->publishes([
            $this->publicationsPath . DIRECTORY_SEPARATOR . "resources" => resource_path(),
        ], "view-components");
    }
}
