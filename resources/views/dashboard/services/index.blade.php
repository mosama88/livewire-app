@extends('dashboard.layouts.master')
@section('title_dashboard', 'Service')
@section('services-active', 'active')
@section('dashboard-page', 'Service')
@section('dashboard-pageDesc', 'Service Data')


@section('content-dashbard')
    <div class="col-6 my-3">

        <div class="mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createSkillModal">
                <i class='bx bx-plus-medical'></i> Add New Service
            </button>

            <!-- Modal -->
            @livewire('dashboard.services.service-create')
            <!-- END Modal -->

        </div>

        @livewire('dashboard.services.service-update')
        @livewire('dashboard.services.service-delete')
        @livewire('dashboard.services.service-show')

    </div>
    <!-- Basic Bootstrap Table -->
    <div class="card mb-4">
        @livewire('dashboard.services.service-table')
    </div>
    <!--End Basic Bootstrap Table / -->


@endsection
@section('js')
    <script>
        //to open and close modal
        // if Open will be close
        // if Close will be open
        window.addEventListener('createModalToggle', event => {
            $("#createSkillModal").modal("toggle");
        });

        //to open and close modal
        window.addEventListener('editModalToggle', event => {
            $("#editSkillModal").modal("toggle");
        });

        //to open and close modal
        window.addEventListener('deleteModalToggle', event => {
            $("#deleteSkillModal").modal("toggle");
        });
        //to open and close modal
        window.addEventListener('showModalToggle', event => {
            $("#showSkillModal").modal("toggle");
        });
    </script>
@endsection
