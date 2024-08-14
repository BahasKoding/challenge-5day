{{-- resources/views/components/sweet-alert.blade.php --}}

@if(session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Success!',
                text: "{{ session('success') }}",
                icon: 'success',
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif

@if($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                title: 'Error!',
                text: "{{ $errors->first() }}",
                icon: 'error',
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif
