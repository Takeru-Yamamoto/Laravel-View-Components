<?php

namespace LaravelViewComponents\ViewComponent\Part;

use LaravelViewComponents\ViewComponent\Part\Base\BasePartViewComponent;

/**
 * part/footer.blade.phpのViewComponent
 * Viewにフッターを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Part
 */
class Footer extends BasePartViewComponent
{
    /* property function footer */
    public function isViewFooter(): bool
    {
        return config("view-components.page_footer");
    }

    public function hasFooterSection(): bool
    {
        return $this->hasSection("footer");
    }

    public function footerText(): string
    {
        $firstPublicationYear = config("view-components.first_publication_year");
        $copyrightHolderName  = config("view-components.copyright_holder_name");
        $year = date("Y");

        $footerText = "© " . $firstPublicationYear;
        if ($year !== $firstPublicationYear) $footerText .=  "-" . $year;
        $footerText .=  " " . $copyrightHolderName;

        return $footerText;
    }
}
