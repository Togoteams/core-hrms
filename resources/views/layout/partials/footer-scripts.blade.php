
<!-- jQuery -->
<script src="{{ URL::asset('build/js/jquery-3.7.1.min.js') }}"></script>

<!-- Bootstrap Core JS -->
<script src="{{ URL::asset('build/js/bootstrap.bundle.min.js') }}"></script>

<!-- Feather Icon JS -->
<script src="{{ URL::asset('build/js/feather.min.js') }}"></script>

<!-- Slimscroll JS -->
<script src="{{ URL::asset('build/js/jquery.slimscroll.min.js') }}"></script>

<!-- Summernote JS -->
<script src="{{ URL::asset('build/plugins/summernote/summernote-lite.min.js') }}"></script>

<!-- Color Picker JS -->
<script src="{{ URL::asset('build/js/plyr-js.js') }}"></script>
<script src="{{ URL::asset('build/plugins/@simonwep/pickr/pickr.es5.min.js') }}"></script>

<!-- Datatable JS -->
<script src="{{ URL::asset('build/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('build/js/dataTables.bootstrap5.min.js') }}"></script>	

<!-- Bootstrap Tagsinput JS -->
<script src="{{ URL::asset('build/plugins/bootstrap-tagsinput/bootstrap-tagsinput.js') }}"></script>

<!-- Owl Carousel -->
<script src="{{ URL::asset('build/plugins/owlcarousel/owl.carousel.min.js') }}"></script>

<!-- Daterangepikcer JS -->
<script src="{{ URL::asset('build/js/moment.js') }}"></script>
<script src="{{ URL::asset('build/plugins/daterangepicker/daterangepicker.js') }}"></script>

@if (Route::is(['ui-rangeslider']))
    <!-- Rangeslider JS -->
    <script src="{{ URL::asset('build/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/ion-rangeslider/js/custom-rangeslider.js') }}"></script>
@endif

<!-- Fullcalendar JS -->
<script src="{{ URL::asset('build/plugins/fullcalendar/index.global.min.js') }}"></script>
<script src="{{ URL::asset('build/plugins/fullcalendar/calendar-data.js') }}"></script>

<!-- Datetimepicker JS -->
<script src="{{ URL::asset('build/js/bootstrap-datetimepicker.min.js') }}"></script>

<!-- Select2 JS -->
<script src="{{ URL::asset('build/plugins/select2/js/select2.min.js') }}"></script>

<!-- Theiastickysidebar JS -->
<script src="{{ URL::asset('build/plugins/theia-sticky-sidebar/theia-sticky-sidebar.min.js') }}"></script>
<script src="{{ URL::asset('build/plugins/theia-sticky-sidebar/ResizeSensor.min.js') }}"></script>

<!-- Owl Carousel JS -->
<script src="{{ URL::asset('build/js/owl.carousel.min.js') }}"></script>

@if (Route::is(['ui-clipboard']))
    <!-- Clipboard JS -->
    <script src="{{ URL::asset('build/plugins/clipboard/clipboard.min.js') }}"></script>
@endif

@if (Route::is(['maps-vector']))

<script src="{{ URL::asset('build/plugins/jsvectormap/js/jsvectormap.min.js') }}"></script>
<!-- JSVector Maps MapsJS -->
<script src="{{ URL::asset('build/plugins/jsvectormap/maps/world-merc.js') }}"></script>
<script src="{{ URL::asset('build/js/us-merc-en.js') }}"></script>
<script src="{{ URL::asset('build/js/russia.js') }}"></script>
<script src="{{ URL::asset('build/js/spain.js') }}"></script>
<script src="{{ URL::asset('build/js/canada.js') }}"></script>
<script src="{{ URL::asset('build/js/jsvectormap.js') }}"></script>
<script src="{{ URL::asset('build/plugins/@simonwep/pickr/pickr.min.js') }}"></script>

@endif

@if (Route::is(['maps-leaflet']))

<script src="{{ URL::asset('build/plugins/leaflet/leaflet.js') }}"></script>
<script src="{{ URL::asset('build/js/leaflet.js') }}"></script>

@endif

@if (Route::is(['ui-drag-drop']))
    <!-- Dragula JS -->
    <script src="{{ URL::asset('build/plugins/dragula/js/dragula.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/dragula/js/drag-drop.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/dragula/js/draggable-cards.js') }}"></script>
@endif

@if (Route::is(['ui-sweetalerts', 'ui-ribbon',]))
    <!-- Sweetalert 2 -->
    <script src="{{ URL::asset('build/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/sweetalert/sweetalerts.min.js') }}"></script>
@endif

@if (Route::is(['ui-stickynote', 'kanban-view', 'task-board', 'deals-grid', 'leads-grid', 'candidates-kanban']))
    <!-- Stickynote JS -->
    <script src="{{ URL::asset('build/js/jquery-ui.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/jquery.ui.touch-punch.min.js') }}"></script>    
@endif

@if (Route::is(['plugin', 'ui-stickynote']))
<script src="{{ URL::asset('build/plugins/stickynote/sticky.js') }}"></script>
@endif

@if (Route::is([
        'chart-apex', 'index', 'employee-dashboard', 'deals-dashboard', 'leads-dashboard', 'file-manager', 'dashboard', 'companies', 'packages',
        'layout-horizontal', 'layout-detached', 'layout-modern', 'layout-horizontal-overlay', 'layout-two-column', 'layout-hovered', 'layout-box',
        'layout-horizontal-single', 'layout-horizontal-box', 'layout-horizontal-sidemenu', 'layout-vertical-transparent', 'layout-without-header',
        'layout-rtl', 'layout-dark', 'analytics','expenses-report','invoice-report','payment-report','project-report','task-report','user-report',
        'employee-report','payslip-report','attendance-report', 'leave-report', 'daily-report',
    ]))
    <!-- Chart JS -->
    <script src="{{ URL::asset('build/plugins/apexchart/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/apexchart/chart-data.js') }}"></script>
@endif

@if (Route::is(['chart-c3']))
    <!-- Chart JS -->
    <script src="{{ URL::asset('build/plugins/c3-chart/d3.v5.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/c3-chart/c3.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/c3-chart/chart-data.js') }}"></script>
@endif

@if (Route::is(['chart-js', 'index', 'deals-dashboard', 'dashboard', 'companies', 'layout-horizontal', 'layout-detached', 'layout-modern', 
'layout-horizontal-overlay', 'layout-two-column', 'layout-hovered', 'layout-box', 'layout-horizontal-single', 'layout-horizontal-box', 'layout-horizontal-sidemenu',
'layout-vertical-transparent', 'layout-without-header', 'layout-rtl', 'layout-dark', 'analytics'
]))
    <!-- Chart JS -->
    <script src="{{ URL::asset('build/plugins/chartjs/chart.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/chartjs/chart-data.js') }}"></script>
@endif

@if (Route::is(['chart-morris']))
    <!-- Chart JS -->
    <script src="{{ URL::asset('build/plugins/morris/raphael-min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/morris/morris.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/morris/chart-data.js') }}"></script>
@endif

@if (Route::is(['chart-peity', 'deals-dashboard', 'leads-dashboard', 'dashboard', 'companies', 'subscription', 'tickets-grid','tickets', 'task-report']))
    <!-- Chart JS -->
    <script src="{{ URL::asset('build/plugins/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/peity/chart-data.js') }}"></script>
@endif

@if (Route::is(['chart-flot']))
    <!-- Chart JS -->
    <script src="{{ URL::asset('build/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/flot/chart-data.js') }}"></script>
@endif

<!-- Slimscroll JS -->
<script src="{{ URL::asset('build/js/jquery.slimscroll.min.js') }}"></script>

@if (Route::is(['ui-rating']))
    <!-- Rater JS -->
    <script src="{{ URL::asset('build/plugins/rater-js/index.js') }}"></script>

    <!-- Internal Ratings JS -->
    <script src="{{ URL::asset('build/js/ratings.js') }}"></script>
@endif

@if (Route::is(['ui-toasts']))
    <!-- Chart JS -->
    <script src="{{ URL::asset('build/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/toastr/toastr.js') }}"></script>
@endif

@if (Route::is(['ui-counter']))
    <!-- Stickynote JS -->
    <script src="{{ URL::asset('build/plugins/countup/jquery.counterup.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/countup/jquery.waypoints.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/countup/jquery.missofis-countdown.js') }}"></script>
@endif

@if (Route::is(['ui-lightbox']))
    <!-- Alertify JS -->
    <script src="{{ URL::asset('build/plugins/lightbox/glightbox.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/lightbox/lightbox.js') }}"></script>
@endif

@if (Route::is(['form-wizard']))
    <!-- Wizard JS -->
    <script src="{{ URL::asset('build/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/twitter-bootstrap-wizard/prettify.js') }}"></script>
    <script src="{{ URL::asset('build/plugins/twitter-bootstrap-wizard/form-wizard.js') }}"></script>
@endif

@if (Route::is(['form-mask']))
    <!-- Mask JS -->
    <script src="{{ URL::asset('build/js/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/mask.js') }}"></script>
@endif

<!-- Sticky Sidebar JS -->
<script src="{{ URL::asset('build/plugins/theia-sticky-sidebar/ResizeSensor.js') }}"></script>
<script src="{{ URL::asset('build/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}"></script>

@if (Route::is(['reset-password','reset-password-2','reset-password-3']))
<!-- Validation-->
<script src="{{ URL::asset('build/js/validation.js') }}"></script>
@endif

@if (Route::is(['email-verification','email-verification-2','email-verification-3','two-step-verification','two-step-verification-2','two-step-verification-3']))
<script src="{{ URL::asset('build/js/otp.js') }}"></script>
@endif



@if (Route::is(['form-fileupload']))
    <!-- Fileupload JS -->
    <script src="{{ URL::asset('build/plugins/fileupload/fileupload.min.js') }}"></script>
@endif

@if (Route::is(['employee-salary']))
<script src="{{ URL::asset('build/js/employee-salary.js') }}"></script>
@endif

<!-- Fancybox JS -->
<script src="{{ URL::asset('build/plugins/fancybox/jquery.fancybox.min.js') }}"></script>

<!-- Chart JS -->
<script src="{{ URL::asset('build/plugins/chartjs/chart.min.js') }}"></script>
<script src="{{ URL::asset('build/plugins/chartjs/chart-data.js') }}"></script>


@if (Route::is(['form-pickers']))
<script src="{{ URL::asset('build/plugins/flatpickr/flatpickr.js') }}"></script>
<script src="{{ URL::asset('build/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
<script src="{{ URL::asset('build/plugins/jquery-timepicker/jquery-timepicker.js') }}"></script>
<script src="{{ URL::asset('build/plugins/pickr/pickr.js') }}"></script>

<!-- Page JS -->
<script src="{{ URL::asset('build/js/forms-pickers.js') }}"></script>
@endif


@if (Route::is(['coming-soon']))
<script src="{{ URL::asset('build/js/coming-soon.js') }}"></script>
@endif

<script src="{{ URL::asset('build/js/email.js') }}"></script>
<script src="{{ URL::asset('build/js/kanban.js') }}"></script>
<script src="{{ URL::asset('build/js/invoice.js') }}"></script>
<script src="{{ URL::asset('build/js/projects.js') }}"></script>
<script src="{{ URL::asset('build/js/add-comments.js')}}"></script>
<script src="{{ URL::asset('build/js/file-manager.js') }}"></script>


<!-- Custom JS -->
<script src="{{ URL::asset('build/js/todo.js') }}"></script>
<script src="{{ URL::asset('build/js/theme-colorpicker.js') }}"></script>
<script src="{{ URL::asset('build/js/script.js') }}"></script>