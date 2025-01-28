<!--begin::Logo-->
<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
    <!--begin::Logo image-->
    <a href="{{route('admin.dashboard')}}">
        <img alt="Logo" src="{{asset('assets/media/logos/default.svg')}}"
             class="h-25px app-sidebar-logo-default theme-light-show"/>
        <img alt="Logo" src="{{asset('assets/media/logos/default-dark.svg')}}"
             class="h-25px app-sidebar-logo-default theme-dark-show"/>
        <img alt="Logo" src="{{asset('assets/media/logos/default-small.svg')}}"
             class="h-20px app-sidebar-logo-minimize"/>
    </a>
    <!--end::Logo image-->
    <!--begin::Sidebar toggle-->
    <div id="kt_app_sidebar_toggle"
         class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate"
         data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
         data-kt-toggle-name="app-sidebar-minimize">
        <i class="ki-outline ki-black-left-line fs-3 rotate-180"></i>
    </div>
    <!--end::Sidebar toggle-->
</div>
<!--end::Logo-->
