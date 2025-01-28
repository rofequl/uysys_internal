<?php

namespace App\View\Components\Admin;

use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\View\Component;

class AuthLayout extends Component
{
    public function __construct()
    {
        // Init layout file
        app(config('settings.KT_THEME_BOOTSTRAP.auth'))->init();
    }

    public function render(): Application|View|Factory|Htmlable|string|\Closure
    {
        return view('admin.layout._auth');
    }
}
