@extends('admin.layout.master')

@section('content')
    <!--begin::App-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-column-fluid justify-content-center">
            <!--begin::Body-->
            <div
                class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center p-12">
                <!--begin::Card-->
                <div
                    class="bg-light d-flex flex-column align-items-stretch flex-center rounded-4 w-md-500px p-10 bg-opacity-75 shadow">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10">
                        <!--begin::Page-->
                        {{ $slot }}
                        <!--end::Page-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::App-->
@endsection
