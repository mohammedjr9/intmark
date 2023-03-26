@extends('admin.master')

@section('style')

    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked + .slider {
            background-color: #2196F3;
        }

        input:focus + .slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked + .slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
@endsection
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
                                <a href="{{route('employees.create')}}">  <button class="btn btn-success waves-effect waves-light">Add</button></a>
                            </div>

                            <br><br>
                            <div class="table-rep-plugin">

                                <div class="table- mb-0" data-pattern="priority-columns">
                                    <table id="tech-companies-1" class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th data-priority="1">#</th>
                                            <th data-priority="3">Name</th>
                                            <th data-priority="3">Email</th>
                                            <th data-priority="1">Address</th>
                                            <th data-priority="1">Phone</th>
                                            <th data-priority="1">Specialization</th>

{{--                                            <th data-priority="3">Status</th>--}}
                                            <th data-priority="3">Actions</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Employee as $item)
                                            <tr>
                                                <th data-priority="1">{{$loop->index+1}}</th>
                                                <th data-priority="3">{{$item->name}}</th>
                                                <th data-priority="3">{{$item->email}}</th>
                                                <th data-priority="3">{{$item->addrss}}</th>
                                                <th data-priority="3">{{$item->phone}}</th>
                                                <th data-priority="3">{{$item->Specialization}}</th>
{{--                                                <th data-priority="3">--}}
{{--                                                    <label class="switch">--}}
{{--                                                        <input type="checkbox" {{($item->action==1)?'checked':''}}>--}}
{{--                                                        <span class="slider round"></span>--}}
{{--                                                    </label>--}}
{{--                                                </th>--}}

                                                <td>
                                                    <div class="">
                                                        <div class="btn-group me-1 mt-2">
                                                            <button type="button" class="btn btn-primary dropdown-toggle"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                <i class="mdi mdi-chevron-down"></i></button>
                                                            <div class="dropdown-menu">
                                                                <button class="dropdown-item" data-bs-toggle="modal"
                                                                        data-bs-target="#edit{{$item->id}}">
                                                                    <i data-feather="edit-2" class="mr-50"></i>
                                                                    <span>Edit</span>
                                                                </button>
                                                                <button class="dropdown-item" data-bs-toggle="modal"
                                                                        data-bs-target="#delete{{$item->id}}">
                                                                    <i data-feather="edit-2" class="mr-50"></i>
                                                                    <span>Delete</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                            <div class="modal fade" id="edit{{$item->id}}" tabindex="-1" aria-labelledby="edit" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{route('employees.update',$item->id)}}" method="post"   enctype="multipart/form-data">
                                                              @csrf
                                                                @method('put')
                                                                <div class="row">
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-3 col-form-label">Employee Name</label>
                                                                            <div class="col-lg-9">
                                                                                <input style="text-transform: capitalize;" placeholder="Enter Employee Name"
                                                                                       name="name" id="name" value="{{$item->name}}" type="text" class="form-control">

                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-3 col-form-label">Employee Email</label>
                                                                            <div class="col-lg-9">
                                                                                <input style="text-transform: capitalize;" placeholder="Enter Employee Email"
                                                                                       name="email" id="name" value="{{$item->email}}" type="text" class="form-control">

                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-3 col-form-label">Employee Address</label>
                                                                            <div class="col-lg-9">
                                                                                <input style="text-transform: capitalize;" placeholder="Enter Employee Address"
                                                                                       name="addrss" id="name" value="{{  $item->addrss}}" type="text" class="form-control">

                                                                            </div>
                                                                        </div>

                                                                        <div class="form-group row">
                                                                            <label class="col-lg-3 col-form-label">Employee Phone</label>
                                                                            <div class="col-lg-9">
                                                                                <input style="text-transform: capitalize;" placeholder="Enter Employee Phone"
                                                                                       name="phone" id="name" value="{{  $item->phone}}" type="number" class="form-control">

                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-lg-3 col-form-label">Employee Specialization</label>
                                                                            <div class="col-lg-9">
                                                                                <input style="text-transform: capitalize;" placeholder="Enter Employee Phone"
                                                                                       name="Specialization" id="name" value="{{  $item->Specialization}}" type="text" class="form-control">

                                                                            </div>
                                                                        </div>


                                                                    </div>
                                                                </div>
                                                                <div class="form-group text-right">
                                                                    <button type="submit" class="btn btn-primary" >Update</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <!-- Modal -->

                                            <div class="modal fade" id="delete{{$item->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            Do you want to delete the category {{$item->name}} with all the courses above it?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <form action="{{route('employees.destroy',$item->id)}}" method="post">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-primary">Sure</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach

                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-flex justify-content-center">
                                    {{ $Employee->links() }}
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
