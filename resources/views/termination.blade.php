<?php $page = 'termination'; ?>
@extends('layout.mainlayout')
@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Termination</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{url('index')}}"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Performance
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Termination</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    
                    <div class="mb-2">
                        <a href="#" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#new_termination"><i class="ti ti-circle-plus me-2"></i>Add Termination</a>
                    </div>
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <!-- Termination List -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                            <h5 class="d-flex align-items-center">Termination List</h5>
                            <div class="d-flex align-items-center flex-wrap row-gap-3">
                                <div class="input-icon position-relative me-2">
                                    <span class="input-icon-addon">
                                        <i class="ti ti-calendar"></i>
                                    </span>
                                    <input type="text" class="form-control date-range bookingrange" placeholder="dd/mm/yyyy - dd/mm/yyyy ">
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-white d-inline-flex align-items-center fs-12" data-bs-toggle="dropdown">
                                        <p class="fs-12 d-inline-flex me-1">Sort By : </p>
                                        Last 7 Days
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
                                            <th>Resigning Employee</th>
                                            <th>Department</th>
                                            <th>Termination Type</th>
                                            <th>Notice Date</th>
                                            <th>Reason</th>
                                            <th>Resignation Date</th>
                                            <th></th>
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
                                                    <a href="{{url('invoice-details')}}" class="avatar avatar-md me-2">
                                                        <img src="{{ URL::asset('build/img/users/user-32.jpg') }}" class="rounded-circle" alt="user">
                                                    </a>
                                                    <h6 class="fw-medium"><a href="{{url('invoice-details')}}">Anthony Lewis</a></h6>
                                                </div>
                                            </td>
                                            <td>Finance</td>
                                            <td>Retirement</td>
                                            <td>14 Jan 2024</td>
                                            <td>Employee retires</td>
                                            <td>14 Mar 2024</td>
                                            <td>
                                                <div class="action-icon d-inline-flex">
                                                    <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_termination"><i class="ti ti-edit"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                </div>
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
                                                    <a href="{{url('invoice-details')}}" class="avatar avatar-md me-2">
                                                        <img src="{{ URL::asset('build/img/users/user-09.jpg') }}" class="rounded-circle" alt="user">
                                                    </a>
                                                    <h6 class="fw-medium"><a href="{{url('invoice-details')}}">Brian Villalobos</a></h6>
                                                </div>
                                            </td>
                                            <td>Application Development</td>
                                            <td>Insubordination</td>
                                            <td>21 Jan 2024</td>
                                            <td>Entrepreneurial Pursuits</td>
                                            <td>21 Mar 2024</td>
                                            <td>
                                                <div class="action-icon d-inline-flex">
                                                    <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_termination"><i class="ti ti-edit"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                </div>
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
                                                    <a href="{{url('invoice-details')}}" class="avatar avatar-md me-2">
                                                        <img src="{{ URL::asset('build/img/users/user-01.jpg') }}" class="rounded-circle" alt="user">
                                                    </a>
                                                    <h6 class="fw-medium"><a href="{{url('invoice-details')}}">Harvey Smith</a></h6>
                                                </div>
                                            </td>
                                            <td>Web Development</td>
                                            <td>Layoff</td>
                                            <td>18 Feb 2024</td>
                                            <td>Workforce reduction</td>
                                            <td>18 Apr 2024</td>
                                            <td>
                                                <div class="action-icon d-inline-flex">
                                                    <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_termination"><i class="ti ti-edit"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                </div>
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
                                                    <a href="{{url('invoice-details')}}" class="avatar avatar-md me-2">
                                                        <img src="{{ URL::asset('build/img/users/user-33.jpg') }}" class="rounded-circle" alt="user">
                                                    </a>
                                                    <h6 class="fw-medium"><a href="{{url('invoice-details')}}">Stephan Peralt</a></h6>
                                                </div>
                                            </td>
                                            <td>UI / UX</td>
                                            <td>Breach of Contract</td>
                                            <td>14 Mar 2024</td>
                                            <td>Violates the terms of the contract</td>
                                            <td>14 Apr 2024</td>
                                            <td>
                                                <div class="action-icon d-inline-flex">
                                                    <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_termination"><i class="ti ti-edit"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                                </div>
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
                                                    <a href="{{url('invoice-details')}}" class="avatar avatar-md me-2">
                                                        <img src="{{ URL::asset('build/img/users/user-34.jpg') }}" class="rounded-circle" alt="user">
                                                    </a>
                                                    <h6 class="fw-medium"><a href="{{url('invoice-details')}}">Doglas Martini</a></h6>
                                                </div>
                                            </td>
                                            <td>Marketing</td>
                                            <td>Lack of Skills</td>
                                            <td>10 Apr 2024</td>
                                            <td>Unable to perform job duties</td>
                                            <td>10 Jun 2024</td>
                                            <td>
                                                <div class="action-icon d-inline-flex">
                                                    <a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_termination"><i class="ti ti-edit"></i></a>
                                                    <a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
            <!-- /Termination List  -->
        </div>

        <!-- Footer -->
        <div class="footer d-sm-flex align-items-center justify-content-between bg-white border-top p-3">
            <p class="mb-0">2014 - 2025 &copy; SmartHR.</p>
            <p>Designed &amp; Developed By <a href="#" class="text-primary">Dreams</a></p>
        </div>
        <!-- /Footer -->
    </div>

    <!-- /Page Wrapper -->

    @component('components.modal-popup')
    @endcomponent

@endsection