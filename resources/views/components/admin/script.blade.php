<script src="{{  asset('template/backend/package/html/main/../../assets/libs/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap tether Core JavaScript -->
<!-- This Page JS -->
<script
    src="{{ asset('template/backend/package/html/main/../../assets/libs/select2/dist/js/select2.full.min.js') }}"></script>
<script
    src="{{ asset('template/backend/package/html/main/../../assets/libs/select2/dist/js/select2.min.js') }}"></script>
<script
    src="{{ asset('template/backend/package/html/main/../../dist/js/pages/forms/select2/select2.init.js') }}"></script>
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

<!--Custom JavaScript -->
<script src="{{ asset('template/backend/package/html/main/../../assets/libs/jquery-steps/build/jquery.steps.min.js') }}"></script>
<script src="{{ asset('template/backend/package/html/main/../../assets/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>


<!-- codemirror -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/mode/xml/xml.min.js"></script>
<script src="{{ asset('template/backend/package/html/main/../../assets/extra-libs/summernote/summernote-lite.min.js') }}"></script>


{{-- Provinsi & Kota/Kabupaten --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        let kotaList = [];

        // Ambil data provinsi
        fetch('/json/provinsi.json')
            .then(res => res.json())
            .then(data => {
                const provinsiSelect = document.getElementById('provinsi');
                data.data.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.kode_provinsi; // Simpan kode provinsi, bukan nama
                    option.textContent = item.nama_provinsi;
                    provinsiSelect.appendChild(option);
                });
            });

        // Ambil data kota
        fetch('/json/kota.json')
            .then(res => res.json())
            .then(data => {
                kotaList = data.data;
            });

        // Saat provinsi berubah
        document.getElementById('provinsi').addEventListener('change', function () {
            const selectedProvinsiKode = this.value; // Ambil kode provinsi yang dipilih

            const kotaSelect = document.getElementById('kota_kabupaten');
            kotaSelect.innerHTML = '<option value="">Pilih Kota/Kabupaten</option>';

            // Filter kota berdasarkan kode provinsi yang dipilih
            const filteredKota = kotaList.filter(item => item.kode_provinsi === selectedProvinsiKode);

            if (filteredKota.length === 0) {
                // Jika tidak ada kota untuk provinsi tersebut, tambahkan pesan atau opsi kosong
                kotaSelect.innerHTML = '<option value="">Tidak ada kota</option>';
            } else {
                // Tambahkan opsi kota yang sesuai dengan provinsi
                filteredKota.forEach(item => {
                    const option = document.createElement('option');
                    option.value = item.kode_kabkota; // Simpan kode kota (kode_kabkota)
                    option.textContent = item.nama_kabkota;
                    kotaSelect.appendChild(option);
                });
            }
        });
    });
</script>





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


    <script>
        document.getElementById('layout_type').addEventListener('change', function () {
            var layoutImage = document.getElementById('layout_image');
            var selectedValue = this.value;

            // Gambar untuk setiap layout
            var images = {
                '1': '{{ asset('storage/preview-layout/layout1.svg') }}',
                '2': '{{ asset('storage/preview-layout/layout2.svg') }}',
                '3': '{{ asset('storage/preview-layout/layout3.svg') }}'
            };

            // Cek apakah ada gambar untuk layout yang dipilih
            if (images[selectedValue]) {
                layoutImage.src = images[selectedValue];
                layoutImage.style.display = 'block'; // Tampilkan gambar
            } else {
                layoutImage.style.display = 'none'; // Sembunyikan gambar jika tidak ada
            }
        });
    </script>

    <script>
        document.getElementById('edit_layout_type').addEventListener('change', function () {
                var layoutImage = document.getElementById('layout_image');
                var selectedValue = this.value;

                // Gambar untuk setiap layout
                var images = {
                    '1': '{{ asset('storage/preview-layout/layout1.svg') }}',
                    '2': '{{ asset('storage/preview-layout/layout2.svg') }}',
                    '3': '{{ asset('storage/preview-layout/layout3.svg') }}'
                };

                // Cek apakah ada gambar untuk layout yang dipilih
                if (images[selectedValue]) {
                    layoutImage.src = images[selectedValue];
                    layoutImage.style.display = 'block';
                } else {
                    layoutImage.style.display = 'none';
                }
            });

    </script>

    <script>
        function toggleCreateMediaSection() {
            $('#createImageUploadSection, #createImageUrlSection, #createVideoUrlSection').hide();
            let selected = $('input[name="media_type_create"]:checked').val();
            if (selected === 'image_upload') {
                $('#createImageUploadSection').show();
            } else if (selected === 'image_url') {
                $('#createImageUrlSection').show();
            } else if (selected === 'video_url') {
                $('#createVideoUrlSection').show();
            }
        }

        $(document).ready(function () {
            toggleCreateMediaSection();
            $('input[name="media_type_create"]').change(function () {
                toggleCreateMediaSection();
            });
        });
    </script>


    <script>
        function toggleEditMediaSection() {
            $('.media-section').hide();
            let selected = $('input[name="media_type"]:checked').val();
            if (selected === 'image_upload') {
                $('#editImageUploadSection').show();
            } else if (selected === 'image_url') {
                $('#editImageUrlSection').show();
            } else if (selected === 'video_url') {
                $('#editVideoUrlSection').show();
            }
        }

        $(document).ready(function () {
            toggleEditMediaSection();

            $('input[name="media_type"]').change(function () {
                toggleEditMediaSection();
            });
        });
    </script>

    
