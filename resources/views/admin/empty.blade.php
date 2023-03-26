@extends('admin.master')


@section('content')
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <div class="page-title">
                        <h4 class="mb-0 font-size-18">Responsive Table</h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Agroxa</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Responsive Table</li>
                        </ol>
                    </div>

                    <div class="state-information d-none d-sm-block">
                        <div class="state-graph">
                            <div id="header-chart-1"></div>
                            <div class="info">Balance $ 2,317</div>
                        </div>
                        <div class="state-graph">
                            <div id="header-chart-2"></div>
                            <div class="info">Item Sold 1230</div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end page title -->

        <!-- Start Page-content-Wrapper -->
        <div class="page-content-wrapper">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h3 class="m-0"></h3>
                                <button class="btn btn-success waves-effect waves-light" data-bs-toggle="modal"
                                    data-bs-target="#staticBackdrop">Add</button>
                            </div>

                            <br><br>
                            <div class="table-rep-plugin">

                                <h1>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</h1>
                                <div class="table- mb-0" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th data-priority="1">Title</th>
                                                <th data-priority="3">Content</th>
                                                <th data-priority="1">Image</th>
                                                <th data-priority="3">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>#</th>
                                                <th data-priority="1">Title</th>
                                                <th data-priority="3">Content</th>
                                                <th data-priority="1">Image</th>
                                                <td>
                                                    <div class="">
                                                        <div class="btn-group me-1 mt-2">
                                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                                data-bs-toggle="dropdown" aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="mdi mdi-chevron-down"></i></button>
                                                            <div class="dropdown-menu">
                                                                <button class="dropdown-item" data-bs-toggle="modal"
                                                                    data-bs-target="#edit">
                                                                    <i data-feather="edit-2" class="mr-50"></i>
                                                                    <span>Edit</span>
                                                                </button>
                                                                <button class="dropdown-item" data-bs-toggle="modal"
                                                                    data-bs-target="#delete">
                                                                    <i data-feather="edit-2" class="mr-50"></i>
                                                                    <span>Delete</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->

        </div>
        <!-- End Page-content-wrapper -->

    </div>





@endsection
