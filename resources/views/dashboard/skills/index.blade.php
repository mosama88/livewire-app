@extends('dashboard.layouts.master')
@section('title_dashboard', 'Skills')
@section('skills-active', 'active')
@section('dashboard-page', 'Skills')
@section('dashboard-pageDesc', 'Skill Data')


@section('content-dashbard')
    <div class="col-6 my-3">

        <div class="mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                <i class='bx bx-plus-medical'></i> Add New Skill
            </button>

            <!-- Modal -->


            @livewire('dashboard.skills.skills-create')

            <!-- END Modal -->

        </div>
    </div>
    <div class="card mb-4">

        @livewire('dashboard.skills.skills-table')


    </div>
    <!--/ Basic Bootstrap Table -->
@endsection
