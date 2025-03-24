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
<script src="{{ asset('template/backend/package/html/main/../../assets/libs/tinymce/tinymce.min.js') }}"></script>
<script>
    $(function () {
        if ($("#mymce").length > 0) {
            tinymce.init({
                selector: "textarea#mymce",
                theme: "modern",
                height: 300,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor",
                ],
                toolbar:
                    "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            });
        }
    });
</script>