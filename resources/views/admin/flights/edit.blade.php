@extends('layouts.admin.app')
@section('page_heading')
    Flights / Edit
@stop
@section('styles')

@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        @if (session('success'))
            <x-library.toast :status="'success'" :data="session('success')"></x-library.toast>
        @endif
        @if (session()->get('error'))
            <x-library.toast :status="'danger'" :data="session('error')"></x-library.toast>
        @endif
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Flights /</span> Edit</h4>

        <form id="update-flight-form" action="{{ route('flights.update',$flight->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('put')
            <!-- Basic Layout -->
            <div class="row">

                <div class="col-sm-8 col-md-12 col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Edit Flight</h5>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <label for="airline" class="form-label">Select Airline</label>
                                    <select name="airline_id" class="form-control" id="airline">
                                        <option value="">Select Airline</option>
                                        @forelse ($airlines as $airline)
                                            <option @if ($flight->airline_id == $airline->id) selected @endif
                                                value="{{ $airline->id }}">{{ $airline->name }} - ({{ $airline->code }})
                                            </option>
                                        @empty
                                        @endforelse
                                       
                                    </select>
                                    @error('airline_id')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror

                                </div>
                                <div class="col-sm-4">
                                    <label for="departure_airport" class="form-label">Select Departure Airport</label>
                                    <select name="departure_airport_id" class="form-control" id="departure_airport">
                                        <option value="">Select Departure Airport</option>
                                        @forelse ($airports as $airport)
                                            <option @if ($flight->departure_airport_id == $airport->id) selected @endif
                                                value="{{ $airport->id }}">{{ $airport->name }} -
                                                ({{ $airport->code }})
                                            </option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @error('departure_airport_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="col-sm-4">
                                    <label for="departure_time" class="form-label">Departure Date & Time</label>
                                    <input type="datetime-local" value="{{ $flight->departure_time }}"
                                        placeholder="Enter Departure Time" id="departure_time" 
                                        name="departure_time" class="form-control">
                                    @error('departure_time')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <label for="arrival_airport" class="form-label">Select Arrival Airport</label>
                                    <select name="arrival_airport_id" class="form-control" id="arrival_airport">
                                        <option value="">Select Arrival Airport</option>
                                        @forelse ($airports as $airport)
                                            <option @if ($flight->arrival_airport_id == $airport->id) selected @endif
                                                value="{{ $airport->id }}">{{ $airport->name }} -
                                                ({{ $airport->code }})
                                            </option>
                                        @empty
                                        @endforelse
                                    </select>
                                    @error('arrival_airport_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                </div>
                                <div class="col-sm-4 mt-4">
                                    <label for="arrival_time" class="form-label">Arrival Date & Time</label>
                                    <input type="datetime-local" value="{{ $flight->arrival_time }}"
                                        placeholder="Enter Arrival Time" id="arrival_time"  name="arrival_time"
                                        class="form-control">
                                    @error('arrival_time')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <label for="price" class="form-label">Price ($)</label>
                                    <input type="number" value="{{ $flight->price }}" min="0" placeholder="Enter Flight Price" id="price"
                                         name="price" class="form-control">
                                        @error('price')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>





            <div class="row">

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script>
        //Image Preview

        // $("#post-image").change(function(e) {

        // var file = e.originalEvent.srcElement.files[0];
        // var reader = new FileReader();
        // reader.onloadend = function(e) {
        //     $("#preview-img").attr('src', e.target.result);
        //     $("#preview-image-box").removeClass('d-none');
        // }
        // reader.readAsDataURL(file);


        // });
    </script>
@endsection
