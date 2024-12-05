@extends('dashboard.layouts.master')
@section('title_dashboard', 'Skills')
@section('skills-active', 'active')
@section('dashboard-page', 'Skills')
@section('dashboard-pageDesc', 'Skill Data')


@section('content-dashbard')

    <div class="card mb-4">


        @livewire('dashboard.skills.skills-table')


    </div>
    <!--/ Basic Bootstrap Table -->
@endsection
