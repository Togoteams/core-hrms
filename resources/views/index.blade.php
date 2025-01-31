<?php $page = 'index'; ?>
@extends('layout.mainlayout')
@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">HR Dashboard</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('index')}}"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Dashboard
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
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
                        <div class="input-icon w-120 position-relative">
                            <span class="input-icon-addon">
                                <i class="ti ti-calendar text-gray-9"></i>
                            </span>
                            <input type="text" class="form-control yearpicker" value="2025">
                        </div>
                    </div>
                    <div class="ms-2 head-icons">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <!-- Welcome Wrap -->
            <div class="card border-0">
                <div class="card-body d-flex align-items-center justify-content-between flex-wrap pb-1">
                    <div class="d-flex align-items-center mb-3">
                        <span class="avatar avatar-xl flex-shrink-0">
                            <img src="{{ URL::asset('build/img/profiles/avatar-31.jpg') }}" class="rounded-circle" alt="img">
                        </span>
                        <div class="ms-3">
                            <h3 class="mb-2">Welcome Back, {{auth()->user()->full_name}} <a href="javascript:void(0);" class="edit-icon"><i class="ti ti-edit fs-14"></i></a></h3>
                            <!--<p>You have <span class="text-primary text-decoration-underline">21</span> Pending Approvals & <span class="text-primary text-decoration-underline">14</span> Leave Requests</p>-->
                        </div>
                    </div>
                    <!--<div class="d-flex align-items-center flex-wrap mb-1">-->
                    <!--    <a href="#" class="btn btn-secondary btn-md me-2 mb-2" data-bs-toggle="modal" data-bs-target="#add_project"><i class="ti ti-square-rounded-plus me-1"></i>Add Project</a>-->
                    <!--    <a href="#" class="btn btn-primary btn-md mb-2" data-bs-toggle="modal" data-bs-target="#add_leaves"><i class="ti ti-square-rounded-plus me-1"></i>Add Requests</a>-->
                    <!--</div>-->
                </div>
            </div>
            <!-- /Welcome Wrap -->

            <div class="row">

                <!-- Widget Info -->
                <div class="col-xxl-8 d-flex">
                    <div class="row flex-fill">

                        <div class="col-md-3 d-flex">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <span class="avatar rounded-circle bg-secondary mb-2">
                                        <i class="ti ti-browser fs-16"></i>
                                    </span>
                                    <h6 class="fs-13 fw-medium text-default mb-1">Total No of Project's</h6>
                                    <h3 class="mb-3">90/125 <span class="fs-12 fw-medium text-danger"><i class="fa-solid fa-caret-down me-1"></i>-2.1%</span></h3>
                                    <a href="{{url('projects')}}" class="link-default">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <span class="avatar rounded-circle bg-info mb-2">
                                        <i class="ti ti-users-group fs-16"></i>
                                    </span>
                                    <h6 class="fs-13 fw-medium text-default mb-1">Total No of Clients</h6>
                                    <h3 class="mb-3">69/86 <span class="fs-12 fw-medium text-danger"><i class="fa-solid fa-caret-down me-1"></i>-11.2%</span></h3>
                                    <a href="{{url('clients')}}" class="link-default">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <span class="avatar rounded-circle bg-pink mb-2">
                                        <i class="ti ti-checklist fs-16"></i>
                                    </span>
                                    <h6 class="fs-13 fw-medium text-default mb-1">Total No of Tasks</h6>
                                    <h3 class="mb-3">225/28 <span class="fs-12 fw-medium text-success"><i class="fa-solid fa-caret-down me-1"></i>+11.2%</span></h3>
                                    <a href="{{url('tasks')}}" class="link-default">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <span class="avatar rounded-circle bg-purple mb-2">
                                        <i class="ti ti-moneybag fs-16"></i>
                                    </span>
                                    <h6 class="fs-13 fw-medium text-default mb-1">Earnings</h6>
                                    <h3 class="mb-3">$21445 <span class="fs-12 fw-medium text-success"><i class="fa-solid fa-caret-up me-1"></i>+10.2%</span></h3>
                                    <a href="{{url('expenses')}}" class="link-default">View All</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 d-flex">
                            <div class="card flex-fill">
                                <div class="card-body">
                                    <span class="avatar rounded-circle bg-danger mb-2">
                                        <i class="ti ti-browser fs-16"></i>
                                    </span>
                                    <h6 class="fs-13 fw-medium text-default mb-1">Profit This Week</h6>
                                    <h3 class="mb-3">$5,544 <span class="fs-12 fw-medium text-success"><i class="fa-solid fa-caret-up me-1"></i>+2.1%</span></h3>
                                    <a href="{{url('purchase-transaction')}}" class="link-default">View All</a>
                                </div>
                            </div>
                        </div>
                      
                       
                    </div>
                </div>
                <!-- /Widget Info -->

                <!-- Employees By Department -->
                <div class="col-xxl-4 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                            <h5 class="mb-2">Employees By Department</h5>
                            <div class="dropdown mb-2">
                                <a href="javascript:void(0);" class="btn btn-white border btn-sm d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                    <i class="ti ti-calendar me-1"></i>This Week
                                </a>
                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Week</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="emp-department"></div>
                            <p class="fs-13"><i class="ti ti-circle-filled me-2 fs-8 text-primary"></i>No of
                                Employees increased by <span class="text-success fw-bold">+20%</span> from last Week
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /Employees By Department -->

            </div>




            <div class="row">
                

            </div>

            <div class="row">
                
                <!-- Projects -->
                <div class="col-xxl-12 col-xl-7 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                            <h5 class="mb-2">Projects</h5>
                            <div class="d-flex align-items-center">
                                <div class="dropdown mb-2">
                                    <a href="javascript:void(0);" class="btn btn-white border btn-sm d-inline-flex align-items-center"  data-bs-toggle="dropdown">
                                        <i class="ti ti-calendar me-1"></i>This Week
                                    </a>
                                    <ul class="dropdown-menu  dropdown-menu-end p-3">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">This Month</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">This Week</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Today</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">	
                                <table class="table table-nowrap mb-0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Team</th>
                                            <th>Hours</th>
                                            <th>Deadline</th>
                                            <th>Priority</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="{{url('project-details')}}" class="link-default">PRO-001</a></td>
                                            <td><h6 class="fw-medium"><a href="{{url('project-details')}}">Office Management App</a></h6></td>
                                            <td>
                                                <div class="avatar-list-stacked avatar-group-sm">
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-02.jpg') }}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-03.jpg') }}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-05.jpg') }}" alt="img">
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-1">15/255 Hrs</p>
                                                <div class="progress progress-xs w-100" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 40%"></div>
                                                </div>
                                            </td>
                                            <td>12 Sep 2024</td>
                                            <td>
                                                <span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                                                    <i class="ti ti-point-filled me-1"></i>High
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('project-details')}}" class="link-default">PRO-002</a></td>
                                            <td><h6 class="fw-medium"><a href="{{url('project-details')}}">Clinic Management </a></h6></td>
                                            <td>
                                                <div class="avatar-list-stacked avatar-group-sm">
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-06.jpg') }}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-07.jpg') }}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-08.jpg') }}" alt="img">
                                                    </span>
                                                    <a class="avatar bg-primary avatar-rounded text-fixed-white fs-10 fw-medium" href="javascript:void(0);">
                                                        +1
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-1">15/255 Hrs</p>
                                                <div class="progress progress-xs w-100" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 40%"></div>
                                                </div>
                                            </td>
                                            <td>24 Oct 2024</td>
                                            <td>
                                                <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                                    <i class="ti ti-point-filled me-1"></i>Low
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('project-details')}}" class="link-default">PRO-003</a></td>
                                            <td><h6 class="fw-medium"><a href="{{url('project-details')}}">Educational Platform</a></h6></td>
                                            <td>
                                                <div class="avatar-list-stacked avatar-group-sm">
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-06.jpg') }}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-08.jpg') }}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-09.jpg') }}" alt="img">
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-1">40/255 Hrs</p>
                                                <div class="progress progress-xs w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 50%"></div>
                                                </div>
                                            </td>
                                            <td>18 Feb 2024</td>
                                            <td>
                                                <span class="badge badge-pink d-inline-flex align-items-center badge-xs">
                                                    <i class="ti ti-point-filled me-1"></i>Medium
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('project-details')}}" class="link-default">PRO-004</a></td>
                                            <td><h6 class="fw-medium"><a href="{{url('project-details')}}">Chat & Call Mobile App</a></h6></td>
                                            <td>
                                                <div class="avatar-list-stacked avatar-group-sm">
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-11.jpg') }}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-12.jpg') }}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-13.jpg') }}" alt="img">
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-1">35/155 Hrs</p>
                                                <div class="progress progress-xs w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 50%"></div>
                                                </div>
                                            </td>
                                            <td>19 Feb 2024</td>
                                            <td>
                                                <span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                                                    <i class="ti ti-point-filled me-1"></i>High
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('project-details') }}" class="link-default">PRO-005</a></td>
                                            <td><h6 class="fw-medium"><a href="{{url('project-details')}}">Travel Planning Website</a></h6></td>
                                            <td>
                                                <div class="avatar-list-stacked avatar-group-sm">
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-17.jpg') }}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-18.jpg') }}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-19.jpg') }}" alt="img">
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-1">50/235 Hrs</p>
                                                <div class="progress progress-xs w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 50%"></div>
                                                </div>
                                            </td>
                                            <td>18 Feb 2024</td>
                                            <td>
                                                <span class="badge badge-pink d-inline-flex align-items-center badge-xs">
                                                    <i class="ti ti-point-filled me-1"></i>Medium
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><a href="{{url('project-details')}}" class="link-default">PRO-006</a></td>
                                            <td><h6 class="fw-medium"><a href="{{url('project-details')}}">Service Booking Software</a></h6></td>
                                            <td>
                                                <div class="avatar-list-stacked avatar-group-sm">
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-06.jpg') }}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-08.jpg') }}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-09.jpg') }}" alt="img">
                                                    </span>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-1">40/255 Hrs</p>
                                                <div class="progress progress-xs w-100" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 50%"></div>
                                                </div>
                                            </td>
                                            <td>20 Feb 2024</td>
                                            <td>
                                                <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                                    <i class="ti ti-point-filled me-1"></i>Low
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="border-0"><a href="{{url('project-details')}}" class="link-default">PRO-008</a></td>
                                            <td class="border-0"><h6 class="fw-medium"><a href="{{url('project-details')}}">Travel Planning Website</a></h6></td>
                                            <td class="border-0">
                                                <div class="avatar-list-stacked avatar-group-sm">
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-15.jpg') }}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-16.jpg') }}" alt="img">
                                                    </span>
                                                    <span class="avatar avatar-rounded">
                                                        <img class="border border-white" src="{{ URL::asset('build/img/profiles/avatar-17.jpg') }}" alt="img">
                                                    </span>
                                                    <a class="avatar bg-primary avatar-rounded text-fixed-white fs-10 fw-medium" href="javascript:void(0);">
                                                        +2
                                                    </a>
                                                </div>
                                            </td>
                                            <td class="border-0">
                                                <p class="mb-1">15/255 Hrs</p>
                                                <div class="progress progress-xs w-100" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary" style="width: 45%"></div>
                                                </div>
                                            </td>
                                            <td class="border-0">17 Oct 2024</td>
                                            <td class="border-0">
                                                <span class="badge badge-pink d-inline-flex align-items-center badge-xs">
                                                    <i class="ti ti-point-filled me-1"></i>Medium
                                                </span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Projects -->

 
                <!-- /Tasks Statistics -->

            </div>

            <div class="row">



                <!-- Birthdays -->
                <div class="col-xxl-12 col-xl-6 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header pb-2 d-flex align-items-center justify-content-between flex-wrap">
                            <h5 class="mb-2">Birthdays</h5>
                            <a href="javascript:void(0);" class="btn btn-light btn-md mb-2">View All</a>
                        </div>
                        <div class="card-body pb-1">
                            <h6 class="mb-2">Today</h6>
                            <div class="bg-light p-2 border border-dashed rounded-top mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar">
                                            <img src="{{ URL::asset('build/img/users/user-38.jpg') }}" class="rounded-circle" alt="img">
                                        </a>
                                        <div class="ms-2 overflow-hidden">
                                            <h6 class="fs-medium ">Andrew Jermia</h6>
                                            <p class="fs-13">IOS Developer</p>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-secondary btn-xs"><i class="ti ti-cake me-1"></i>Send</a>
                                </div>
                            </div>
                            <h6 class="mb-2">Tomorow</h6>
                            <div class="bg-light p-2 border border-dashed rounded-top mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar">
                                            <img src="{{ URL::asset('build/img/users/user-10.jpg') }}" class="rounded-circle" alt="img">
                                        </a>
                                        <div class="ms-2 overflow-hidden">
                                            <h6 class="fs-medium"><a href="javascript:void(0);">Mary Zeen</a></h6>
                                            <p class="fs-13">UI/UX Designer</p>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-secondary btn-xs"><i class="ti ti-cake me-1"></i>Send</a>
                                </div>
                            </div>
                            <div class="bg-light p-2 border border-dashed rounded-top mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <a href="javascript:void(0);" class="avatar">
                                            <img src="{{ URL::asset('build/img/users/user-09.jpg') }}" class="rounded-circle" alt="img">
                                        </a>
                                        <div class="ms-2 overflow-hidden">
                                            <h6 class="fs-medium "><a href="javascript:void(0);">Antony Lewis</a></h6>
                                            <p class="fs-13">Android Developer</p>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-secondary btn-xs"><i class="ti ti-cake me-1"></i>Send</a>
                                </div>
                            </div>
                            <h6 class="mb-2">25 Jan 2025</h6>
                            <div class="bg-light p-2 border border-dashed rounded-top mb-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <span class="avatar">
                                            <img src="{{ URL::asset('build/img/users/user-12.jpg') }}" class="rounded-circle" alt="img">
                                        </span>
                                        <div class="ms-2 overflow-hidden">
                                            <h6 class="fs-medium ">Doglas Martini</h6>
                                            <p class="fs-13">.Net Developer</p>
                                        </div>
                                    </div>
                                    <a href="javascript:void(0);" class="btn btn-secondary btn-xs"><i class="ti ti-cake me-1"></i>Send</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Birthdays -->

            </div>

        </div>

        <div class="footer d-sm-flex align-items-center justify-content-between border-top bg-white p-3">
            <p class="mb-0">2014 - 2025 &copy; 5CORE HR.</p>
            <p>Designed &amp; Developed By <a href="javascript:void(0);" class="text-primary">5CORE TEAM</a></p>
        </div>

    </div>
    <!-- /Page Wrapper -->

    @component('components.modal-popup')
    @endcomponent

@endsection