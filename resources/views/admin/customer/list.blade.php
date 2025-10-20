@extends('layouts.header')

@section('content')
<!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Customer Management</h5>
                    </div>
                    
                </div>
                <div class="page-header-right ms-auto">
                    <div class="page-header-right-items">
                        
                        <div class="d-flex align-items-center gap-2 page-header-right-items-wrapper">
                          
                           
                            <div class="dropdown">
                                <a class="btn btn-icon btn-light-brand" data-bs-toggle="dropdown" data-bs-offset="0, 10" data-bs-auto-close="outside">
                                    <i class="feather-paperclip"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-pdf me-3"></i>
                                        <span>PDF</span>
                                    </a>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-filetype-csv me-3"></i>
                                        <span>CSV</span>
                                    </a>
                                   
                                    <div class="dropdown-divider"></div>
                                    <a href="javascript:void(0);" class="dropdown-item">
                                        <i class="bi bi-printer me-3"></i>
                                        <span>Print</span>
                                    </a>
                                </div>
                            </div>
                            <a href="{{ url('admin/customer-create'); }}" class="btn btn-primary">
                                <i class="feather-plus me-2"></i>
                                <span>Add Customer</span>
                            </a>
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
                    <div class="col-lg-12">
                        <div class="card stretch stretch-full">
                            <div class="card-body p-0">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="customerList">
                                        <thead>
                                            <tr>
                                                <th class="wd-30">
                                                    <div class="btn-group mb-1">
                                                        <div class="custom-control custom-checkbox ms-1">
                                                            <input type="checkbox" class="custom-control-input" id="checkAllCustomer">
                                                            <label class="custom-control-label" for="checkAllCustomer"></label>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th>Customer</th>
                                                <th>Email</th>
                                                <th>Group</th>
                                                <th>Phone</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th class="text-end">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_1">
                                                            <label class="custom-control-label" for="checkBox_1"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="customers-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/1.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Alexandra Della</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-email.html">alex.della@outlook.com</a></td>
                                                <td>
                                                    <select class="form-select form-control max-select" data-select2-selector="tag" data-max-select2="tag" multiple>
                                                        <option value="success" data-bg="bg-success">VIP</option>
                                                        <option value="info" data-bg="bg-info">Bugs</option>
                                                        <option value="primary" data-bg="bg-primary">Team</option>
                                                        <option value="teal" data-bg="bg-teal">Primary</option>
                                                        <option value="success" data-bg="bg-success">Updates</option>
                                                        <option value="warning" data-bg="bg-warning">Personal</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Promotions</option>
                                                        <option value="indigo" data-bg="bg-indigo">Customs</option>
                                                        <option value="primary" data-bg="bg-primary">Wholesale</option>
                                                        <option value="danger" data-bg="bg-danger">Low Budget</option>
                                                        <option value="teal" data-bg="bg-teal" selected>High Budget</option>
                                                    </select>
                                                </td>
                                                <td><a href="tel:">+1 (375) 9632 548</a></td>
                                                <td>2023-04-05, 00:05PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="success" data-bg="bg-success" selected>Active</option>
                                                        <option value="warning" data-bg="bg-warning">Inactive</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="customers-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_2">
                                                            <label class="custom-control-label" for="checkBox_2"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="customers-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-warning text-white">N</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Nancy Elliot</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-email.html">nancy.elliot@outlook.com</a></td>
                                                <td>
                                                    <select class="form-select form-control max-select" data-select2-selector="tag" data-max-select2="tag" multiple>
                                                        <option value="success" data-bg="bg-success">VIP</option>
                                                        <option value="info" data-bg="bg-info">Bugs</option>
                                                        <option value="primary" data-bg="bg-primary">Team</option>
                                                        <option value="teal" data-bg="bg-teal">Primary</option>
                                                        <option value="success" data-bg="bg-success">Updates</option>
                                                        <option value="warning" data-bg="bg-warning">Personal</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Promotions</option>
                                                        <option value="indigo" data-bg="bg-indigo">Customs</option>
                                                        <option value="primary" data-bg="bg-primary" selected>Wholesale</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Low Budget</option>
                                                        <option value="teal" data-bg="bg-teal">High Budget</option>
                                                    </select>
                                                </td>
                                                <td><a href="tel:"> (375) 8523 456</a></td>
                                                <td>2023-04-06, 02:52PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="success" data-bg="bg-success" selected>Active</option>
                                                        <option value="warning" data-bg="bg-warning">Inactive</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="customers-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_3">
                                                            <label class="custom-control-label" for="checkBox_3"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="customers-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/2.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Green Cute</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-email.html">green.cute@outlook.com</a></td>
                                                <td>
                                                    <select class="form-select form-control max-select" data-select2-selector="tag" data-max-select2="tag" multiple>
                                                        <option value="success" data-bg="bg-success">VIP</option>
                                                        <option value="info" data-bg="bg-info">Bugs</option>
                                                        <option value="primary" data-bg="bg-primary">Team</option>
                                                        <option value="teal" data-bg="bg-teal">Primary</option>
                                                        <option value="success" data-bg="bg-success">Updates</option>
                                                        <option value="warning" data-bg="bg-warning" selected>Personal</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Promotions</option>
                                                        <option value="indigo" data-bg="bg-indigo">Customs</option>
                                                        <option value="primary" data-bg="bg-primary">Wholesale</option>
                                                        <option value="danger" data-bg="bg-danger">Low Budget</option>
                                                        <option value="teal" data-bg="bg-teal">High Budget</option>
                                                    </select>
                                                </td>
                                                <td><a href="tel:"> (845) 9632 874</a></td>
                                                <td>2023-04-08, 08:34PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="success" data-bg="bg-success" selected>Active</option>
                                                        <option value="warning" data-bg="bg-warning">Inactive</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="customers-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_4">
                                                            <label class="custom-control-label" for="checkBox_4"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="customers-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-teal text-white">H</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Henry Leach</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-email.html">henry.leach@outlook.com</a></td>
                                                <td>
                                                    <select class="form-select form-control max-select" data-select2-selector="tag" data-max-select2="tag" multiple>
                                                        <option value="success" data-bg="bg-success">VIP</option>
                                                        <option value="info" data-bg="bg-info">Bugs</option>
                                                        <option value="primary" data-bg="bg-primary">Team</option>
                                                        <option value="teal" data-bg="bg-teal" selected>Primary</option>
                                                        <option value="success" data-bg="bg-success" selected>Updates</option>
                                                        <option value="warning" data-bg="bg-warning" selected>Personal</option>
                                                        <option value="danger" data-bg="bg-danger">Promotions</option>
                                                        <option value="indigo" data-bg="bg-indigo">Customs</option>
                                                        <option value="primary" data-bg="bg-primary">Wholesale</option>
                                                        <option value="danger" data-bg="bg-danger">Low Budget</option>
                                                        <option value="teal" data-bg="bg-teal">High Budget</option>
                                                    </select>
                                                </td>
                                                <td><a href="tel:"> (258) 9514 657</a></td>
                                                <td>2023-04-10, 05:25PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="success" data-bg="bg-success">Active</option>
                                                        <option value="warning" data-bg="bg-warning" selected>Inactive</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="customers-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_5">
                                                            <label class="custom-control-label" for="checkBox_5"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="customers-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/3.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Marianne Audrey</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-email.html">marine.adrey@outlook.com</a></td>
                                                <td>
                                                    <select class="form-select form-control max-select" data-select2-selector="tag" data-max-select2="tag" multiple>
                                                        <option value="success" data-bg="bg-success">VIP</option>
                                                        <option value="info" data-bg="bg-info">Bugs</option>
                                                        <option value="primary" data-bg="bg-primary" selected>Team</option>
                                                        <option value="teal" data-bg="bg-teal">Primary</option>
                                                        <option value="success" data-bg="bg-success" selected>Updates</option>
                                                        <option value="warning" data-bg="bg-warning">Personal</option>
                                                        <option value="danger" data-bg="bg-danger">Promotions</option>
                                                        <option value="indigo" data-bg="bg-indigo">Customs</option>
                                                        <option value="primary" data-bg="bg-primary">Wholesale</option>
                                                        <option value="danger" data-bg="bg-danger">Low Budget</option>
                                                        <option value="teal" data-bg="bg-teal">High Budget</option>
                                                    </select>
                                                </td>
                                                <td><a href="tel:"> (456) 6547 524</a></td>
                                                <td>2023-04-12, 12:02PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="success" data-bg="bg-success" selected>Active</option>
                                                        <option value="warning" data-bg="bg-warning">Inactive</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="customers-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_6">
                                                            <label class="custom-control-label" for="checkBox_6"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="customers-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-warning text-white">N</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Nancy Elliot</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-email.html">nancy.elliot@outlook.com</a></td>
                                                <td>
                                                    <select class="form-select form-control max-select" data-select2-selector="tag" data-max-select2="tag" multiple>
                                                        <option value="success" data-bg="bg-success">VIP</option>
                                                        <option value="info" data-bg="bg-info" selected>Bugs</option>
                                                        <option value="primary" data-bg="bg-primary" selected>Team</option>
                                                        <option value="teal" data-bg="bg-teal">Primary</option>
                                                        <option value="success" data-bg="bg-success" selected>Updates</option>
                                                        <option value="warning" data-bg="bg-warning">Personal</option>
                                                        <option value="danger" data-bg="bg-danger">Promotions</option>
                                                        <option value="indigo" data-bg="bg-indigo">Customs</option>
                                                        <option value="primary" data-bg="bg-primary">Wholesale</option>
                                                        <option value="danger" data-bg="bg-danger">Low Budget</option>
                                                        <option value="teal" data-bg="bg-teal">High Budget</option>
                                                    </select>
                                                </td>
                                                <td><a href="tel:"> (375) 8523 456</a></td>
                                                <td>2023-04-15, 02:40PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="success" data-bg="bg-success" selected>Active</option>
                                                        <option value="warning" data-bg="bg-warning">Inactive</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="customers-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_7">
                                                            <label class="custom-control-label" for="checkBox_7"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="customers-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/4.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Cute Green</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-email.html">cute.green@outlook.com</a></td>
                                                <td>
                                                    <select class="form-select form-control max-select" data-select2-selector="tag" data-max-select2="tag" multiple>
                                                        <option value="success" data-bg="bg-success" selected>VIP</option>
                                                        <option value="info" data-bg="bg-info">Bugs</option>
                                                        <option value="primary" data-bg="bg-primary">Team</option>
                                                        <option value="teal" data-bg="bg-teal">Primary</option>
                                                        <option value="success" data-bg="bg-success">Updates</option>
                                                        <option value="warning" data-bg="bg-warning">Personal</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Promotions</option>
                                                        <option value="indigo" data-bg="bg-indigo">Customs</option>
                                                        <option value="primary" data-bg="bg-primary" selected>Wholesale</option>
                                                        <option value="danger" data-bg="bg-danger">Low Budget</option>
                                                        <option value="teal" data-bg="bg-teal">High Budget</option>
                                                    </select>
                                                </td>
                                                <td><a href="tel:"> (632) 5486 662</a></td>
                                                <td>2023-04-25, 03:42PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="success" data-bg="bg-success" selected>Active</option>
                                                        <option value="warning" data-bg="bg-warning">Inactive</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="customers-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_8">
                                                            <label class="custom-control-label" for="checkBox_8"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="customers-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-success text-white">H</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Leach Henry</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-email.html">leach.henry@outlook.com</a></td>
                                                <td>
                                                    <select class="form-select form-control max-select" data-select2-selector="tag" data-max-select2="tag" multiple>
                                                        <option value="success" data-bg="bg-success" selected>VIP</option>
                                                        <option value="info" data-bg="bg-info" selected>Bugs</option>
                                                        <option value="primary" data-bg="bg-primary">Team</option>
                                                        <option value="teal" data-bg="bg-teal">Primary</option>
                                                        <option value="success" data-bg="bg-success">Updates</option>
                                                        <option value="warning" data-bg="bg-warning">Personal</option>
                                                        <option value="danger" data-bg="bg-danger">Promotions</option>
                                                        <option value="indigo" data-bg="bg-indigo">Customs</option>
                                                        <option value="primary" data-bg="bg-primary">Wholesale</option>
                                                        <option value="danger" data-bg="bg-danger">Low Budget</option>
                                                        <option value="teal" data-bg="bg-teal">High Budget</option>
                                                    </select>
                                                </td>
                                                <td><a href="tel:"> (951) 5478 884</a></td>
                                                <td>2023-04-14, 03:32PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="success" data-bg="bg-success" selected>Active</option>
                                                        <option value="warning" data-bg="bg-warning">Inactive</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="customers-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_9">
                                                            <label class="custom-control-label" for="checkBox_9"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="customers-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md">
                                                            <img src="assets/images/avatar/5.png" alt="" class="img-fluid">
                                                        </div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Audrey Marianne</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-email.html">adrey.marine@outlook.com</a></td>
                                                <td>
                                                    <select class="form-select form-control max-select" data-select2-selector="tag" data-max-select2="tag" multiple>
                                                        <option value="success" data-bg="bg-success">VIP</option>
                                                        <option value="info" data-bg="bg-info" selected>Bugs</option>
                                                        <option value="primary" data-bg="bg-primary">Team</option>
                                                        <option value="teal" data-bg="bg-teal">Primary</option>
                                                        <option value="success" data-bg="bg-success" selected>Updates</option>
                                                        <option value="warning" data-bg="bg-warning">Personal</option>
                                                        <option value="danger" data-bg="bg-danger">Promotions</option>
                                                        <option value="indigo" data-bg="bg-indigo">Customs</option>
                                                        <option value="primary" data-bg="bg-primary">Wholesale</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Low Budget</option>
                                                        <option value="teal" data-bg="bg-teal">High Budget</option>
                                                    </select>
                                                </td>
                                                <td><a href="tel:"> (556) 2457 586</a></td>
                                                <td>2023-04-20, 01:47PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="success" data-bg="bg-success">Active</option>
                                                        <option value="warning" data-bg="bg-warning">Inactive</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Declined</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="customers-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr class="single-item">
                                                <td>
                                                    <div class="item-checkbox ms-1">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input checkbox" id="checkBox_10">
                                                            <label class="custom-control-label" for="checkBox_10"></label>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="customers-view.html" class="hstack gap-3">
                                                        <div class="avatar-image avatar-md bg-primary text-white">E</div>
                                                        <div>
                                                            <span class="text-truncate-1-line">Elliot Nancy</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td><a href="apps-email.html">elliot.nancy@outlook.com</a></td>
                                                <td>
                                                    <select class="form-select form-control max-select" data-select2-selector="tag" data-max-select2="tag" multiple>
                                                        <option value="success" data-bg="bg-success">VIP</option>
                                                        <option value="info" data-bg="bg-info">Bugs</option>
                                                        <option value="primary" data-bg="bg-primary">Team</option>
                                                        <option value="teal" data-bg="bg-teal">Primary</option>
                                                        <option value="success" data-bg="bg-success">Updates</option>
                                                        <option value="warning" data-bg="bg-warning" selected>Personal</option>
                                                        <option value="danger" data-bg="bg-danger">Promotions</option>
                                                        <option value="indigo" data-bg="bg-indigo">Customs</option>
                                                        <option value="primary" data-bg="bg-primary">Wholesale</option>
                                                        <option value="danger" data-bg="bg-danger" selected>Low Budget</option>
                                                        <option value="teal" data-bg="bg-teal">High Budget</option>
                                                    </select>
                                                </td>
                                                <td><a href="tel:"> (554) 2478 663</a></td>
                                                <td>2023-04-22, 02:12PM</td>
                                                <td>
                                                    <select class="form-control" data-select2-selector="status">
                                                        <option value="success" data-bg="bg-success" selected>Active</option>
                                                        <option value="warning" data-bg="bg-warning">Inactive</option>
                                                        <option value="danger" data-bg="bg-danger">Declined</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <div class="hstack gap-2 justify-content-end">
                                                        <a href="customers-view.html" class="avatar-text avatar-md">
                                                            <i class="feather feather-eye"></i>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="avatar-text avatar-md" data-bs-toggle="dropdown" data-bs-offset="0,21">
                                                                <i class="feather feather-more-horizontal"></i>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-edit-3 me-3"></i>
                                                                        <span>Edit</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item printBTN" href="javascript:void(0)">
                                                                        <i class="feather feather-printer me-3"></i>
                                                                        <span>Print</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-clock me-3"></i>
                                                                        <span>Remind</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-archive me-3"></i>
                                                                        <span>Archive</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-alert-octagon me-3"></i>
                                                                        <span>Report Spam</span>
                                                                    </a>
                                                                </li>
                                                                <li class="dropdown-divider"></li>
                                                                <li>
                                                                    <a class="dropdown-item" href="javascript:void(0)">
                                                                        <i class="feather feather-trash-2 me-3"></i>
                                                                        <span>Delete</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
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
            </div>
            <!-- [ Main Content ] end -->
        </div>
        <!-- [ Footer ] start -->
        <footer class="footer">
            <p class="fs-11 text-muted fw-medium text-uppercase mb-0 copyright">
                <span>Copyright ©</span>
                <script>
                    document.write(new Date().getFullYear());
                </script>
            </p>
            <div class="d-flex align-items-center gap-4">
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Help</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Terms</a>
                <a href="javascript:void(0);" class="fs-11 fw-semibold text-uppercase">Privacy</a>
            </div>
        </footer>
        <!-- [ Footer ] end -->
    </main>
    <!--! ================================================================ !-->
@endsection
