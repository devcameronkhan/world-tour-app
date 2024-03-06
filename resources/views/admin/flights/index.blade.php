@extends('layouts.admin.app')
@section('page_heading')
    Flights / All
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
                <h5>All Flights</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">

                    <thead>
                        <th>#</th>
                        <th>Airline</th>
                        <th style="text-wrap:nowrap" >Flight Number</th>
                        <th>Departure Airport</th>
                        <th>Departure Date</th>
                        <th>Departure Time</th>
                        <th>Arrival Airport</th>
                        <th>Arrival Date</th>
                        <th>Arrival Time</th>
                        <th>Price</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>

                        @forelse ($flights as $key =>$flight)
                            <tr>
                                <td>{{ ++$key }}</td>
                                <td>{{ $flight->airline->name }} - ({{ $flight->airline->code }})</td>
                                <td>{{ $flight->number }}</td>
                                <td>{{ $flight->departure_airport->name }} - ({{ $flight->departure_airport->code }})</td>
                                <td>{{ $flight->departure_time->format('d-m-Y') }}</td>
                                <td>{{ $flight->departure_time->format('h:m') }} - ({{ $flight->departure_airport->timezone }})</td>
                                <td>{{ $flight->arrival_airport->name }} - ({{ $flight->arrival_airport->code }})</td>
                                <td>{{ $flight->arrival_time->format('d-m-Y') }}</td>
                                <td>{{ $flight->arrival_time->format('h:m') }} - ({{ $flight->arrival_airport->timezone }})</td>
                                <td><span class="badge bg-success" >$ {{ $flight->price }}</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-vertical-rounded"></i>
                                        </button>
                                        <div class="dropdown-menu" style="">
                                            <a class="dropdown-item" href="{{ route('flights.edit', $flight->id) }}"><i
                                                    class="bx bx-edit-alt me-1"></i>
                                                Edit</a>
                                            
                                            <form method="POST" class="deleteForm"
                                                action="{{ route('flights.destroy', $flight->id) }}">
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
                         <tr><td colspan="9" class="text-center" >No Record Found</td></tr> 
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
