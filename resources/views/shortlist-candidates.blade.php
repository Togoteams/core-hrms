<?php $page = 'shortlist-candidates'; ?>
@extends('layout.mainlayout')
@section('content')

<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Shortlist Candidates</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ url('index') }}"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Administration
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Shortlist Candidates</li>
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
            </div>
        </div>
        <!-- /Breadcrumb -->

        <div class="card">
            <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                <h5>Shortlist Candidates List</h5>
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
                            Department
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Finance</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Application Development</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">IT Management</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                            Job Type
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Accountant</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">App Developer</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Technician</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                            Status
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Offered</a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown me-3">
                        <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                            Sort By : Last 7 Days
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end p-3">
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Recently Added</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Ascending</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Desending</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last Month</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="dropdown-item rounded-1">Last 7 Days</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="custom-datatable-filter table-responsive">
                    <table class="table datatable">
                        <thead class="thead-light">
                            <tr>
                                <th class="no-sort">
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox" id="select-all">
                                    </div>
                                </th>
                                <th>Name</th>
                                <th>Job Title</th>
                                <th>Department</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img
                                            src="{{ URL::asset('build/img/users/user-32.jpg') }}" class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                        <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#view_details">Anthony Lewis</a></p>
                                        <span class="fs-12">Accountant</span>
                                    </div>
                                </div>
                                </td>
                                <td>Accountant</td>
                                <td>Finance</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Offered
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img
                                            src="{{ URL::asset('build/img/users/user-09.jpg') }}" class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                        <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#view_details">Brian Villalobos</a></p>
                                        <span class="fs-12">Developer</span>
                                    </div>
                                </div>
                                </td>
                                <td>App Developer</td>
                                <td>Application Developent</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Offered
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img
                                            src="{{ URL::asset('build/img/users/user-01.jpg') }}" class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                        <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#view_details">Harvey Smith</a></p>
                                        <span class="fs-12">Technician</span>
                                    </div>
                                </div>
                                </td>
                                <td>Technician</td>
                                <td>IT Management</td>                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Offered
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img
                                            src="{{ URL::asset('build/img/users/user-33.jpg') }}" class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                        <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#view_details">Stephan Peralt</a></p>
                                        <span class="fs-12">Developer</span>
                                    </div>
                                </div>
                                </td>
                                <td>Web Developer</td>
                                <td>Web Development</td>
                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Offered
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check form-check-md">
                                        <input class="form-check-input" type="checkbox">
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="avatar avatar-md" data-bs-toggle="modal" data-bs-target="#view_details"><img
                                            src="{{ URL::asset('build/img/users/user-34.jpg') }}" class="img-fluid rounded-circle" alt="img"></a>
                                        <div class="ms-2">
                                        <p class="text-dark mb-0"><a href="#" data-bs-toggle="modal"
                                            data-bs-target="#view_details">Doglas Martini</a></p>
                                        <span class="fs-12">Designer</span>
                                    </div>
                                </div>
                                </td>
                                <td>Designer</td>
                                <td>UI / UX</td>                                <td>
                                    <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                                        <i class="ti ti-point-filled me-1"></i>Offered
                                    </span>
                                </td>
                            </tr>
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

@endsection