<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Auth\LoginPostRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function index(): Factory|View|Application
    {
        addJavascriptFile('assets/js/custom/authentication/admin-sign-in/general.js');

        return view('admin/pages/auth.login');
    }

    /**
     * @throws ValidationException
     */
    public function store(LoginPostRequest $request): RedirectResponse
    {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect()->intended('/admin/dashboard');
    }
}
