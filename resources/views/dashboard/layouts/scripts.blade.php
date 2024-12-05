 <!-- Core JS -->
 <!-- build:js assets/vendor/js/core.js -->
 <script src="{{ asset('dashboard') }}/assets/vendor/libs/jquery/jquery.js"></script>
 <script src="{{ asset('dashboard') }}/assets/vendor/libs/popper/popper.js"></script>
 <script src="{{ asset('dashboard') }}/assets/vendor/js/bootstrap.js"></script>
 <script src="{{ asset('dashboard') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

 <script src="{{ asset('dashboard') }}/assets/vendor/js/menu.js"></script>
 <!-- endbuild -->

 <!-- Vendors JS -->
 <script src="{{ asset('dashboard') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

 <!-- Main JS -->
 <script src="{{ asset('dashboard') }}/assets/js/main.js"></script>

 <!-- Page JS -->
 <script src="{{ asset('dashboard') }}/assets/js/dashboards-analytics.js"></script>

 <!-- Place this tag in your head or just before your close body tag. -->
 <script async defer src="https://buttons.github.io/buttons.js"></script>



 <script>
     document.addEventListener("DOMContentLoaded", () => {
         Livewire.hook('morph.updated', (el, component) => {
             var mySuccessAlert = $('#my-success-alert');
             if (mySuccessAlert.length) {
                 setTimeout(function() {
                     mySuccessAlert.fadeOut(2000); // Fades out over 2 seconds
                 }, 2000);
             }
         });
     });
 </script>
