@extends('dashboard.layouts.master')
@section('title_dashboard', 'Subscribers')
@section('subscribers-active', 'active')
@section('dashboard-page', 'Subscribers')
@section('dashboard-pageDesc', 'Subscribers Data')


@section('content-dashbard')
    <div class="col-6 my-3">

        @livewire('dashboard.subscribers.subscribers-delete')
        @livewire('dashboard.subscribers.subscribers-show')

    </div>
    <!-- Basic Bootstrap Table -->
    <div class="card mb-4">
        @livewire('dashboard.subscribers.subscribers-table')
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
            $("#showSubscriberModal").modal("toggle");
        });
    </script>
@endsection
