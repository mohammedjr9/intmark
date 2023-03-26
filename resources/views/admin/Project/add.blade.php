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
                            <form class="well form-horizontal" action="{{route('Project.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Project Name</label>
                                            <div class="col-lg-9">
                                                <input style="text-transform: capitalize;" placeholder="Enter Project Name"
                                                       name="name" id="name" type="text" class="form-control">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Link</label>
                                            <div class="col-lg-9">
                                                <input style="text-transform: capitalize;" placeholder="Enter Project Link"
                                                       name="Link" id="name" type="text" class="form-control">

                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Tag</label>
                                            <div class="col-lg-9">
                                                <input style="text-transform: capitalize;" placeholder="Enter Project Tag"
                                                       name="tag" id="tag" type="text" class="form-control">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Course Photo</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="imagee" id="course_photo" type="file">
                                            </div>
                                        </div>


                                        <div class="form-group row" data-select2-id="select2-data-12-1fss">
                                            <label class="col-lg-3 col-form-label">Add to Category</label>
                                            <div class="col-lg-9" data-select2-id="select2-data-11-lw53">
                                                <select name="category_id" id="category_id"
                                                        class="select select2-hidden-accessible" data-select2-id="select2-data-1-bgy2"
                                                        tabindex="-1" aria-hidden="true">
                                                    <option selected disabled>Select Category</option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-primary" >Create</button>
                                </div>
                            </form>
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
