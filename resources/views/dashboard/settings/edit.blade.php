@extends('dashboard.layouts.master')
@section('settings-active', 'active')
@section('dashboard-page', 'Settings')
@section('dashboard-pageDesc', 'Edit Data')


@section('content-dashbard')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Edit Data Setting</h5>
                    <small class="text-muted float-end">Settings Website</small>
                </div>
                <div class="card-body">



                    @livewire('dashboard.settings.update-settings')


                </div>
            </div>
        </div>
    </div>
@endsection
