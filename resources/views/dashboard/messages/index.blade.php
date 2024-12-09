@extends('dashboard.layouts.master')
@section('title_dashboard', 'Messages')
@section('messagess-active', 'active')
@section('dashboard-page', 'Messages')
@section('dashboard-pageDesc', 'Messages Data')


@section('content-dashbard')
    <div class="col-6 my-3">

        <div class="mt-3">

        </div>

        @livewire('dashboard.messages.messages-delete')
        @livewire('dashboard.messages.messages-show')

    </div>
    <!-- Basic Bootstrap Table -->
    <div class="card mb-4">
        @livewire('dashboard.messages.messages-table')
    </div>
    <!--End Basic Bootstrap Table / -->


@endsection
@section('js')
    <script>
        //to open and close modal
        // if Open will be close
        // if Close will be open


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
