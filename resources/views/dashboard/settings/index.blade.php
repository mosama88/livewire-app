@extends('dashboard.layouts.master')
@section('title_dashboard', 'Settings')
@section('settings-active', 'active')
@section('dashboard-page', 'Settings')
@section('dashboard-pageDesc', 'Setting Data')


@section('content-dashbard')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <a href="{{ route('dashboard.settings.edit') }}" type="button" class="btn btn-info">Edit <i
                                class='bx bx-edit-alt ml-2'></i></a>
                    </h5>
                    <small class="text-muted float-end">Settings Website</small>
                </div>
                <div class="card-body">

                    <div class="table-responsive text-nowrap">

                        @if (!empty($data) && isset($data))
                            <table class="table table-bordered">
                                <tr>
                                    <td class="wd-500 table-light">Name</td>
                                    <td> {{ $data['name'] }}</td>
                                </tr>
                                <tr>
                                    <td class="wd-500 table-light">Phone</td>
                                    <td> {{ $data['phone'] }}</td>
                                </tr>
                                <tr>
                                    <td class="wd-500 table-light">Address</td>
                                    <td> {{ $data['address'] }}</td>
                                </tr>
                                <tr>
                                    <td class="wd-500 table-light">Email</td>
                                    <td> {{ $data['email'] }}</td>
                                </tr>
                                <tr>
                                    <td class="wd-500 table-light">Facebook</td>
                                    <td> {{ $data['facebook'] }}</td>
                                </tr>
                                <tr>
                                    <td class="wd-500 table-light">Twitter</td>
                                    <td> {{ $data['twitter'] }}</td>
                                </tr>
                                <tr>
                                    <td class="wd-500 table-light">Linkedin</td>
                                    <td> {{ $data['linkedin'] }}</td>
                                </tr>
                                <tr>
                                    <td class="wd-500 table-light">Instgram</td>
                                    <td> {{ $data['instgram'] }}</td>
                                </tr>
                            </table>
                        @else
                            <div class="alert alert-warning alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
                                لا توجد بيانات لعرضها!!
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
