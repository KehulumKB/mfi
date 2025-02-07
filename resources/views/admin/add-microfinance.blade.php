@extends('layouts.app')

{{-- Customize layout sections --}}

@section('title', 'Admin | Add Member')
{{-- @section('subtitle', 'Dashboard') --}}
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Add Microfinance')

{{-- Content body: main page content --}}

@section('content_body')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Microfinance</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ route('admin.mfi-store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group
                                ">
                                    <label for="mfi_name">Name</label>
                                    <input type="text" class="form-control" name="mfi_name" id="mfi_name"
                                        placeholder="Enter microfinance name">
                                </div>
                                <div class="form-group
                                ">
                                    <label for="mfi_address">Address</label>
                                    <input type="text" class="form-control" name="mfi_address" id="mfi_address"
                                        placeholder="Enter mfi address">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-success">Add Microfinance</button>
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
