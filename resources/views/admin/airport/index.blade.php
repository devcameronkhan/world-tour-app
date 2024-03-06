@extends('layouts.admin.app')
@section('page_heading')
    Airports / All
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
                <h5>All Airports</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">

                    <thead>
                        <th>#</th>
                        <th>Airport Code</th>
                        <th>City Code</th>
                        <th>Name</th>
                        <th>City</th>
                        <th>timezone</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>

                        @forelse($airports as $key => $airport)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $airport->code }}</td>
                                <td>{{ $airport->city_code }}</td>
                                <td>{{ $airport->name }}</td>
                                <td>{{ $airport->city }}</td>
                                <td>{{ $airport->timezone }}</td>

                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="{{ route('airports.edit', $airport->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i>
                                                Edit</a>

                                            <form method="POST" class="deleteForm"
                                                action="{{ route('airports.destroy', $airport->id) }}">
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
                            <tr>
                                <td colspan="7" class="text-center">No Record Found</td>
                            </tr>
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
