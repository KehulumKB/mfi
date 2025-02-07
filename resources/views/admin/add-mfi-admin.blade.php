@extends('layouts.app')

{{-- Customize layout sections --}}

@section('title', 'Admin | Add Member')
{{-- @section('subtitle', 'Dashboard') --}}
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Add MFI Admin')

{{-- Content body: main page content --}}

@section('content_body')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add MFI Admin</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('admin.mfi-admin-store') }}">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label>Select MFI</label>
                                    <select class="form-control" name="mfi" id="mfi">
                                        <option value="">Select MFI</option>
                                        @foreach ($mfis as $mfi)
                                            <option value="{{ $mfi->id }}">{{ $mfi->mf_name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="admin_name">Admin Name</label>
                                    <input type="text" class="form-control" id="admin_name"
                                        placeholder="Enter admin name" name="admin_name">
                                </div>

                                <div class="form-group">
                                    <label for="phone_no">Phone Number</label>
                                    <input type="text" class="form-control" id="phone_no"
                                        placeholder="Enter Phone Number" name="phone_no">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-success">
                                        Add MFI Admin
                                    </button>
                                </div>

                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>

    </section>
@stop

{{-- Push extra CSS --}}

@push('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endpush

{{-- Push extra scripts --}}

@push('js')
    {{-- <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script> --}}
@endpush
