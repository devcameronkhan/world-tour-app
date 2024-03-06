@extends('layouts.admin.app')
@section('page_heading')
    Airline / Add
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
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Airline /</span> Add</h4>

        <form id="add-airline-form" action="{{ route('airlines.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <!-- Basic Layout -->
            <div class="row">

                <div class="col-sm-8 col-md-12 col-lg-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Add Airline</h5>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-sm-6">
                                    <label for="code" class="form-label">Code *</label>
                                    <input type="text" value="{{ old('code') }}" placeholder="Enter Airline Code" id="code" required
                                        name="code" class="form-control">
                                    @error('code')
                                        <span class="invalid-feedback" >{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-sm-6">
                                    <label for="page-slug" class="form-label">Airline Name</label>
                                    <input type="text" value="{{ old('name') }}" placeholder="Enter Airline Name" id="name" required
                                        name="name" class="form-control">
                                        @error('name')
                                        <span class="invalid-feedback" >{{ $message }}</span>
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
