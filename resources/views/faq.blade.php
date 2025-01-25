<?php $page = 'faq'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Faq</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('index') }}"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Content
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Faq</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
                    <div class="me-2 mb-2">
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                <i class="ti ti-file-export me-1"></i>Export
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                            class="ti ti-file-type-pdf me-1"></i>Export as PDF</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1"><i
                                            class="ti ti-file-type-xls me-1"></i>Export as Excel </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="mb-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_faq"
                            class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add
                            Faq</a>
                    </div>
                    <div class="head-icons ms-2">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h5>FAQ List</h5>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                        <div class="me-3">
                            <div class="input-icon-end position-relative">
                                <input type="text" class="form-control date-range bookingrange"
                                    placeholder="dd/mm/yyyy - dd/mm/yyyy">
                                <span class="input-icon-addon">
                                    <i class="ti ti-chevron-down"></i>
                                </span>
                            </div>
                        </div>
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
                                Category
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end p-3">
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">General</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Feature</a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="dropdown-item rounded-1">Employee</a>
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
                                    <th>Questions</th>
                                    <th>Answers</th>
                                    <th>Categories</th>
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
                                        <h6 class="fw-medium"><a href="#">What is an HRMS?</a></h6>
                                    </td>
                                    <td>Software system that automates and manages various human resources tasks</td>
                                    <td>General</td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                class="me-2"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
                                        <h6 class="fw-medium"><a href="#">How does an HRMS benefit organizations?</a>
                                        </h6>
                                    </td>
                                    <td>It enhances operational efficiency, reduces manual errors, and centralizes HR tasks
                                    </td>
                                    <td>General</td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                class="me-2"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
                                        <h6 class="fw-medium"><a href="#">Is the data stored in an SmartHR
                                                secure?</a></h6>
                                    </td>
                                    <td>Yes, SmartHR is design with advanced security measures, including data encryption
                                    </td>
                                    <td>Feature</td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                class="me-2"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
                                        <h6 class="fw-medium"><a href="#">How do I add a new employee to the
                                                HRMS?</a></h6>
                                    </td>
                                    <td>Add new employees by entering their personal details & setting up their profiles.
                                    </td>
                                    <td>Employee</td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                class="me-2"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
                                        <h6 class="fw-medium"><a href="#">How do I generate custom reports in the
                                                SmartHR?</a></h6>
                                    </td>
                                    <td>Custom reports can be generated using the reporting module within the HRMS</td>
                                    <td>Reports</td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                class="me-2"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
                                        <h6 class="fw-medium"><a href="#">How do I schedule training sessions in the
                                                HRMS?</a></h6>
                                    </td>
                                    <td>Creating training events, setting dates and times, and enrolling employees</td>
                                    <td>Leaves</td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                class="me-2"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
                                        <h6 class="fw-medium"><a href="#">How do I process payroll in the
                                                SmartHR?</a></h6>
                                    </td>
                                    <td>Reviewing employee hours and deductions and executing payments.</td>
                                    <td>Payroll</td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                class="me-2"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
                                        <h6 class="fw-medium"><a href="#">How do I export reports from the HRMS?</a>
                                        </h6>
                                    </td>
                                    <td>Export reports by selecting the desired report format and using the export function
                                    </td>
                                    <td>Reports</td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                class="me-2"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
                                        <h6 class="fw-medium"><a href="#">Can I track employee attendance and
                                                absences?</a></h6>
                                    </td>
                                    <td>Yes, track attendance and absences by using the attendance management</td>
                                    <td>Employee</td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                class="me-2"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
                                        <h6 class="fw-medium"><a href="#">Can I track employee attendance and
                                                absences?</a></h6>
                                    </td>
                                    <td>Yes, track attendance and absences by using the attendance management</td>
                                    <td>Employee</td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                class="me-2"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
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
                                        <h6 class="fw-medium"><a href="#">How can I assign a ticket to a specific
                                                team member?</a></h6>
                                    </td>
                                    <td>Assign a ticket by selecting the ticket from the queue, choosing the team member
                                    </td>
                                    <td>Tickets</td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#edit_faq"
                                                class="me-2"><i class="ti ti-edit"></i></a>
                                            <a href="javascript:void(0);" data-bs-toggle="modal"
                                                data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
                                        </div>
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
    @component('components.modal-popup')
    @endcomponent
@endsection
