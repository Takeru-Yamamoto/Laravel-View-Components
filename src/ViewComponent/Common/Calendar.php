<?php

namespace LaravelViewComponents\ViewComponent\Common;

use LaravelViewComponents\ViewComponent\Common\Base\BaseCommonViewComponent;

/**
 * common/calendar.blade.phpのViewComponent
 * Viewにカレンダーを設置する
 * 
 * @package LaravelViewComponents\ViewComponent\Common
 */
class Calendar extends BaseCommonViewComponent
{
    public string $createFormUrl;

    public string $createFormUrlType;

    public string $updateFormUrl;

    public string $updateFormUrlType;

    public string $fetchUrl;

    public string $fetchUrlType;

    function __construct(
        string $createFormUrl,
        string $createFormUrlType,
        string $updateFormUrl,
        string $updateFormUrlType,
        string $fetchUrl,
        string $fetchUrlType
    ) {
        $this->createFormUrl     = $createFormUrl;
        $this->createFormUrlType = $createFormUrlType;
        $this->updateFormUrl     = $updateFormUrl;
        $this->updateFormUrlType = $updateFormUrlType;
        $this->fetchUrl          = $fetchUrl;
        $this->fetchUrlType      = $fetchUrlType;
    }
}
