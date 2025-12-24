<x-dashboard-layout title="{{ __('lang.add_patient') }}" subTitle="{{ __('lang.create') }}">
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <!--begin::Container-->
            <div id="kt_content_container" class="container">
                <!--begin::Card-->
                <div class="card">
                    <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                <span class="">
                                    {{ __('lang.add_patient') }}
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                    </div>
                    <div class="card-body pt-0">
                        <form action="{{ route('admin.store') }}" method="POST">
                            @csrf

                            <div class="row">
                                <div class="col-xl-6 col-md-12 col-sm-12">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">
                                            {{ __('lang.first_name') }}
                                        </label>
                                        <input type="text" name="first_name" value="{{ old('first_name') }}"
                                            class="form-control form-control-solid @error('first_name') is-invalid @enderror"
                                            placeholder="Enter Name" />
                                        @error('first_name')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-12 col-sm-12">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">
                                            {{ __('lang.last_name') }}
                                        </label>
                                        <input type="text" name="last_name" value="{{ old('last_name') }}"
                                            class="form-control form-control-solid @error('last_name') is-invalid @enderror"
                                            placeholder="Enter Name" />
                                        @error('last_name')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-12 col-sm-12">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">
                                            {{ __('lang.email') }}
                                        </label>
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control form-control-solid @error('email') is-invalid @enderror"
                                            placeholder="{{ __('lang.email') }}" />
                                        @error('email')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-12 col-sm-12">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">
                                            {{ __('lang.phone_number') }}
                                        </label>
                                        <input type="text" name="phone_number" value="{{ old('phone_number') }}"
                                            class="form-control form-control-solid @error('phone_number') is-invalid @enderror"
                                            placeholder="{{ __('lang.phone_number') }}" />
                                        @error('phone_number')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6 col-sm-12">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">
                                            {{ __('lang.roles') }}
                                        </label>
                                        <div class="form-floating">
                                            <select class="form-select" id="roles"
                                                aria-label="Floating label select example" name="role">
                                                <option selected>
                                                    {{ __('lang.roles') }}
                                                </option>
                                                {{-- @foreach ($roles as $role) --}}
                                                <option value="1">
                                                    {{ 'Admin' }}
                                                </option>
                                                {{-- @endforeach --}}
                                            </select>
                                            <label for="roles">{{ __('lang.roles') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-12 col-sm-12">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">
                                            {{ __('lang.password') }}
                                        </label>
                                        <input type="password" name="password"
                                            class="form-control form-control-solid @error('password') is-invalid @enderror"
                                            placeholder="Enter Password" />
                                        @error('password')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-12 col-sm-12">
                                    <div class="mb-10">
                                        <label for="exampleFormControlInput1" class="required form-label">
                                            {{ __('lang.confirm_password') }}
                                        </label>
                                        <input type="password" name="password_confirmation"
                                            class="form-control form-control-solid @error('password_confirmation') is-invalid @enderror"
                                            placeholder="Confirm Password" />
                                        @error('password_confirmation')
                                            <span class="text-danger">
                                                {{ $message }}
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-12 d-flex gap-2 justify-content-start">
                                    <button type="submit" class="btn btn-success">
                                        Submit
                                    </button>
                                    <a href="{{ route('admin.index') }}" class="btn btn-secondary">
                                        Back
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>
