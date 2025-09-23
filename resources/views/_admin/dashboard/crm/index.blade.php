@extends('layouts._admin.main')
@section('title', 'Sogecepa- Visão Geral')
@section('content')

    <div class="nxl-content">
        <!-- [ page-header ] start -->
        <div class="page-header">
            <div class="page-header-left d-flex align-items-center">
                <div class="page-header-title">
                    <h5 class="m-b-10">Visão Geral</h5>
                </div>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item">Visão Geral</li>
                </ul>
            </div>
            <div class="page-header-right ms-auto">
                <div class="page-header-right-items">
                    <div class="d-flex d-md-none">
                        <a href="javascript:void(0)" class="page-header-right-close-toggle">
                            <i class="feather-arrow-left me-2"></i>
                            <span>Back</span>
                        </a>
                    </div>
                    <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                        <div id="reportrange" class="reportrange-picker d-flex align-items-center">
                            <span class="reportrange-picker-field"></span>
                        </div>
                        <div class="dropdown filter-dropdown">
                            <a class="btn btn-md btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10"
                                data-bs-auto-close="outside">
                                <i class="feather-filter me-2"></i>
                                <span>Filter</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Role"
                                            checked="checked" />
                                        <label class="custom-control-label c-pointer" for="Role">Role</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Team"
                                            checked="checked" />
                                        <label class="custom-control-label c-pointer" for="Team">Team</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Email"
                                            checked="checked" />
                                        <label class="custom-control-label c-pointer" for="Email">Email</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Member"
                                            checked="checked" />
                                        <label class="custom-control-label c-pointer" for="Member">Member</label>
                                    </div>
                                </div>
                                <div class="dropdown-item">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="Recommendation"
                                            checked="checked" />
                                        <label class="custom-control-label c-pointer"
                                            for="Recommendation">Recommendation</label>
                                    </div>
                                </div>
                                <div class="dropdown-divider"></div>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-plus me-3"></i>
                                    <span>Create New</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item">
                                    <i class="feather-filter me-3"></i>
                                    <span>Manage Filter</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-md-none d-flex align-items-center">
                    <a href="javascript:void(0)" class="page-header-right-open-toggle">
                        <i class="feather-align-right fs-20"></i>
                    </a>
                </div>
            </div>
        </div>
        <!-- [ page-header ] end -->
        <!-- [ Main Content ] start -->
        <div class="main-content">
            <div class="row">
                <!-- [Invoices Awaiting Payment] start -->
                <div class="col-xxl-3 col-md-6">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-4">
                                <div class="d-flex gap-4 align-items-center">
                                    <div class="avatar-text avatar-lg bg-gray-200">
                                        <i class="feather-dollar-sign"></i>
                                    </div>
                                    <div>
                                        <div class="fs-4 fw-bold text-dark"><span class="counter">45</span>/<span
                                                class="counter">76</span></div>
                                        <h3 class="fs-13 fw-semibold text-truncate-1-line">usuarios</h3>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="">
                                    <i class="feather-more-vertical"></i>
                                </a>
                            </div>
                            <div class="pt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);"
                                        class="fs-12 fw-medium text-muted text-truncate-1-line"></a>
                                    <div class="w-100 text-end">
                                        <span class="fs-12 text-dark">$5,569</span>
                                        <span class="fs-11 text-muted">(56%)</span>
                                    </div>
                                </div>
                                <div class="progress mt-2 ht-3">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 56%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [Invoices Awaiting Payment] end -->
                <!-- [Converted Leads] start -->
                <div class="col-xxl-3 col-md-6">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-4">
                                <div class="d-flex gap-4 align-items-center">
                                    <div class="avatar-text avatar-lg bg-gray-200">
                                        <i class="feather-cast"></i>
                                    </div>
                                    <div>
                                        <div class="fs-4 fw-bold text-dark"><span class="counter">48</span>/<span
                                                class="counter">86</span></div>
                                        <h3 class="fs-13 fw-semibold text-truncate-1-line">Total Universidades</h3>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="">
                                    <i class="feather-more-vertical"></i>
                                </a>
                            </div>
                            <div class="pt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);"
                                        class="fs-12 fw-medium text-muted text-truncate-1-line"></a>
                                    <div class="w-100 text-end">
                                        <span class="fs-12 text-dark">52 Completed</span>
                                        <span class="fs-11 text-muted">(63%)</span>
                                    </div>
                                </div>
                                <div class="progress mt-2 ht-3">
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 63%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [Converted Leads] end -->
                <!-- [Projects In Progress] start -->
                <div class="col-xxl-3 col-md-6">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-4">
                                <div class="d-flex gap-4 align-items-center">
                                    <div class="avatar-text avatar-lg bg-gray-200">
                                        <i class="feather-briefcase"></i>
                                    </div>
                                    <div>
                                        <div class="fs-4 fw-bold text-dark"><span class="counter">16</span>/<span
                                                class="counter">20</span></div>
                                        <h3 class="fs-13 fw-semibold text-truncate-1-line">Total Finalistas</h3>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="">
                                    <i class="feather-more-vertical"></i>
                                </a>
                            </div>
                            <div class="pt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);"
                                        class="fs-12 fw-medium text-muted text-truncate-1-line"></a>
                                    <div class="w-100 text-end">
                                        <span class="fs-12 text-dark">16 Completed</span>
                                        <span class="fs-11 text-muted">(78%)</span>
                                    </div>
                                </div>
                                <div class="progress mt-2 ht-3">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 78%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [Projects In Progress] end -->
                <!-- [Conversion Rate] start -->
                <div class="col-xxl-3 col-md-6">
                    <div class="card stretch stretch-full">
                        <div class="card-body">
                            <div class="d-flex align-items-start justify-content-between mb-4">
                                <div class="d-flex gap-4 align-items-center">
                                    <div class="avatar-text avatar-lg bg-gray-200">
                                        <i class="feather-activity"></i>
                                    </div>
                                    <div>
                                        <div class="fs-4 fw-bold text-dark"><span class="counter">46.59</span>%</div>
                                        <h3 class="fs-13 fw-semibold text-truncate-1-line">Total Documentos Imprimidos</h3>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="">
                                    <i class="feather-more-vertical"></i>
                                </a>
                            </div>
                            <div class="pt-4">
                                <div class="d-flex align-items-center justify-content-between">
                                    <a href="javascript:void(0);" class="fs-12 fw-medium text-muted text-truncate-1-line">
                                        Conversion Rate </a>
                                    <div class="w-100 text-end">
                                        <span class="fs-12 text-dark">$2,254</span>
                                        <span class="fs-11 text-muted">(46%)</span>
                                    </div>
                                </div>
                                <div class="progress mt-2 ht-3">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 46%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






                <div class="col-xxl-8">
                    <div class="card stretch stretch-full">
                        <div class="card-header">
                            <h5 class="card-title"></h5>
                            <div class="card-header-action">
                                <div class="card-header-btn">
                                    <div data-bs-toggle="tooltip" title="Delete">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-danger"
                                            data-bs-toggle="remove"> </a>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Refresh">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-warning"
                                            data-bs-toggle="refresh"> </a>
                                    </div>
                                    <div data-bs-toggle="tooltip" title="Maximize/Minimize">
                                        <a href="javascript:void(0);" class="avatar-text avatar-xs bg-success"
                                            data-bs-toggle="expand"> </a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="avatar-text avatar-sm" data-bs-toggle="dropdown"
                                        data-bs-offset="25, 25">
                                        <div data-bs-toggle="tooltip" title="Options">
                                            <i class="feather-more-vertical"></i>
                                        </div>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="feather-at-sign"></i>New</a>
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="feather-calendar"></i>Event</a>
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="feather-bell"></i>Snoozed</a>
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="feather-trash-2"></i>Deleted</a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="feather-settings"></i>Settings</a>
                                        <a href="javascript:void(0);" class="dropdown-item"><i
                                                class="feather-life-buoy"></i>Tips & Tricks</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body custom-card-action p-0">
                            <div id="payment-records-chart"></div>
                        </div>
                        <div class="card-footer">
                            <div class="row g-4">
                                <div class="col-lg-3">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="fs-12 text-muted mb-1"></div>
                                        <h6 class="fw-bold text-dark"></h6>

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="fs-12 text-muted mb-1"></div>
                                        <h6 class="fw-bold text-dark"></h6>
                                        <div class="">
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 82%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="fs-12 text-muted mb-1"></div>
                                        <h6 class="fw-bold text-dark"></h6>

                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="p-3 border border-dashed rounded">
                                        <div class="fs-12 text-muted mb-1"></div>
                                        <h6 class="fw-bold text-dark"></h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [Payment Records] end -->






                <!-- [Total Sales] start -->
                <div class="col-xxl-4">
                    <div class="card stretch stretch-full overflow-hidden">
                        <div class="bg-primary text-white">
                            <div class="p-4">
                                <span class="badge bg-light text-primary text-dark float-end">12%</span>
                                <div class="text-start">
                                    <h4 class="text-reset"></h4>
                                    <p class="text-reset m-0"></p>
                                </div>
                            </div>
                            <div id="total-sales-color-graph"></div>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="hstack gap-3">
                                    <div class="avatar-image avatar-lg p-2 rounded">
                                        <img class="img-fluid" src="{{ url('assets/images/brand/shopify.png') }}"
                                            alt="" />
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="d-block">Shopify eCommerce Store</a>
                                        <span class="fs-12 text-muted">Development</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="fw-bold text-dark">$1200</div>
                                    <div class="fs-12 text-end">6 Projects</div>
                                </div>
                            </div>
                            <hr class="border-dashed my-3" />
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="hstack gap-3">
                                    <div class="avatar-image avatar-lg p-2 rounded">
                                        <img class="img-fluid" src="{{ url('assets/images/brand/app-store.png') }}"
                                            alt="" />
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="d-block">iOS Apps Development</a>
                                        <span class="fs-12 text-muted">Development</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="fw-bold text-dark">$1450</div>
                                    <div class="fs-12 text-end">3 Projects</div>
                                </div>
                            </div>
                            <hr class="border-dashed my-3" />
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="hstack gap-3">
                                    <div class="avatar-image avatar-lg p-2 rounded">
                                        <img class="img-fluid" src="{{ url('assets/images/brand/figma.png') }}"
                                            alt="" />
                                    </div>
                                    <div>
                                        <a href="javascript:void(0);" class="d-block">Figma Dashboard Design</a>
                                        <span class="fs-12 text-muted">UI/UX Design</span>
                                    </div>
                                </div>
                                <div>
                                    <div class="fw-bold text-dark">$1250</div>
                                    <div class="fs-12 text-end">5 Projects</div>
                                </div>
                            </div>
                        </div>
                        <a href="javascript:void(0);"
                            class="card-footer fs-11 fw-bold text-uppercase text-center py-4">Full Details</a>
                    </div>
                </div>
                <!-- [Total Sales] end !-->








            </div>
        </div>
        <!-- [ Main Content ] end -->
    </div>

@endsection
