<!-- bundle -->
<script src="{{ asset('dist/js/vendor.min.js') }}"></script>
<script src="{{ asset('dist/js/app.min.js') }}"></script>

<!-- third party js -->
<script src="{{ asset('dist/js/vendor/apexcharts.min.js') }}"></script>
<script src="{{ asset('dist/js/vendor/jquery-jvectormap-1.2.2.min.js') }}"></script>
<script src="{{ asset('dist/js/vendor/jquery-jvectormap-world-mill-en.js') }}"></script>

<script src="{{ asset('dist/js/vendor/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('dist/js/vendor/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('dist/js/vendor/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('dist/js/vendor/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('dist/js/vendor/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('dist/js/vendor/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('dist/js/vendor/buttons.html5.min.js') }}"></script>
<script src="{{ asset('dist/js/vendor/buttons.flash.min.js') }}"></script>
<script src="{{ asset('dist/js/vendor/buttons.print.min.js') }}"></script>
<script src="{{ asset('dist/js/vendor/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('dist/js/vendor/dataTables.select.min.js') }}"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="{{ asset('dist/js/pages/demo.dashboard.js') }}"></script>

<script src="{{ asset('dist/js/pages/demo.datatable-init.js') }}"></script>
<!-- end demo js-->

@if ($errors->any())
    @foreach ($errors->all() as $error)
        <script>
            iziToast.error({
                title: '',
                position: 'topRight',
                message: '{{ $error }}',
            });
        </script>
    @endforeach

@endif
@if (session()->get('success'))
    <script>
        iziToast.success({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('success') }}',
        });
    </script>
@endif

@if (session()->get('error'))
    <script>
        iziToast.error({
            title: '',
            position: 'topRight',
            message: '{{ session()->get('error') }}',
        });
    </script>
@endif

{{-- <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('editor');
</script> --}}

<script>
    ClassicEditor
        .create(document.querySelector('#isi_halaman'), {
            height: '1000px'
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor-visi'), {
            height: '1000px'
        })
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor-misi'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor-tujuan'))
        .catch(error => {
            console.error(error);
        });
    ClassicEditor
        .create(document.querySelector('#editor-sasaran_tujuan'))
        .catch(error => {
            console.error(error);
        });
</script>

<script>
    $('.bidangkajian').select2({
        width: '100%' // Sesuaikan lebar Select2 agar sama dengan elemen form lainnya
    });
</script>
