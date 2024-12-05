<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->

<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  
  @include('dashboard.layouts.head')

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

    
        @include('dashboard.layouts.sidebar')


        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

       
          @include('dashboard.layouts.navbar')

          <!-- / Navbar -->

            <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
    
          @if (Route::is('dashboard.index'))
@else
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">@yield('dashboard-page') /</span> @yield('dashboard-pageDesc')</h4>
@endif


@yield('content-dashbard')









            </div>
            <!-- / Content -->

            <!-- Footer -->
          

            @include('dashboard.layouts.footer')


            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
</div>
    <!-- / Layout wrapper -->

    <div class="buy-now">
      <a
        href="{{ url('/') }}"
      target="_blank" class="btn btn-danger btn-buy-now">Got To Website</a>
    </div>

    @include('dashboard.layouts.scripts')
   