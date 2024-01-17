@extends('layout.master')
@section('page_title', 'Cities of the World')
@section('headlinks')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('contents')
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        Cities of the World
                                        <h4 class="fs-16 mb-1"></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header border-bottom d-flex">
                                        <h5 class="card-title mb-0">Cities of the World</h5>

                                        <a href="{{ route('city.export') }}" class="btn btn-primary ms-auto"
                                            style="background-color: rgb(8, 59, 90) !important;"> <i
                                                class="fas fa-file-export align-bottom me-1"></i>
                                            Export Reords</a>
                                    </div>
                                    <div class="card-body">
                                        <table
                                            class="table table-bordered dt-responsive nowrap table-striped align-middle data-table5"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th data-ordering="false">S/N</th>
                                                    <th data-ordering="false">City</th>
                                                    <th>State</th>
                                                    <th>Country </th>
                                                    <th>Latitude</th>
                                                    <th>Longitude</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    @include('admin_script/city')
@endsection
