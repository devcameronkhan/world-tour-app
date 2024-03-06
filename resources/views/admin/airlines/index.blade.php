@extends('layouts.admin.app')
@section('page_heading')
    Airline / All
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @if (session('success'))
            <x-library.toast :status="'success'" :data="session('success')"></x-library.toast>
        @endif
        @if (session()->get('error'))
            <x-library.toast :status="'danger'" :data="session('error')"></x-library.toast>
        @endif

        <div class="card">
            <div class="card-header">
                <h5>All Airlines</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">

                    <thead>
                        <th>#</th>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @forelse($airlines as $key => $airline)
                        <tr>
                            <td>{{ ++$key }}</td>
                            <td>{{ $airline->code }}</td>
                            <td>{{ $airline->name }}</td>
                            <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu" style="">
                                        <a class="dropdown-item" href="{{ route('airlines.edit', $airline->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i>
                                                Edit</a>
                                        
                                        <form method="POST" class="deleteForm" action="{{ route('airlines.destroy',$airline->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" onclick="confirmDelete()" class="dropdown-item"
                                                href="javascript:void(0);"><i class="bx bx-trash me-1"></i>
                                                Delete</button>
                                        </form>

                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                            <tr><td colspan="4" class="text-center" >No Record Found</td></tr>
                        @endforelse
                        

                        



                    </tbody>

                </table>
            </div>
            {{-- <div class="card-footer">
                {{ $posts->links('vendor.pagination.bootstrap-5') }}
            </div> --}}
        </div>
    </div>
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
