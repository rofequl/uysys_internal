<?php

namespace App\Core;

class Bootstrap
{
    // Init theme mode option from settings
    public static function init(): void
    {
        Bootstrap::initThemeDirection();
        Bootstrap::initLayout();
    }

    public static function initThemeDirection(): void
    {
        setDirection(config('settings.BSD_THEME_DIRECTION'));

        if (isRtlDirection()) {
            addHtmlAttribute('html', 'direction', 'rtl');
            addHtmlAttribute('html', 'dir', 'rtl');
            addHtmlAttribute('html', 'style', 'direction: rtl');
        }
    }

    public static function initLayout(): void
    {
        addHtmlAttribute('body', 'id', 'kt_app_body');
        addHtmlAttribute('body', 'data-kt-name', getName());
    }
}


