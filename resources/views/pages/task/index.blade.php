<?php $page = 'tasks'; ?>
@extends('layout.mainlayout')
@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Tasks</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('index')}}"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Employee
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Tasks</li>
                        </ol>
                    </nav>
                </div>
                <div class="my-xl-auto right-content d-flex">
                    <div class="mb-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_task" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Task</a>
                    </div>
                    <div class="head-icons ms-2 mb-0">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <div class="row">
                
                <div class="col-xl-12">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="d-flex align-items-center flex-wrap row-gap-3 mb-3">
                                <h6 class="me-2">Priority</h6>
                                <ul class="nav nav-pills border d-inline-flex p-1 rounded bg-light todo-tabs" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn btn-sm btn-icon py-3 d-flex align-items-center justify-content-center w-auto active" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-selected="true">All</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn btn-sm btn-icon py-3 d-flex align-items-center justify-content-center w-auto" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-selected="false" tabindex="-1">High</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn btn-sm btn-icon py-3 d-flex align-items-center justify-content-center w-auto" data-bs-toggle="pill" data-bs-target="#pills-medium" type="button" role="tab" aria-selected="false" tabindex="-1">Medium</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn btn-sm btn-icon py-3 d-flex align-items-center justify-content-center w-auto" data-bs-toggle="pill" data-bs-target="#pills-low" type="button" role="tab" aria-selected="false" tabindex="-1">Low</button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="d-flex align-items-center justify-content-lg-end flex-wrap row-gap-3 mb-3">
                                <div class="input-icon w-120 position-relative me-2">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                    <input type="text" class="form-control datetimepicker" placeholder="Due Date">
                                </div>
                                <div class="dropdown me-2">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        All Tags
                                    </a>
                                    <ul class="dropdown-menu  dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">All Tags</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Internal</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Projects</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Meetings</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Reminder</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Research</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center">
                                    <span class="d-inline-flex me-2">Sort By : </span>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center border-0 bg-transparent p-0 text-dark" data-bs-toggle="dropdown">
                                            Created Date
                                        </a>
                                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Created Date</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Priority</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Due Date</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="custom-datatable-filter table-responsive">
                            <table class="table emp-datatable">
                                <thead class="thead-light">
                                    <tr>
                                        
                                        <th>Task Name</th>
                                        <th>Assignor</th>
                                        <th>Assignee</th>
                                        <th>Task date</th>
                                        <th>Due Date</th>
                                        <th>Link 1</th>
                                        <th>Link 2</th>
                                        <th>Priority</th>
                                        <th>Status</th> 
                                         <th></th>
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
        <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
            <p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
            <p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
        </div>
    </div>
    <!-- /Page Wrapper -->

  <!-- Add Task -->
  <div class="modal fade" id="add_task">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add New Task  </h4>
                <button type="button" class="btn-close custom-btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ti ti-x"></i>
                </button>
            </div>
            <form action="{{route('task.add')}}" method="post" class="formsubmit">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">Task Name</label>
                                <input type="text" class="form-control" name="task_name" id="task_name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Due Date</label>
                                <div class="input-icon-end position-relative">
                                    <input type="text" class="form-control datetimepicker" name="due_date" id="due_date" placeholder="dd/mm/yyyy">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar text-gray-7"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label me-2">Assinger</label>
                                <select class="form-control" name="assignor_user_id"  id="assignor_user_id">
                                    <option value="">--selected--</option>
                                    @foreach($assigner as $key=>$value)
                                    <option value="{{$value->id}}">{{$value->full_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label me-2">Assignee</label>
                                <select class="select" name="assignee_user_id"  id="assignee_user_id" placeholder="Add new" >
                                    <option>Select</option>
                                    @foreach($assignee as $keyA=>$valueA)
                                    <option value="{{$valueA->id}}">{{$valueA->full_name}}</option>
                                    @endforeach
                                </select>
                                {{-- <input class="input-tags form-control" name="assignee_user_id"  id="assignee_user_id" placeholder="Add new" type="text" data-role="tagsinput" name="Label" value="Jerald,Andrew,Philip,Davis"> --}}
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="select" name="status" id="status">
                                    <option>Select</option>
                                    <option>Inprogress</option>
                                    <option>Completed</option>
                                    <option>Pending</option>
                                    <option>Onhold</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Priority</label>
                                <select class="select"  name="priority" id="priority">
                                    <option value="">Select</option>
                                    <option  value="medium">Medium</option>
                                    <option  value="high">High</option>
                                    <option  value="low">Low</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Descriptions</label>
                                <div class="summernote"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Link 1</label>
                                <input type="text" class="form-control" name="link_1" id="link_1">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label class="form-label">Link 2</label>
                                <input type="text" class="form-control" name="link_2" id="link_2">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">Upload Attachment</label>
                            <div class="bg-light rounded p-2">
                                <div class="profile-uploader border-bottom mb-2 pb-2">
                                    <div class="drag-upload-btn btn btn-sm btn-white border px-3">
                                        Select File
                                        <input type="file" class="form-control image-sign" name="task_image" id="task_image" multiple="">
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-bottom mb-2 pb-2">
                                    <div class="d-flex align-items-center">
                                        <h6 class="fs-12 fw-medium me-1">Logo.zip</h6>
                                        <span class="badge badge-soft-info">21MB </span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <h6 class="fs-12 fw-medium me-1">Files.zip</h6>
                                        <span class="badge badge-soft-info">25MB </span>
                                    </div>
                                    <a href="#" class="btn btn-sm btn-icon"><i class="ti ti-trash"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light me-2" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add New Task</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- /Add Task -->
@endsection
@push('scripts')
<script type="text/javascript">
    console.log("sdsd");
    $(function() {
        var table = $('.emp-datatable').DataTable({ 
            processing: true,
            serverSide: true,
            autoWidth: false,
            searching: true,
            ajax: {
                "url": "{{ route('task.list') }}",
                "type": "get",
                "data": function(d) {}
            },
            error: function(xhr, textStatus, errorThrown) {
                console.log('Ajax error:', errorThrown);
            },
            columns: [
                {
                    data: 'id',
                    name: 'id',
                    width: '10%'
                },
                {
                    data: 'employee_id',
                    name: 'employee_id',
                    width: '10%'
                },
                {
                    data: 'name',
                    name: 'name',
                    width: '10%'
                },
                {
                    data: 'email',
                    name: 'email',
                    width: '10%'
                },
                {
                    data: 'phone',
                    name: 'phone',
                    width: '10%'
                },
                {
                    data: 'designation',
                    name: 'designation',
                    width: '10%'
                },
                {
                    data: 'department',
                    name: 'department',
                    width: '10%'
                },
                {
                    data: 'date_joined',
                    name: 'date_joined',
                    width: '10%'
                },
                {
                    data: 'status',
                    name: 'status',
                    width: '10%'
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true,
                    width: '8%'
                }
            ],
            order: [
                [0, 'desc']
            ],
            pageLength: 10,
            bSort: false
        });

    });
</script>
@endpush