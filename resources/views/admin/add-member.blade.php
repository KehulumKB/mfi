@extends('layouts.app')

{{-- Customize layout sections --}}

@section('title', 'Admin | Add Member')
{{-- @section('subtitle', 'Dashboard') --}}
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Add Member')

{{-- Content body: main page content --}}

@section('content_body')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Member</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form">
                            <div class="card-body">
                                <div class="form-group
                                ">
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter name">
                                </div>
                                <div class="form-group
                                ">
                                    <label for="exampleInputPassword1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputPassword1"
                                        placeholder="Enter email">
                                </div>
                                <div class="form-group

                                ">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <div class="form-group
                                ">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Confirm Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Role</label>
                                    <select class="form-control">
                                        <option>Admin</option>
                                        <option>Member</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <button type="button" class="btn btn-outline-success">Add Member</button>
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
