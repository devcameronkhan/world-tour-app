@extends('layouts.admin.app')
@section('page_heading')
    Airport / Edit
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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Airport /</span> Edit</h4>

        <form id="page-create-form" action="{{ route('airports.update',$airport->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('put')
            <!-- Basic Layout -->
            <div class="row">

                <div class="col-sm-8 col-md-12 col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Edit Airport</h5>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-sm-4">
                                    <label for="code" class="form-label">code</label>
                                    <input type="text" value="{{ $airport->code }}" placeholder="Enter Airport Code"
                                        id="code" required name="code" class="form-control">
                                    @error('code')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label for="code" class="form-label">city code</label>
                                    <input type="text" value="{{ $airport->city_code }}"
                                        placeholder="Enter Airport City Code" id="city_code" required name="city_code"
                                        class="form-control">
                                    @error('city_code')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <label for="name" class="form-label">name</label>
                                    <input type="text" value="{{ $airport->name }}" placeholder="Enter Airport Name"
                                        id="name" required name="name" class="form-control">
                                    @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-4 mt-4">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" value="{{ $airport->city }}" required
                                        placeholder="Enter Airport City" required name="city" class="form-control">
                                    @error('city')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-4  mt-4">
                                    <label class="form-label" for="timezone">Timezone</label>
                                    <select class="form-control" required name="timezone" id="timezone">
                                        <option value="">Select Timezone</option>
                                        @foreach ($timezones as $timezone)
                                            <option @if ($airport->timezone == $timezone->value) selected @endif
                                                value="{{ $timezone->value }}">{{ $timezone->value }}</option>
                                        @endforeach
                                    </select>
                                    @error('timezone')
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

@endsection
