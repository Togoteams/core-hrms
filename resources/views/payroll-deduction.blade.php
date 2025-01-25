<?php $page = 'payroll-deduction'; ?>
@extends('layout.mainlayout')
@section('content')

    <!-- Page Wrapper -->
	<div class="page-wrapper">
		<div class="content">

			<!-- Breadcrumb -->
			<div class="d-md-flex d-block align-items-center justify-content-between page-breadcrumb mb-3">
				<div class="my-auto mb-2">
					<h2 class="mb-1">Payroll Items</h2>
					<nav>
						<ol class="breadcrumb mb-0">
							<li class="breadcrumb-item">
								<a href="{{URL('index')}}"><i class="ti ti-smart-home"></i></a>
							</li>
							<li class="breadcrumb-item">
								HR
							</li>
							<li class="breadcrumb-item active" aria-current="page">Payroll Items</li>
						</ol>
					</nav>
				</div>
				<div class="d-flex my-xl-auto right-content align-items-center flex-wrap ">
					<div class="mb-2">
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
					<div class="head-icons ms-2">
						<a href="javascript:void(0);" class="" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Collapse" id="collapse-header">
							<i class="ti ti-chevrons-up"></i>
						</a>
					</div>
				</div>
				
				
			</div>
			<div class="d-flex justify-content-between my-4">
				<div class="payroll-btns">
					<a href="{{url('payroll')}}" class="btn btn-white  border me-2">Additions</a>
					<a href="{{url('payroll-overtime')}}" class="btn btn-white  border me-2">Overtime</a>
					<a href="{{url('payroll-deduction')}}" class="btn btn-white active border">Deductions</a>
				</div>
				<div class="mb-2">
					<a href="#" data-bs-toggle="modal" data-bs-target="#add_deduction" class="btn btn-primary d-flex align-items-center"><i class="ti ti-circle-plus me-2"></i>Add Deduction</a>
				</div>
			</div>
			
			<!-- /Breadcrumb -->

			<!-- Policy list -->
			<div class="card">
				<div class="card-header d-flex align-items-center justify-content-between flex-wrap row-gap-3">
					<h5>Deductions List</h5>
					<div class="d-flex my-xl-auto right-content align-items-center flex-wrap row-gap-3">
						
						<div class="dropdown">
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
									<th>Default / Unit Amount</th>
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
										<h6 class="fs-14 fw-medium text-gray-9">Absent amount</h6>
									</td>
									<td>$12</td>
									<td>
										<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_deduction"><i class="ti ti-edit"></i></a>
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
										<h6 class="fs-14 fw-medium text-gray-9">Advance</h6>
									</td>
									<td>$7</td>
									<td>
										<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_deduction"><i class="ti ti-edit"></i></a>
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
										<h6 class="fs-14 fw-medium text-gray-9">Unpaid leave</h6>
									</td>
									<td>$3</td>
									<td>
										<div class="action-icon d-inline-flex">
											<a href="#" class="me-2" data-bs-toggle="modal" data-bs-target="#edit_deduction"><i class="ti ti-edit"></i></a>
											<a href="#" data-bs-toggle="modal" data-bs-target="#delete_modal"><i class="ti ti-trash"></i></a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- /Policylist list -->

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
