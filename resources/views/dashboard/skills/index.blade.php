@extends('dashboard.layouts.master')
@section('skills-active', 'active')
@section('dashboard-page', 'Skills')
@section('dashboard-pageDesc', 'Skill Data')


@section('content-dashbard')
    <div class="row">
        <div class="col-xl">
            <div class="card mb-4">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <a href="{{ route('dashboard.skills') }}" type="button" class="btn btn-info">Edit <i
                                class='bx bx-edit-alt ml-2'></i></a>
                    </h5>
                    <small class="text-muted float-end">skills Website</small>
                </div>
                <div class="card-body">

                    <div class="table-responsive text-nowrap">

                        @livewire('dashboard.skills.skill')

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
