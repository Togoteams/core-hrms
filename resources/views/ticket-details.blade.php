<?php $page = 'ticket-details'; ?>
@extends('layout.mainlayout')
@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">

            <!-- Breadcrumb -->
            <div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
                <div class="mb-2">
                    <h6 class="fw-medium d-flex align-items-center"><a href="{{url('tickets')}}"><i class="ti ti-arrow-left me-2"></i>Ticket Details</a></h6>
                </div>
                <div class="d-flex my-xl-auto right-content align-items-center flex-wrap">
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
                        <a href="#" data-bs-toggle="modal" data-bs-target="#add_ticket" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Ticket</a>
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
                <div class="col-xl-9 col-md-8">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                            <h5 class="text-info fw-medium">IT Support</h5>
                            <div class="d-flex align-items-center">
                                <span class="badge bg-danger me-3"><i class="ti ti-circle-filled fs-5 me-1"></i>High</span>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle px-2 py-1 btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                        Mark as Private
                                    </a>
                                    <ul class="dropdown-menu  dropdown-menu-end p-2">
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Mark as Private</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" class="dropdown-item rounded-1">Mark as Public </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <div class="d-flex align-items-center justify-content-between flex-wrap border-bottom mb-3">
                                    <div class="d-flex align-items-center flex-wrap">
                                        <div class="mb-3">
                                            <span class="badge badge-info rounded-pill mb-2">Tic - 001</span>
                                            <div class="d-flex align-items-center mb-2">
                                                <h5 class="fw-semibold me-2">Laptop Issue</h5>
                                                <span class="badge bg-outline-pink d-flex align-items-center ms-1"><i class="ti ti-circle-filled fs-5 me-1"></i>Open</span>
                                            </div>
                                            <div class="d-flex align-items-center flex-wrap row-gap-2">
                                                <p class="d-flex align-items-center mb-0 me-2">
                                                    <img src="{{ URL::asset('build/img/profiles/avatar-06.jpg') }}" class="avatar avatar-xs rounded-circle me-2" alt="img"> Assigned to <span class="text-dark ms-1">Juan Hermann</span>
                                                </p>
                                                <p class="d-flex align-items-center mb-0 me-2"><i class="ti ti-calendar-bolt me-1"></i>Updated 20 hours ago</p>
                                                <p class="d-flex align-items-center mb-0"><i class="ti ti-message-circle-share me-1"></i>9 Comments</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <a href="#" class="btn btn-primary"><i class="ti ti-arrow-forward-up me-1"></i>Post a Reply</a>
                                    </div>
                                </div>
                                <div class="border-bottom mb-3 pb-3">
                                    <div>
                                        <p class="mb-3">For the past week, my laptop has been experiencing intermittent freezing issues. The freezes occur randomly, approximately 3-4 times a day, and last about 30-60 seconds each time. During these freezes, the cursor
                                            becomes unresponsive, and I am unable to click on anything or use keyboard shortcuts. The issue usually resolves itself, but it significantly disrupts my work.
                                        </p>
                                        <ul class="list-styled-dotted border-bottom pb-3">
                                            <li class="ms-4 mb-3">I first noticed the problem on February 1, 2024, while using Google Meet for a video conference. Since then, the issue has occurred during various tasks, including browsing with Chrome, using Microsoft Office
                                                applications, and even when the laptop is idle.</li>
                                            <li class="ms-4">Error messages: No specific error messages have appeared, but the Task Manager (when accessible) shows a spike in CPU usage to 100% during these freezes.</li>
                                        </ul>
                                    </div>
                                    <div class="mt-4">
                                        <div class="d-flex align-items-center mb-3">
                                            <span class="avatar avatar-lg avatar-rounded me-2 flex-shrink-0"><img src="{{ URL::asset('build/img/users/user-09.jpg') }}" alt="Img"></span>
                                            <div>
                                                <h6 class="fw-medium mb-1">James Hendriques</h6>
                                                <p><i class="ti ti-calendar-bolt me-1"></i>Updated 5 hours ago</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <p>This issue disrupts meetings, delays task completion, and affects my overall productivity.</p>
                                            </div>
                                            <span class="badge bg-light fw-normal">Screenshot.png<i class="ti ti-download ms-1"></i></span>
                                            <div class="d-flex align-items-center mt-3">
                                                <a href="#" class="d-inline-flex align-items-center text-primary fw-medium me-3"><i class="ti ti-arrow-forward-up me-1"></i>Reply</a>
                                                <p><a href="#" class="d-flex align-items-center"><i class="ti ti-message-circle-share me-1"></i>1 Comments</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom mb-3 pb-3">
                                    <div>
                                        <div class="d-flex align-items-center mb-3">
                                            <span class="avatar avatar-ld avatar-rounded me-2 flex-shrink-0"><img src="{{ URL::asset('build/img/users/user-02.jpg') }}" alt="Img"></span>
                                            <div>
                                                <h6 class="mb-1">Marilyn Siegle</h6>
                                                <p><i class="ti ti-calendar-bolt me-1"></i>Updated 6 hours ago</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <p>Check the System and Application logs in the Event Viewer for warnings or errors that coincide with the times the freezes occur.</p>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <span class="badge bg-light fw-normal me-2">Screenshot.png<i class="ti ti-download ms-1"></i></span>
                                                <span class="badge bg-light fw-normal me-2">Screenshot.png<i class="ti ti-download ms-1"></i></span>
                                                <span class="badge bg-light fw-normal me-2">Screenshot.png<i class="ti ti-download ms-1"></i></span>
                                                <span class="badge bg-light fw-normal">Screenshot.png<i class="ti ti-download ms-1"></i></span>
                                            </div>
                                            <div class="d-flex align-items-center mt-3">
                                                <a href="#" class="d-inline-flex align-items-center text-primary fw-medium me-3"><i class="ti ti-arrow-forward-up me-1"></i>Reply</a>
                                                <p><a href="#" class="d-flex align-items-center"><i class="ti ti-message-circle-share me-1"></i>1 Comments</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <div class="d-flex align-items-center mb-3">
                                            <span class="avatar avatar-lg avatar-rounded me-2 flex-shrink-0"><img src="{{ URL::asset('build/img/profiles/avatar-22.jpg') }}" alt="Img"></span>
                                            <div>
                                                <h6 class="mb-1">Marilyn Siegle</h6>
                                                <p><i class="ti ti-calendar-bolt me-1"></i>Updated 8 hours ago</p>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="mb-3">
                                                <p>Check for any pending updates and installing them to see if it resolves the issue</p>
                                            </div>
                                            <div class="d-flex align-items-center mt-3">
                                                <a href="#" class="d-inline-flex align-items-center text-primary fw-medium me-3"><i class="ti ti-arrow-forward-up me-1"></i>Reply</a>
                                                <p><a href="#" class="d-flex align-items-center"><i class="ti ti-message-circle-share me-1"></i>1 Comments</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-4">
                    <div class="card">
                        <div class="card-header p-3">
                            <h4>Ticket Details</h4>
                        </div>
                        <div class="card-body p-0">
                            <div class="border-bottom p-3">
                                <div class="mb-3">
                                    <label class="form-label">Change Priority</label>
                                    <select class="select">
                                        <option>High</option>
                                        <option>Medium</option>
                                        <option>Low</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Assign To</label>
                                    <select class="select">
                                        <option>Edgar Hansel</option>
                                        <option>Juan Hermann</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="form-label">Ticket Status</label>
                                    <select class="select">
                                        <option>Open</option>
                                        <option>On Hold</option>
                                        <option>Reopened</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom p-3">
                                <span class="avatar avatar-md me-2 flex-shrink-0"><img src="{{ URL::asset('build/img/users/user-01.jpg') }}" class="rounded-circle" alt="Img"></span>
                                <div>
                                    <span class="fs-12">User</span>
                                    <p class="text-dark">Anthony Lewis</p>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom p-3">
                                <span class="avatar avatar-md me-2 flex-shrink-0"><img src="{{ URL::asset('build/img/users/user-05.jpg') }}" class="rounded-circle" alt="Img"></span>
                                <div>
                                    <span class="fs-12">Support Agent</span>
                                    <p class="text-dark">Edgar Hansel</p>
                                </div>
                            </div>
                            <div class="border-bottom p-3">
                                <span class="fs-12">Category</span>
                                <p class="text-dark">Repair &amp; Service</p>
                            </div>
                            <div class="border-bottom p-3">
                                <span class="fs-12">Email</span>
                                <p class="text-dark">Hellana@example.com</p>
                            </div>
                            <div class="p-3">
                                <span class="fs-12">Last Updated / Closed On</span>
                                <p class="text-dark">25 May 2024</p>
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

    @component('components.modal-popup')
    @endcomponent

@endsection