<?php $page = 'preferences'; ?>
@extends('layout.mainlayout')
@section('content')
<!-- Page Wrapper -->
<div class="page-wrapper">
    <div class="content">

        <!-- Breadcrumb -->
        <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
            <div class="my-auto mb-2">
                <h2 class="mb-1">Settings</h2>
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="{{ url('index') }}"><i class="ti ti-smart-home"></i></a>
                        </li>
                        <li class="breadcrumb-item">
                            Administration
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Settings</li>
                    </ol>
                </nav>
            </div>
            <div class="head-icons ms-2">
                <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                    <i class="ti ti-chevrons-up"></i>
                </a>
            </div>
        </div>
        <!-- /Breadcrumb -->

        <ul class="nav nav-tabs nav-tabs-solid bg-transparent border-bottom mb-3">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('profile-settings') }}"><i class="ti ti-settings me-2"></i>General Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('bussiness-settings') }}"><i class="ti ti-world-cog me-2"></i>Website Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('salary-settings') }}"><i class="ti ti-device-ipad-horizontal-cog me-2"></i>App Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('email-settings') }}"><i class="ti ti-server-cog me-2"></i>System Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('payment-gateways') }}"><i class="ti ti-settings-dollar me-2"></i>Financial Settings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('custom-css') }}"><i class="ti ti-settings-2 me-2"></i>Other Settings</a>
            </li>
        </ul>
        <div class="row">
            <div class="col-xl-3 theiaStickySidebar">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column list-group settings-list">
                            <a href="{{ url('business-settings') }}" class="d-inline-flex align-items-center rounded py-2 px-3">Business Settings</a>
                            <a href="{{ url('seo-settings') }}" class="d-inline-flex align-items-center rounded py-2 px-3">SEO Settings</a>
                            <a href="{{ url('localization-settings') }}" class="d-inline-flex align-items-center rounded py-2 px-3">Localization</a>
                            <a href="{{ url('prefixes') }}" class="d-inline-flex align-items-center rounded py-2 px-3">Prefixes</a>
                            <a href="{{ url('preferences') }}" class="d-inline-flex align-items-center rounded active py-2 px-3"><i class="ti ti-arrow-badge-right me-2"></i>Preferences</a>
                            <a href="{{ url('appearance') }}" class="d-inline-flex align-items-center rounded py-2 px-3">Appearance</a>
                            <a href="{{ url('language') }}" class="d-inline-flex align-items-center rounded py-2 px-3">Language</a>
                            <a href="{{ url('authentication-settings') }}" class="d-inline-flex align-items-center rounded py-2 px-3">Authentication Settings</a>
                            <a href="{{ url('ai-settings') }}" class="d-inline-flex align-items-center rounded py-2 px-3">AI Settings</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="border-bottom mb-3 pb-3">
                            <h4>Preferences</h4>
                        </div>
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Employees</h5>
                                     <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user1" class="check">
                                        <label for="user1" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Clients</h5>
                                     <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user2" class="check">
                                        <label for="user2" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Projects</h5>
                                     <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user3" class="check">
                                        <label for="user3" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Contacts</h5>
                                     <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user4" class="check">
                                        <label for="user4" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Companies</h5>
                                     <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user5" class="check">
                                        <label for="user5" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Deals</h5>
                                     <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user6" class="check">
                                        <label for="user6" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Leads</h5>
                                     <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user12" class="check">
                                        <label for="user12" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Pipeline</h5>
                                     <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user7" class="check">
                                        <label for="user7" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Activities</h5>
                                     <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user8" class="check">
                                        <label for="user8" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Sales</h5>
                                     <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user9" class="check">
                                        <label for="user9" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Accounting</h5>
                                     <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user10" class="check">
                                        <label for="user10" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-sm-6">
                                <div class="d-md-flex justify-content-between align-items-center border rounded bg-white p-3 mb-3">
                                    <h5 class="fw-medium fs-14">Reports</h5>
                                     <div class="status-toggle modal-status">
                                        <input type="checkbox" id="user11" class="check">
                                        <label for="user11" class="checktoggle"> </label>
                                    </div>
                                </div>
                            </div>
                        </div>
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

@endsection