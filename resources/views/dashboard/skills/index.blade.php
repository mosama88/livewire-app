@extends('dashboard.layouts.master')
@section('title_dashboard', 'Skills')
@section('skills-active', 'active')
@section('dashboard-page', 'Skills')
@section('dashboard-pageDesc', 'Skill Data')


@section('content-dashbard')
    <div class="col-6 my-3">

        <div class="mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createSkillModal">
                <i class='bx bx-plus-medical'></i> Add New Skill
            </button>

            <!-- Modal -->
            @livewire('dashboard.skills.skills-create')
            <!-- END Modal -->

        </div>

        @livewire('dashboard.skills.skills-update')
        @livewire('dashboard.skills.skills-delete')

    </div>
    <!-- Basic Bootstrap Table -->
    <div class="card mb-4">
        @livewire('dashboard.skills.skills-table')
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
    </script>
@endsection
