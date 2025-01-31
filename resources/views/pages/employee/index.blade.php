<?php $page = 'employees'; ?>
@extends('layout.mainlayout')
@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Employee</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('index')}}"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Employee
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Employee List</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="me-2 mb-2">
                        <div class="d-flex align-items-center border bg-white rounded p-1 me-2 icon-list">
                            <a href="{{url('employees')}}" class="btn btn-icon btn-sm active bg-primary text-white me-1"><i class="ti ti-list-tree"></i></a>
                            <a href="{{url('employees-grid')}}" class="btn btn-icon btn-sm"><i class="ti ti-layout-grid"></i></a>
                        </div>
                    </div>
                    <div class="me-2 mb-2">
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                <i class="ti ti-file-export me-1"></i>Export
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_employee" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Employee</a>
                    </div>
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <div class="row">

                <!-- Total Plans -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center overflow-hidden">
                                <div>
                                    <span class="avatar avatar-lg bg-dark rounded-circle"><i class="ti ti-users"></i></span>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <p class="fs-12 fw-medium mb-1 text-truncate">Total Employee</p>
                                    <h4>1007</h4>
                                </div>
                            </div>
                            <div>                                    
                                <span class="badge badge-soft-purple badge-sm fw-normal">
                                    <i class="ti ti-arrow-wave-right-down"></i>
                                    +19.01%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Total Plans -->

                <!-- Total Plans -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center overflow-hidden">
                                <div>
                                    <span class="avatar avatar-lg bg-success rounded-circle"><i class="ti ti-user-share"></i></span>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <p class="fs-12 fw-medium mb-1 text-truncate">Active</p>
                                    <h4>1007</h4>
                                </div>
                            </div>
                            <div>                                    
                                <span class="badge badge-soft-primary badge-sm fw-normal">
                                    <i class="ti ti-arrow-wave-right-down"></i>
                                    +19.01%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Total Plans -->

                <!-- Inactive Plans -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center overflow-hidden">
                                <div>
                                    <span class="avatar avatar-lg bg-danger rounded-circle"><i class="ti ti-user-pause"></i></span>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <p class="fs-12 fw-medium mb-1 text-truncate">InActive</p>
                                    <h4>1007</h4>
                                </div>
                            </div>
                            <div>                                    
                                <span class="badge badge-soft-dark badge-sm fw-normal">
                                    <i class="ti ti-arrow-wave-right-down"></i>
                                    +19.01%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Inactive Companies -->

                <!-- No of Plans  -->
                <div class="col-lg-3 col-md-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center overflow-hidden">
                                <div>
                                    <span class="avatar avatar-lg bg-info rounded-circle"><i class="ti ti-user-plus"></i></span>
                                </div>
                                <div class="ms-2 overflow-hidden">
                                    <p class="fs-12 fw-medium mb-1 text-truncate">New Joiners</p>
                                    <h4>67</h4>
                                </div>
                            </div>
                            <div>                                    
                                <span class="badge badge-soft-secondary badge-sm fw-normal">
                                    <i class="ti ti-arrow-wave-right-down"></i>
                                    +19.01%
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /No of Plans -->

            </div>

            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h5>Plan List</h5>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                        <div class="me-3">
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                <span class="input-icon-addon">
                                    <i class="ti ti-chevron-down"></i>
                                </span>
                            </div>
                        </div>
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Designation
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Finance</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Developer</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Executive</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown me-3">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Select Status
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Active</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Inactive</a>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                Sort By : Last 7 Days
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="custom-datatable-filter table-responsive">
                        <table class="table emp-datatable">
                            <thead class="thead-light">
                                <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>Emp ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Designation</th>
                                    <th>Department</th>
                                    <th>Joining Date</th>
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

        <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
            <p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
            <p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">Dreams</a></p>
        </div>

    </div>
    <!-- /Page Wrapper -->

    @component('components.modal-popup')
    @endcomponent

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
                "url": "{{ route('employee.list') }}",
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