<?php $page = 'contact-details'; ?>
@extends('layout.mainlayout')
@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content">
            <div class="row align-items-center mb-4">
                <div class="col-sm-6">
                    <h6 class="fw-medium d-inline-flex align-items-center mb-3 mb-sm-0"><a href="{{url ('contacts') }}">
                        <i class="ti ti-arrow-left me-2"></i>Contacts</a>
                        <span class="text-gray d-inline-flex ms-2">/ Darlee Robertson</span>
                    </h6>
                </div>
                <div class="col-sm-6">
                    <div class="d-flex align-items-center justify-content-sm-end">
                        <a href="javascript:void(0);" class="btn btn-primary d-inline-flex align-items-center me-2" data-bs-toggle="modal" data-bs-target="#add_deals">
                            <i class="ti ti-circle-plus me-2"></i>Add Deal
                        </a>
                        <a href="javascript:void(0);" class="btn btn-dark d-inline-flex align-items-center"><i class="ti ti-mail me-2"></i>Send Email</a>
                        <div class="head-icons ms-2 mb-0">
                            <a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
                                <i class="ti ti-chevrons-up"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 theiaStickySidebar">
                    <div class="card card-bg-1">
                        <div class="card-body p-0">
                            <span class="avatar avatar-xl avatar-rounded border border-2 border-white m-auto d-flex mb-2">
                                <img src="{{ URL::asset('build/img/profiles/avatar-19.jpg') }}" class="w-auto h-auto" alt="Img">
                            </span>
                            <div class="text-center px-3 pb-3 border-bottom">
                                <h5 class="d-flex align-items-center justify-content-center mb-1">Darlee Robertson <i class="ti ti-discount-check-filled text-success ms-1"></i></h5>
                                <p class="text-dark mb-1">BrightWave Innovations</p>
                                <span class="badge bg-pink-transparent">Facility Manager</span>
                            </div>
                            <div class="p-3 border-bottom">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6>Basic information</h6>
                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm" data-bs-toggle="modal" data-bs-target="#edit_contact"><i class="ti ti-edit"></i></a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="d-inline-flex align-items-center">
                                        <i class="ti ti-phone me-2"></i>
                                        Phone
                                    </span>
                                    <p class="text-dark">(163) 2459 315</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="d-inline-flex align-items-center">
                                        <i class="ti ti-mail-check me-2"></i>
                                        Email
                                    </span>
                                    <a href="javascript:void(0);" class="text-info d-inline-flex align-items-center">darlee@example.com <i class="ti ti-copy text-dark ms-2"></i></a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="d-inline-flex align-items-center">
                                        <i class="ti ti-gender-male me-2"></i>
                                        Gender
                                    </span>
                                    <p class="text-dark">Male</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="d-inline-flex align-items-center">
                                        <i class="ti ti-cake me-2"></i>
                                        Birdthday
                                    </span>
                                    <p class="text-dark">24th July 2000</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="d-inline-flex align-items-center">
                                        <i class="ti ti-map-pin-check me-2"></i>
                                        Address
                                    </span>
                                    <p class="text-dark text-end">1861 Bayonne Ave, <br> Manchester, NJ, 08759  </p>
                                </div>
                            </div>
                            <div class="p-3 border-bottom">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6>Other Information</h6>
                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i class="ti ti-edit"></i></a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="d-inline-flex align-items-center">
                                        <i class="ti ti-e-passport me-2"></i>
                                        Language
                                    </span>
                                    <p class="text-dark">English</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="d-inline-flex align-items-center">
                                        <i class="ti ti-mail-check me-2"></i>
                                        Currency
                                    </span>
                                    <p class="text-dark">United States dollar</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="d-inline-flex align-items-center">
                                        <i class="ti ti-globe me-2"></i>
                                        Last Modified 
                                    </span>
                                    <p class="text-dark">27/09/24, 11:45 pm </p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="d-inline-flex align-items-center">
                                        <i class="ti ti-bookmark-plus me-2"></i>
                                        Source
                                    </span>
                                    <p class="text-dark">Paid Campaign</p>
                                </div>
                            </div>
                            <div class="p-3 border-bottom">
                                <h5 class="mb-3">Tags</h5>
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-soft-success me-3">Collab</span>
                                    <span class="badge badge-soft-warning">Rated</span>
                                </div>
                            </div>
                            <div class="p-3 border-bottom">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <h5>Company</h5>
                                    <a href="javascript:void(0);" class="text-primary d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#add_company">
                                        <i class="ti ti-circle-plus me-1"></i>Add New
                                    </a>
                                </div>
                                <div class="d-flex align-items-center file-name-icon">
                                    <a href="javascript:void(0);" class="avatar avatar-md border rounded-circle">
                                        <img src="{{ URL::asset('build/img/company/company-01.svg') }}" class="img-fluid" alt="img">
                                    </a>
                                    <div class="ms-2">
                                        <h6 class="fw-medium">BrightWave Innovations</h6>
                                        <span class="d-block">bwi.example.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <h6>Social Links</h6>
                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i class="ti ti-edit"></i></a>
                                </div>
                                <div class="d-flex align-items-center mb-3">
                                    <a href="javascript:void(0);" class="me-2"><img src="{{ URL::asset('build/img/social/social-01.svg') }}" alt="Img"></a>
                                    <a href="javascript:void(0);" class="me-2"><img src="{{ URL::asset('build/img/social/social-06.svg') }}" alt="Img"></a>
                                    <a href="javascript:void(0);" class="me-2"><img src="{{ URL::asset('build/img/social/social-02.svg') }}" alt="Img"></a>
                                    <a href="javascript:void(0);" class="me-2"><img src="{{ URL::asset('build/img/social/social-03.svg') }}" alt="Img"></a>
                                    <a href="javascript:void(0);" class="me-2"><img src="{{ URL::asset('build/img/social/social-04.svg') }}" alt="Img"></a>
                                    <a href="javascript:void(0);" class="me-2"><img src="{{ URL::asset('build/img/social/social-05.svg') }}" alt="Img"></a>									
                                </div>
                                <div class="row gx-2">
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-flex align-items-center justify-content-center btn btn-dark">
                                            <i class="ti ti-share-2 me-2"></i>Share
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" class="d-flex align-items-center justify-content-center btn btn-primary">
                                            <i class="ti ti-trash me-2"></i>Delete
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div>
                        <div class="bg-white rounded">
                            <ul class="nav nav-tabs nav-tabs-bottom nav-justified flex-wrap mb-3" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active fw-medium d-flex align-items-center justify-content-center" href="#bottom-justified-tab1" data-bs-toggle="tab" aria-selected="false" role="tab">
                                        <i class="ti ti-activity me-1"></i>
                                        Activities
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-medium d-flex align-items-center justify-content-center" href="#bottom-justified-tab2" data-bs-toggle="tab" aria-selected="false" role="tab">
                                        <i class="ti ti-file-description me-1"></i>
                                        Notes
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-medium d-flex align-items-center justify-content-center" href="#bottom-justified-tab3" data-bs-toggle="tab" aria-selected="true" role="tab">
                                        <i class="ti ti-phone-call me-1"></i>
                                        Calls
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-medium d-flex align-items-center justify-content-center" href="#bottom-justified-tab4" data-bs-toggle="tab" aria-selected="true" role="tab">
                                        <i class="ti ti-files me-1"></i>
                                        Files
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-medium d-flex align-items-center justify-content-center" href="#bottom-justified-tab5" data-bs-toggle="tab" aria-selected="true" role="tab">
                                        <i class="ti ti-mail-check me-1"></i>
                                        Email
                                    </a>
                                </li>
                            </ul>
                            
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active show" id="bottom-justified-tab1" role="tabpanel">
                                <div class="card border-0">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h5>Activities</h5>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
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
                                    <div class="card-body">
                                        <span class="badge badge-soft-purple d-inline-flex align-items-center mb-3">
                                            <i class="ti ti-calendar me-1"></i>
                                            15 Feb 2024
                                        </span>
                                        <div class="border rounded p-3 mb-3">
                                            <div class="d-flex align-items-start">
                                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-skyblue me-2"><i class="ti ti-message-circle-2 fs-20"></i></span>
                                                <div>
                                                    <h6 class="fw-medium mb-1">You sent 1 Message to the contact.</h6>
                                                    <span>10:25 pm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border rounded p-3 mb-3">
                                            <div class="d-flex align-items-start">
                                                <span class="avatar avatar-md avatar-rounded bg-success flex-shrink-0 me-2"><i class="ti ti-phone fs-20"></i></span>
                                                <div>
                                                    <h6 class="fw-medium mb-1">Denwar responded to your appointment schedule question by call at 09:30pm.</h6>
                                                    <span>09:25 pm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border rounded p-3 mb-3">
                                            <div class="d-flex align-items-start">
                                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-warning me-2"><i class="ti ti-file-description fs-20"></i></span>
                                                <div>
                                                    <h6 class="fw-medium mb-1">Notes added by Antony</h6>
                                                    <p class="mb-1">Please accept my apologies for the inconvenience caused. It would be much appreciated if it's possible to reschedule to 6:00 PM, or any other day that week.</p>
                                                    <span>10.00 pm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="badge badge-soft-purple d-inline-flex align-items-center mb-3">
                                            <i class="ti ti-calendar me-1"></i>
                                            15 Feb 2024
                                        </span>
                                        <div class="border rounded p-3 mb-3">
                                            <div class="d-flex align-items-start">
                                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-purple me-2"><i class="ti ti-user-circle fs-20"></i></span>
                                                <div>
                                                    <h6 class="fw-medium d-flex align-items-center mb-1">
                                                        Meeting With
                                                        <span class="avatar avatar-sm avatar-rounded mx-1"><img src="{{ URL::asset('build/img/profiles/avatar-02.jpg') }}" alt="Img"></span>
                                                        Abraham
                                                    </h6>
                                                    <span>Schedueled  on 05:00 pm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border rounded p-3 mb-3">
                                            <div class="d-flex align-items-start">
                                                <span class="avatar avatar-md avatar-rounded bg-success flex-shrink-0 me-2"><i class="ti ti-phone fs-20"></i></span>
                                                <div>
                                                    <h6 class="fw-medium mb-1">Drain responded to your appointment schedule question.</h6>
                                                    <span>09:25 pm</span>
                                                </div>
                                            </div>
                                        </div>
                                        <span class="badge badge-soft-purple d-inline-flex align-items-center mb-3">
                                            <i class="ti ti-calendar me-1"></i>
                                            Upcoming Activity
                                        </span>
                                        <div class="border rounded p-3">
                                            <div class="d-flex align-items-start mb-2">
                                                <span class="avatar avatar-md avatar-rounded flex-shrink-0 bg-purple me-2"><i class="ti ti-user-circle fs-20"></i></span>
                                                <div>
                                                    <h6 class="fw-medium mb-1">
                                                        Product Meeting
                                                    </h6>
                                                    <p class="mb-1">A product team meeting is a gathering of the cross-functional product team — ideally including 
                                                        team members from product, engineering, marketing, and customer support.
                                                    </p>
                                                    <span>Schedueled  on 05:00 pm</span>
                                                </div>
                                            </div>
                                            <div class="bg-light-500 rounded p-3">
                                                <div class="row">
                                                    <div class="col-md-4 col-sm-6">
                                                        <div>
                                                            <h6 class="fs-12 fw-medium mb-2">Reminder</h6>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <i class="clock-hour-3 me-1"></i>
                                                                    Reminder
                                                                </a>
                                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Reminder</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">1 Hr</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">10 Hr</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div>
                                                            <h6 class="fs-12 fw-medium mb-2">Task Priority</h6>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="dropdown-toggle btn-sm btn btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <span class="border border-purple rounded-circle bg-soft-danger d-flex justify-content-center align-items-center me-1">
                                                                        <i class="ti ti-point-filled text-danger"></i>
                                                                    </span>
                                                                    High
                                                                </a>
                                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">High</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Medium</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1">Low</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-sm-6">
                                                        <div>
                                                            <h6 class="fs-12 fw-medium mb-2">Assigned to</h6>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
                                                                    <span class="avatar avatar-xs avatar-rounded me-1">
                                                                        <img src="{{ URL::asset('build/img/profiles/avatar-02.jpg') }}" alt="Img">
                                                                    </span>
                                                                    John
                                                                </a>
                                                                <ul class="dropdown-menu  dropdown-menu-end p-3">
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex align-items-center">
                                                                            <span class="avatar avatar-xs avatar-rounded me-1">
                                                                                <img src="{{ URL::asset('build/img/profiles/avatar-02.jpg') }}" alt="Img">
                                                                            </span>
                                                                            John
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex align-items-center">
                                                                            <span class="avatar avatar-xs avatar-rounded me-1">
                                                                                <img src="{{ URL::asset('build/img/profiles/avatar-01.jpg') }}" alt="Img">
                                                                            </span>
                                                                            Sophie
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript:void(0);" class="dropdown-item rounded-1 d-flex align-items-center">
                                                                            <span class="avatar avatar-xs avatar-rounded me-1">
                                                                                <img src="{{ URL::asset('build/img/profiles/avatar-03.jpg') }}" alt="Img">
                                                                            </span>
                                                                            Estelle
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="bottom-justified-tab2" role="tabpanel">
                                <div class="card border-0">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <h5>Notes</h5>
                                            <div class="d-flex align-items-center">
                                                <div class="dropdown me-2">
                                                    <a href="javascript:void(0);" class="dropdown-toggle btn btn-sm btn-white d-inline-flex align-items-center" data-bs-toggle="dropdown">
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
                                                <a href="javascript:void(0);" class="d-inline-flex align-items-center text-primary fw-medium" data-bs-toggle="modal" data-bs-target="#add_notes">
                                                    <i class="ti ti-circle-plus me-1"></i>
                                                    Add Note
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="border rounded p-3 mb-3">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/img/profiles/avatar-19.jpg') }}" alt="Img">
                                                    </span>
                                                    <div>
                                                        <h6 class="fw-medium mb-1">Darlee Robertson</h6>
                                                        <span>15 Sep 2023, 12:10 pm</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i class="ti ti-edit"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="fw-medium mb-2">Notes added by Antony</h6>
                                                <p class="mb-3">A project review evaluates the success of an initiative and identifies areas for improvement. 
                                                    It can also evaluate a current project to determine whether 
                                                    it's on the right track. Or, it can determine the success of a completed project. 
                                                </p>
                                                <div class="d-flex align-items-center flex-wrap gap-3 mb-3">
                                                    <div class="border rounded d-flex align-items-center justify-content-between hover-border p-3">
                                                        <div class="d-flex align-items-center me-4">
                                                            <span class="avatar avatar-lg bg-success avatar-rounded flex-shrink-0 me-2">
                                                                <i class="ti ti-file-type-xls fs-24"></i>
                                                            </span>
                                                            <div>
                                                                <h6 class="fw-medium">Project Specs.xls</h6>
                                                                <span>365 KB</span>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-16"><i class="ti ti-download"></i></a>
                                                    </div>
                                                    <div class="border rounded d-flex align-items-center justify-content-between hover-border p-3">
                                                        <div class="d-flex align-items-center me-4">
                                                            <span class="avatar avatar-lg avatar-rounded flex-shrink-0 me-2">
                                                                <img src="{{ URL::asset('build/img/media/media-07.jpg') }}" alt="Img">
                                                            </span>
                                                            <div>
                                                                <h6 class="fw-medium">090224.jpg') }}</h6>
                                                                <span>365 KB</span>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-16"><i class="ti ti-download"></i></a>
                                                    </div>
                                                </div>
                                                <div class="notes-editor">
                                                    <div class="note-edit-wrap">
                                                        <div class="mb-3">
                                                            <div class="summernote">Write a new comment, send your team notification by typing @ followed by their name</div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-end mb-3">
                                                            <a href="javascript:void(0);" class="btn btn-outline-light border add-cancel me-3">Cancel</a>
                                                            <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="d-flex align-items-center justify-content-end text-primary fw-medium add-comment">
                                                            <i class="ti ti-circle-plus me-1"></i>
                                                            Add Comment
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border rounded p-3 mb-3">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/img/profiles/avatar-03.jpg') }}" alt="Img">
                                                    </span>
                                                    <div>
                                                        <h6 class="fw-medium mb-1">Sharon Roy</h6>
                                                        <span>18 Sep 2023, 09:52 am</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i class="ti ti-edit"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="fw-medium mb-2">Notes added by Antony</h6>
                                                <p class="mb-3">
                                                    A project plan typically contains a list of the essential elements of a project, 
                                                    such as stakeholders, scope, timelines, estimated cost and communication methods. 
                                                    The project manager typically lists the information based on the assignment.
                                                </p>
                                                <div class="d-flex align-items-center flex-wrap gap-3 mb-3">
                                                    <div class="border rounded d-flex align-items-center justify-content-between hover-border p-3">
                                                        <div class="d-flex align-items-center me-4">
                                                            <span class="avatar avatar-lg bg-purple avatar-rounded flex-shrink-0 me-2">
                                                                <i class="ti ti-file-description fs-24"></i>
                                                            </span>
                                                            <div>
                                                                <h6 class="fw-medium">Andrewpass.txt</h6>
                                                                <span>365 KB</span>
                                                            </div>
                                                        </div>
                                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-16"><i class="ti ti-download"></i></a>
                                                    </div>
                                                </div>
                                                <div class="bg-light-500 rounded p-3 mb-3">
                                                    <p class="mb-2">The best way to get a project done faster is to start sooner. A goal without a 
                                                        timeline is just a dream.The goal you set must be challenging. At the same time, 
                                                        it should be realistic and attainable, not impossible to reach.
                                                    </p>
                                                    <p class="text-dark mb-2">Commented by <span class="text-primary"> Aeron</span> on 15 Sep 2023, 11:15 pm</p>
                                                    <a href="javascript:void(0);" class="btn btn-dark d-inline-flex align-items-center"><i class="ti ti-arrow-back-up me-1"></i>Reply</a>
                                                </div>
                                                <div class="notes-editor">
                                                    <div class="note-edit-wrap">
                                                        <div class="mb-3">
                                                            <div class="summernote">Write a new comment, send your team notification by typing @ followed by their name</div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-end mb-3">
                                                            <a href="javascript:void(0);" class="btn btn-outline-light border add-cancel me-3">Cancel</a>
                                                            <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="d-flex align-items-center justify-content-end text-primary fw-medium add-comment">
                                                            <i class="ti ti-circle-plus me-1"></i>
                                                            Add Comment
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border rounded p-3 mb-3">
                                            <div class="d-flex align-items-center justify-content-between mb-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/img/profiles/avatar-04.jpg') }}" alt="Img">
                                                    </span>
                                                    <div>
                                                        <h6 class="fw-medium mb-1">Vaughan Lewis</h6>
                                                        <span>20 Sep 2023, 10:26 pm</span>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i class="ti ti-edit"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div>
                                                <h6 class="fw-medium mb-2">Notes added by Antony</h6>
                                                <p class="mb-3">
                                                    Projects play a crucial role in the success of organizations, and their importance cannot 
                                                    be overstated. Whether it's launching a new product, improving an existing
                                                </p>
                                                <div class="notes-editor">
                                                    <div class="note-edit-wrap">
                                                        <div class="mb-3">
                                                            <div class="summernote">Write a new comment, send your team notification by typing @ followed by their name</div>
                                                        </div>
                                                        <div class="d-flex align-items-center justify-content-end mb-3">
                                                            <a href="javascript:void(0);" class="btn btn-outline-light border add-cancel me-3">Cancel</a>
                                                            <a href="javascript:void(0);" class="btn btn-primary">Save</a>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <a href="javascript:void(0);" class="d-flex align-items-center justify-content-end text-primary fw-medium add-comment">
                                                            <i class="ti ti-circle-plus me-1"></i>
                                                            Add Comment
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="bottom-justified-tab3" role="tabpanel">
                                <div class="card border-0">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <h5>Calls</h5>
                                            <a href="javascript:void(0);" class="d-inline-flex align-items-center text-primary fw-medium" data-bs-toggle="modal" data-bs-target="#add_call">
                                                <i class="ti ti-circle-plus me-1"></i>
                                                Add New
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="border rounded p-3 mb-3">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/img/profiles/avatar-02.jpg') }}" alt="Img">
                                                    </span>
                                                    <div>
                                                        <p class="fw-medium"><span class="text-dark">Darlee Robertson </span> logged a call on 23 Jul 2023, 10:00 pm</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown me-2">
                                                        <a href="#" class="dropdown-toggle btn btn-sm bg-danger-transparent border-0" data-bs-toggle="dropdown" aria-expanded="false">Busy<i class="las la-angle-down ms-1"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end p-3">
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Busy</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">No Answer</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Unavailable</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Wrong Number</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Left Voice Message</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Moving Forward</a>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div>
                                                <p>A project review evaluates the success of an initiative and identifies areas for 
                                                    improvement. It can also evaluate a current project 
                                                    to determine whether it's on the right track. Or, it can determine the success of a completed project
                                                </p>
                                            </div>
                                        </div>
                                        <div class="border rounded p-3 mb-3">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/img/profiles/avatar-03.jpg') }}" alt="Img">
                                                    </span>
                                                    <div>
                                                        <p class="fw-medium"><span class="text-dark">Sharon Roy </span>  logged a call on 28 Jul 2023, 09:00 pm</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown me-2">
                                                        <a href="#" class="dropdown-toggle btn btn-sm bg-transparent-purple border-0" data-bs-toggle="dropdown" aria-expanded="false">No Answer<i class="las la-angle-down ms-1"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end p-3">
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Busy</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">No Answer</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Unavailable</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Wrong Number</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Left Voice Message</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Moving Forward</a>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    A project plan typically contains a list of the essential elements of a project, 
                                                    such as stakeholders, scope, timelines, estimated cost and communication methods. 
                                                    The project manager typically lists the information based on the assignment.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="border rounded p-3">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/img/profiles/avatar-04.jpg') }}" alt="Img">
                                                    </span>
                                                    <div>
                                                        <p class="fw-medium"><span class="text-dark">Vaughan Lewis </span> logged a call on 30 Jul 2023, 08:00 pm</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <div class="dropdown me-2">
                                                        <a href="#" class="dropdown-toggle btn btn-sm bg-transparent-purple border-0" data-bs-toggle="dropdown" aria-expanded="false">No Answer<i class="las la-angle-down ms-1"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end p-3">
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Busy</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">No Answer</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Unavailable</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Wrong Number</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Left Voice Message</a>
                                                            <a class="dropdown-item rounded-1" href="javascript:void(0);">Moving Forward</a>
                                                        </div>
                                                    </div>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div>
                                                <p>
                                                    Projects play a crucial role in the success of organizations, and their importance cannot be 
                                                    overstated. Whether it's launching a new product, improving an existing
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="bottom-justified-tab4" role="tabpanel">
                                <div class="card border-0">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <h5>Files</h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="border rounded p-3 mb-3">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                                <div>
                                                    <h6 class="fw-medium mb-1">Manage Documents</h6>
                                                    <p>Send customizable quotes, proposals and contracts to close deals faster.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create_file">Create Document</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border rounded p-3 mb-3">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-2">
                                                <div>
                                                    <h6 class="fw-medium mb-1">Collier-Turner Proposal</h6>
                                                    <p>Send customizable quotes, proposals and contracts to close deals faster.</p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i class="ti ti-download"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i class="ti ti-edit"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/img/profiles/avatar-02.jpg') }}" alt="Img">
                                                    </span>
                                                    <div>
                                                        <span class="d-inline-flex mb-1">Owner</span>
                                                        <h6 class="fw-medium">Darlee Robertson</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="badge bg-pink-transparent me-2">Proposal</span>
                                                    <span class="badge badge-dark-transparent"><i class="ti ti-point-filled"></i>Proposal</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border rounded p-3 mb-3">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-2">
                                                <div>
                                                    <h6 class="fw-medium mb-1">Collier-Turner Proposal</h6>
                                                    <p>Send customizable quotes, proposals and contracts to close deals faster.</p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i class="ti ti-download"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i class="ti ti-edit"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/img/profiles/avatar-01.jpg') }}" alt="Img">
                                                    </span>
                                                    <div>
                                                        <span class="d-inline-flex mb-1">Owner</span>
                                                        <h6 class="fw-medium">Sharon Roy</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="badge badge-soft-info me-2">Quote</span>
                                                    <span class="badge badge-soft-success"><i class="ti ti-point-filled"></i>Sent</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="border rounded p-3">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3 mb-2">
                                                <div>
                                                    <h6 class="fw-medium mb-1">Collier-Turner Proposal</h6>
                                                    <p>Send customizable quotes, proposals and contracts to close deals faster.</p>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i class="ti ti-download"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i class="ti ti-edit"></i></a>
                                                    <a href="javascript:void(0);" class="btn btn-icon btn-sm fs-20"><i class="ti ti-trash"></i></a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                                <div class="d-flex align-items-center">
                                                    <span class="avatar avatar-md avatar-rounded flex-shrink-0 me-2">
                                                        <img src="{{ URL::asset('build/img/profiles/avatar-04.jpg') }}" alt="Img">
                                                    </span>
                                                    <div>
                                                        <span class="d-inline-flex mb-1">Owner</span>
                                                        <h6 class="fw-medium">Vaughan Lewis</h6>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <span class="badge bg-pink-transparent me-2">Proposal</span>
                                                    <span class="badge badge-dark-transparent"><i class="ti ti-point-filled"></i>Proposal</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="bottom-justified-tab5" role="tabpanel">
                                <div class="card border-0">
                                    <div class="card-header">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                            <h5>Email</h5>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="border rounded p-3">
                                            <div class="d-flex align-items-center justify-content-between flex-wrap row-gap-3">
                                                <div>
                                                    <h6 class="fw-medium mb-1">Manage Emails</h6>
                                                    <p>You can send and reply to emails directly via this section.</p>
                                                </div>
                                                <div>
                                                    <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#connect_account">Connect Account</a>
                                                </div>
                                            </div>
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

    @component('components.modal-popup')
    @endcomponent

@endsection