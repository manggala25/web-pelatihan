{{-- Script --}}
<script src="{{ asset('template/frontend/assets/vendors/jquery/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/bootstrap-select/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/jquery-ui/jquery-ui.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/jarallax/jarallax.min.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
<script
    src="{{ asset('template/frontend/assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
<script
    src="{{ asset('template/frontend/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/nouislider/nouislider.min.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/tiny-slider/tiny-slider.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/wnumb/wNumb.min.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/swiper/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/wow/wow.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/jquery-circleType/jquery.circleType.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/jquery-lettering/jquery.lettering.min.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/isotope/isotope.js') }}"></script>
<script src="{{ asset('template/frontend/assets/vendors/countdown/countdown.min.js') }}"></script>

<!-- Template JS -->
<script src="{{ asset('template/frontend/assets/js/noile.js') }}"></script>

<!-- jQuery harus dimuat dulu -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function () {
        console.log("jQuery dan DataTables berhasil dimuat!"); // Debugging
        if ($.fn.DataTable) {
            $('#pelatihanTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "lengthMenu": [5, 10, 25, 50, 100],
                "language": {
                    "search": "Cari:",
                    "lengthMenu": "Tampilkan _MENU_ data per halaman",
                    "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                    "paginate": {
                        "first": "Awal",
                        "last": "Akhir",
                        "next": "Selanjutnya",
                        "previous": "Sebelumnya"
                    },
                    "emptyTable": "Tidak ada data yang tersedia",
                    "zeroRecords": "Tidak ditemukan data yang sesuai"
                }
            });
        } else {
            console.error("DataTables tidak ditemukan! Pastikan skrip dimuat dengan benar.");
        }
    });
</script>