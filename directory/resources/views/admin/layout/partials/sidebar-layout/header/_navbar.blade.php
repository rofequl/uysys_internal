<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">
    <!--begin::Theme mode-->
    <div class="app-navbar-item ms-1 ms-md-4">
        <!--begin::Menu toggle-->
        <a href="#"
           class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px"
           data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
           data-kt-menu-placement="bottom-end">
            <i class="ki-outline ki-night-day theme-light-show fs-1"></i>
            <i class="ki-outline ki-moon theme-dark-show fs-1"></i>
        </a>
        <!--begin::Menu toggle-->
        <!--begin::Menu-->
        <div
            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
            data-kt-menu="true" data-kt-element="theme-mode-menu">
            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-outline ki-night-day fs-2"></i>
												</span>
                    <span class="menu-title">Light</span>
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-outline ki-moon fs-2"></i>
												</span>
                    <span class="menu-title">Dark</span>
                </a>
            </div>
            <!--end::Menu item-->
            <!--begin::Menu item-->
            <div class="menu-item px-3 my-0">
                <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<i class="ki-outline ki-screen fs-2"></i>
												</span>
                    <span class="menu-title">System</span>
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Theme mode-->
    <!--begin::User menu-->
    <div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-35px"
             data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
             data-kt-menu-placement="bottom-end">
            @if(Auth::guard('admin')->user()->profile_photo_url)
                <img src="{{ \Auth::guard('admin')->user()->profile_photo_url }}" class="rounded-3" alt="user"/>
            @else
                <div
                    class="symbol-label fs-3 {{ app(\App\Actions\GetThemeType::class)->handle('bg-light-? text-?', Auth::guard('admin')->user()->name) }}">
                    {{ substr(Auth::guard('admin')->user()->name, 0, 1) }}
                </div>
            @endif
        </div>
        @include('admin.partials.menus._user-account-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
    <!--begin::Header menu toggle-->
    <div class="app-navbar-item d-lg-none ms-2 me-n2" title="Show header menu">
        <div class="btn btn-flex btn-icon btn-active-color-primary w-30px h-30px"
             id="kt_app_header_menu_toggle">
            <i class="ki-outline ki-element-4 fs-1"></i>
        </div>
    </div>
    <!--end::Header menu toggle-->
    <!--begin::Aside toggle-->
    <!--end::Header menu toggle-->
</div>
<!--end::Navbar-->
