<x-admin.auth-layout>
    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
          data-kt-redirect-url="{{ route('admin.dashboard') }}"
          action="{{ route('admin.login') }}">
        @csrf
        <!--begin::Heading-->
        <div class="text-center mb-11">
            <!--begin::Title-->
            <h1 class="text-dark fw-bolder mb-3">Bangladesh Smart Directory</h1>
            <!--end::Title-->
            <!--begin::Subtitle-->
            <div class="text-gray-600 fw-semibold fs-6">Sign In to your admin account</div>
            <!--end::Subtitle=-->
        </div>
        <!--begin::Heading-->
        <div id="liveAlertPlaceholder"></div>
        <!--begin::Input group=-->
        <div class="fv-row mb-3">
            <!--begin::Email-->
            <label for="email"></label>
            <input id="email" type="text" placeholder="Email" name="email" autocomplete="off"
                   class="form-control" value=""/>
            <!--end::Email-->
        </div>
        <!--end::Input group=-->
        <div class="fv-row mb-3">
            <!--begin::Password-->
            <label for="password"></label>
            <input type="password" id="password" placeholder="Password" name="password" autocomplete="off"
                   class="form-control"/>
            <!--end::Password-->
        </div>
        <!--end::Input group=-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
            <div></div>
            <!--begin::Link-->
            <a href="#" class="link-primary">Forgot Password ?</a>
            <!--end::Link-->
        </div>
        <!--end::Wrapper-->
        <!--begin::Submit button-->
        <div class="d-grid mb-10">
            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                <!--begin::Indicator label-->
                <span class="indicator-label">Sign In</span>
                <!--end::Indicator label-->
                <!--begin::Indicator progress-->
                <span class="indicator-progress">Please wait...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                <!--end::Indicator progress-->
            </button>
        </div>
        <!--end::Submit button-->
    </form>
    @push('style')
        <!--begin::Page bg image-->
        <style>
            body {
                background-image: url('{{asset('assets/media/auth/bg.jpg')}}');
            }

            [data-bs-theme="dark"] body {
                background-image: url('{{asset('assets/media/auth/bg4-dark.jpg')}}');
            }
        </style>
        <!--end::Page bg image-->
    @endpush
</x-admin.auth-layout>
