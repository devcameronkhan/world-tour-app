@extends('layouts.admin.app')


@section('page_heading')
    Page / Heading
@endsection
@section('content')
    
@endsection
@section('scripts')
    <script>
        function confirmDelete() {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If user confirms, submit the form

                    $('.deleteForm').submit();
                }
            });
        }
    </script>
@endsection

