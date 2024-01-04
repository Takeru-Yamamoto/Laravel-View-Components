<?php

namespace LaravelViewComponents\ViewComponent\Base;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

use Illuminate\Support\Facades\View as ViewFacade;

/**
 * ViewComponentの基底クラス
 * 
 * @package LaravelViewComponents\ViewComponent\Base
 */
abstract class BaseViewComponent extends Component
{
    public string $bodyClass = "sidebar-mini";

    public function render(): View|\Closure|string
    {
        return view("components::" . $this->getComponentName());
    }

    public function getComponentName(): string
    {
        return toKebab(className($this));
    }


    /* property function common */
    public function configSiteName(): string
    {
        return config("view-components.site_name");
    }

    public function configMetaDescription(): string
    {
        return config("view-components.meta_description");
    }

    public function configPages(): array
    {
        return config("view-components.pages");
    }

    public function configDefaultPrefix(): string
    {
        return config("view-components.default_prefix");
    }

    public function configPageTitle(): string
    {
        $pages = $this->configPages();
        $prefix = pathPrefix($this->configDefaultPrefix());
        $siteName = $this->configSiteName();

        return isset($pages[$prefix]) && isset($pages[$prefix]["title"]) ? __($pages[$prefix]["title"]) . " | " . $siteName : $siteName;
    }


    /* property function icon */
    public function configIconPath(): string
    {
        return config("view-components.view_icon") ? asset(config("view-components.icon_path")) : "";
    }

    public function configFaviconPath(): string
    {
        return empty(config("view-components.favicon_path")) ? "" : asset(config("view-components.favicon_path"));
    }


    /* view function */
    public function hasSection(string $sectionName): string
    {
        return ViewFacade::hasSection($sectionName);
    }
}
