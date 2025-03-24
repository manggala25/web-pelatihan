<script src="{{  asset('template/backend/package/html/main/../../assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<script
    src="{{  asset('template/backend/package/html/main/../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- apps -->
<script src="{{  asset('template/backend/package/html/main/../../dist/js/app.min.js') }}"></script>
<script src="{{  asset('template/backend/package/html/main/../../dist/js/app.init.js') }}"></script>
<script src="{{  asset('template/backend/package/html/main/../../dist/js/app-style-switcher.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script
    src="{{  asset('template/backend/package/html/main/../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script
    src="{{  asset('template/backend/package/html/main/../../assets/extra-libs/sparkline/sparkline.js') }}"></script>
<!--Wave Effects -->
<script src="{{  asset('template/backend/package/html/main/../../dist/js/waves.js') }}"></script>
<!--Menu sidebar -->
<script src="{{  asset('template/backend/package/html/main/../../dist/js/sidebarmenu.js') }}"></script>
<!--Custom JavaScript -->
<script src="{{  asset('template/backend/package/html/main/../../dist/js/feather.min.js') }}"></script>
<script src="{{  asset('template/backend/package/html/main/../../dist/js/custom.min.js') }}"></script>
<!--This page JavaScript -->
<script
    src="{{  asset('template/backend/package/html/main/../../assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<!-- Chart JS -->
<script src="{{  asset('template/backend/package/html/main/../../dist/js/pages/dashboards/dashboard1.js') }}"></script>

<!-- Bootstrap tether Core JavaScript -->
<script src="{{  asset('template/backend/package/html/main/../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="{{  asset('template/backend/package/html/main/../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{  asset('template/backend/package/html/main/../../assets/extra-libs/sparkline/sparkline.js') }}"></script>

<!--This page plugins -->
<script src="{{  asset('template/backend/package/html/main/../../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{  asset('template/backend/package/html/main/../../assets/extra-libs/datatables.net-bs4/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('template/backend/package/html/main/../../dist/js/pages/datatable/datatable-basic.init.js') }}"></script>

{{-- footable --}}
<script src="{{  asset('template/backend/package/html/main/../../assets/libs/footable/js/footable.min.js') }}"></script>
<script src="{{  asset('template/backend/package/html/main/../../dist/js/pages/tables/footable-init.js') }}"></script>

<!-- This Page JS -->
<!-- codemirror -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/mode/xml/xml.min.js"></script>
<script src="{{ asset('template/backend/package/html/main/../../assets/extra-libs/summernote/summernote-lite.min.js') }}"></script>
<script>
    /************************************/
    //default editor
    /************************************/
    $(".summernote").summernote({
        height: 350, // set editor height
        minHeight: null, // set minimum height of editor
        maxHeight: null, // set maximum height of editor
        focus: false, // set focus to editable area after initializing summernote
    });
</script>
