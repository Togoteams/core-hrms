<?php $page = 'budgets-expenses'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Budget Expenses</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('index') }}"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                HR
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Budget Expenses</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
                    <div class="mb-2">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_new_expense"
                            class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add
                            Expense</a>
                    </div>
                    <div class="ms-2 head-icons">
                        <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top"
                            data-bs-original-title="Collapse" id="collapse-header">
                            <i class="ti ti-chevrons-up"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Breadcrumb -->

            <!-- Budgets list -->
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h5>Budget Expenses List</h5>
                    <div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
                        <div class="dropdown">
                            <a href="javascript:void(0);"
                                class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center"
                                data-bs-toggle="dropdown">
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
                                    <th>Expense Name</th>
                                    <th>Category Name</th>
                                    <th>Sub Category Name</th>
                                    <th>Amount</th>
                                    <th>Expense Date</th>
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
                                        <h6 class="fw-medium"><a href="javascript:void(0);">Servers</a></h6>
                                    </td>
                                    <td>
                                        Technology
                                    </td>
                                    <td>
                                        Hardware Cost
                                    </td>
                                    <td>
                                        20000
                                    </td>
                                    <td>
                                        14 Jan 2024
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal"
                                                data-bs-target="#edit_new_expense"><i class="ti ti-edit"></i></a>
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
                                        <h6 class="fw-medium"><a href="javascript:void(0);">Payroll Tax</a></h6>
                                    </td>
                                    <td>
                                        Taxes
                                    </td>
                                    <td>
                                        Payroll Taxes
                                    </td>
                                    <td>
                                        40000
                                    </td>
                                    <td>
                                        21 Jan 2024
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal"
                                                data-bs-target="#edit_new_expense"><i class="ti ti-edit"></i></a>
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
                                        <h6 class="fw-medium"><a href="javascript:void(0);">Job Fair 2024</a></h6>
                                    </td>
                                    <td>
                                        Recruitment
                                    </td>
                                    <td>
                                        Advertisement
                                    </td>
                                    <td>
                                        10000
                                    </td>
                                    <td>
                                        10 Feb 2024
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal"
                                                data-bs-target="#edit_new_expense"><i class="ti ti-edit"></i></a>
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
                                        <h6 class="fw-medium"><a href="javascript:void(0);">Annual Meet</a></h6>
                                    </td>
                                    <td>
                                        Corporate Events
                                    </td>
                                    <td>
                                        Decorations
                                    </td>
                                    <td>
                                        20000
                                    </td>
                                    <td>
                                        18 Feb 2024
                                    </td>
                                    <td>
                                        <div class="action-icon d-inline-flex">
                                            <a href="#" class="me-2" data-bs-toggle="modal"
                                                data-bs-target="#edit_new_expense"><i class="ti ti-edit"></i></a>
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
            <!-- /Budgets list -->

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
