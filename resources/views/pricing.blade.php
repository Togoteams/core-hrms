<?php $page = 'pricing'; ?>
@extends('layout.mainlayout')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="my-auto mb-2">
                    <h2 class="mb-1">Pricing</h2>
                    <nav>
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ url('index') }}"><i class="ti ti-smart-home"></i></a>
                            </li>
                            <li class="breadcrumb-item">
                                Pages
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                        </ol>
                    </nav>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
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
                        <a href="#" class="btn btn-primary d-flex align-items-center" data-bs-toggle="modal"
                            data-bs-target="#add_plans">
                            <i class="ti ti-circle-plus me-2"></i>Add Plan
                        </a>
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

            <!-- Pricing -->
            <div class="card">
                <div class="card-body pb-1">
                    <div class="d-flex justify-content-center align-items-center mb-4">
                        <p class="mb-0 me-2">Monthly</p>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                        </div>
                        <p>Yearly</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4>Basic</h4>
                                            <h1>$50<span class="fs-14 fw-normal text-gray">/monthly</span></h1>
                                        </div>
                                    </div>
                                    <div class="pricing-content rounded bg-light mb-3">
                                        <div class="price-hdr">
                                            <h6 class="fs-14 fw-medium text-gray w-100">Features Includes</h6>
                                        </div>
                                        <div>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>10
                                                Employees</span>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>50
                                                Projects</span>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>50
                                                Clients</span>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>50 GB
                                                Storage</span>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-circle-x-filled text-danger me-2"></i>Voice & Video
                                                Chat</span>
                                            <span class="text-dark d-flex align-items-center"><i
                                                    class="ti ti-circle-x-filled text-danger me-2"></i>CRM</span>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-dark w-100">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4>Professional</h4>
                                            <h1>$100<span class="fs-14 fw-normal text-gray">/monthly</span></h1>
                                        </div>
                                    </div>
                                    <div class="pricing-content rounded bg-light mb-3">
                                        <div class="price-hdr">
                                            <h6 class="fs-14 fw-medium text-gray w-100">Features Includes</h6>
                                        </div>
                                        <div>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>50
                                                Employees</span>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>100
                                                Projects</span>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>100
                                                Clients</span>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>50 GB
                                                Storage</span>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>Voice & Video
                                                Chat</span>
                                            <span class="text-dark d-flex align-items-center"><i
                                                    class="ti ti-circle-x-filled text-danger me-2"></i>CRM</span>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-dark w-100">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-body">
                                            <h4>Enterprise</h4>
                                            <h1>$200<span class="fs-14 fw-normal text-gray">/monthly</span></h1>
                                        </div>
                                    </div>
                                    <div class="pricing-content rounded bg-light mb-3">
                                        <div class="price-hdr">
                                            <h6 class="fs-14 fw-medium text-gray w-100">Features Includes</h6>
                                        </div>
                                        <div>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>100
                                                Employees</span>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>200
                                                Projects</span>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>200
                                                Clients</span>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>Unlimited
                                                Storage</span>
                                            <span class="text-dark d-flex align-items-center mb-3"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>Voice & Video
                                                Chat</span>
                                            <span class="text-dark d-flex align-items-center"><i
                                                    class="ti ti-discount-check-filled text-success me-2"></i>CRM</span>
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-dark w-100">Choose Plan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Pricing -->

            <!-- Pricing Table -->
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                    <h5>Plan Details</h5>
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
                                    <th>Plan</th>
                                    <th>Plan Type</th>
                                    <th>Created Date</th>
                                    <th>Modified Date</th>
                                    <th>Amount</th>
                                    <th>Subscribed Users</th>
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
                                        <h6 class="fw-medium"><a href="#">Basic</a></h6>
                                    </td>
                                    <td>Monthly</td>
                                    <td>14 Jan 2024</td>
                                    <td>20 Feb 2024</td>
                                    <td>$50</td>
                                    <td>30 Users</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="fw-medium"><a href="#">Professional</a></h6>
                                    </td>
                                    <td>Monthly</td>
                                    <td>21 Feb 2024</td>
                                    <td>11 Mar 2024</td>
                                    <td>$100</td>
                                    <td>40 Users</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check form-check-md">
                                            <input class="form-check-input" type="checkbox">
                                        </div>
                                    </td>
                                    <td>
                                        <h6 class="fw-medium"><a href="#">Enterprise</a></h6>
                                    </td>
                                    <td>Monthly</td>
                                    <td>18 Mar 2024</td>
                                    <td>05 Apr 2024</td>
                                    <td>$200</td>
                                    <td>50 Users</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- /Pricing Table -->
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