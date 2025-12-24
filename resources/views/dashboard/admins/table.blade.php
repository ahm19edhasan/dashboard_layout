<!--begin::Table-->
<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_customers_table">
    <!--begin::Table head-->
    <thead>
        <!--begin::Table row-->
        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">

            <th class="min-w-25px">#</th>
            <th class="min-w-125px">
                {{ __('lang.name') }}
            </th>
            <th class="min-w-125px">
                {{ __('lang.email') }}
            </th>
            <th class="min-w-125px">
                {{ __('lang.phone_number') }}
            </th>

            <th class="text-end min-w-70px">
                {{ __('lang.actions') }}
            </th>
        </tr>
        <!--end::Table row-->
    </thead>
    <!--end::Table head-->
    <!--begin::Table body-->
    <tbody class="fw-bold text-gray-600">
        @if ($admins->count() > 0)
            @foreach ($admins as $key => $admin)
                <tr>
                    <td>
                        <a href="#" class="text-gray-800 text-hover-primary mb-1">
                            1
                        </a>
                    </td>
                    <!--end::Key=-->

                    <td>
                        <span>
                            {{ 'Ahmed Hasan' }}
                        </span>
                    </td>

                    <!--begin::Name=-->
                    <td>
                        <span>
                            {{ 'ahmed@test.com' }}
                        </span>
                    </td>
                    <!--end::Name=-->
                    <!--begin::Email=-->
                    <td>
                        <span>
                            {{ '0590000000' }}
                        </span>
                    </td>
                    <!--end::Email=-->

                    <!--begin::Action=-->
                    <td class="text-end">
                        <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                            data-kt-menu-flip="top-end">
                            {{ __('lang.actions') }}
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
                            <span class="svg-icon svg-icon-5 m-0">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <polygon points="0 0 24 0 24 24 0 24" />
                                        <path
                                            d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z"
                                            fill="#000000" fill-rule="nonzero"
                                            transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                        <!--begin::Menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="{{ route('admin.edit', 1) }}" class="menu-link px-3">
                                    {{ __('lang.edit') }}
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                    data-bs-target="#adminDeleteModal-1">
                                    {{ __('lang.delete') }}
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>

                    </td>
                    <!--end::Action=-->
                </tr>

                <div class="modal fade" tabindex="-1" id="adminDeleteModal-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-danger">
                                    {{ __('lang.delete_patient') }}
                                </h5>

                                <!--begin::Close-->
                                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                                    aria-label="Close">
                                    <span class="svg-icon svg-icon-2x"></span>
                                </div>
                                <!--end::Close-->
                            </div>

                            <div class="modal-body">
                                <p>
                                    {{ __('lang.patient_modal_title', ['patient_name' => 'ahmed']) }}
                                </p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                                    {{ __('lang.close') }}
                                </button>
                                <button type="button" class="btn btn-danger adminDeleteBtn" data-id="1">
                                    {{ __('lang.delete') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <tr>
                <td class="text-danger text-center" colspan="7">
                    {{ __('lang.no_patients') }}
                </td>
            </tr>
        @endif


    </tbody>
    <!--end::Table body-->
</table>
<!--end::Table-->
