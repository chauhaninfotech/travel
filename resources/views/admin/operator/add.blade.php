@extends('layouts.header')

@section('content')

<!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Operator Management</h5>
                    </div>
                    <ul class="breadcrumb">
                        
                        <li class="breadcrumb-item">Add New Operator </li>
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
                       
                            <a href="{{url('admin/operator-list'); }}" class="btn btn-success">
                                <i class="feather-list me-2"></i>
                                <span>Operator List</span>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- [ page-header ] end -->
            <!-- [ Main Content ] start -->
            <div class="main-content">
                <div class="row">
                   
                    <div class="col-xxl-12 col-xl-12 col-lg-12">
                        <div class="card border-top-0">
                            <div class="card-header p-0">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs flex-wrap w-100 text-center customers-nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item flex-fill border-top" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#personalTab" role="tab">Personal Information</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade  show active p-4" id="personalTab" role="tabpanel">
                                    <form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        <div class="row g-3">
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="fullName" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" id="fullName" placeholder="Enter FullName Name">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" placeholder="Enter Email">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="phone" class="form-label">Phone</label>
                                                <input type="text" class="form-control" id="phone" placeholder="Enter Phone Number">   
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="address" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="address" placeholder="Enter Address">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="city" class="form-label">City</label>
                                                <input type="text" class="form-control" id="city" placeholder="Enter City">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="state" class="form-label">State</label>
                                                <input type="text" class="form-control" id="state" placeholder="Enter State">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="zip" class="form-label">Zip Code</label>
                                                <input type="text" class="form-control" id="zip" placeholder="Enter Zip Code">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="country" class="form-label">Country</label>
                                                <input type="text" class="form-control" disabled value="India" >
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="status" class="form-label">Status</label>
                                                <select class="form-select" id="status">
                                                    <option selected disabled>Select Status</option>
                                                    <option value="1">Active</option>
                                                    <option value="0">Inactive</option>
                                                </select>
                                            </div>
                                            
									
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="jobPosition" class="form-label">Position</label>
                                            <select class="form-select" id="jobPosition">
                                                <option selected disabled>Select Position</option>
                                                <option value="1">Operator</option>
                                                <option value="2">Senior Dye Master</option>
                                                <option value="3">Junior Dye Master</option>
                                                <option value="4">Helper</option>
                                                <option value="5">Manager</option>
                                                <option value="6">Supervisor</option>
                                            </select>
                                            
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="department" class="form-label">Department</label>
                                            <select class="form-select" id="department">
                                                <option selected disabled>Select Department</option>
                                                <option value="1">Dyeing</option>
                                                <option value="2">Weaving</option>
                                                <option value="3">Finishing</option>
                                                <option value="4">Printing</option>
                                                <option value="5">Quality Control</option>
                                                <option value="6">Maintenance</option>
                                            </select>

                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="shift" class="form-label">Shift</label>
                                            <select class="form-select" id="shift">
                                                <option selected disabled>Select Shift</option>
                                                <option value="0">Morning</option>
                                                <option value="1">Afternoon</option>
                                                <option value="2">Evening</option>
                                                <option value="3">Night</option>
                                                <option value="4">Rotational</option>
                                                <option value="5">Fixed</option>
                                                <option value="6">Flexible</option>
                                                <option value="7">Split</option>
                                                <option value="8">On-call</option>
                                                <option value="9">Seasonal</option>

                                            </select>
                                        </div>
                                        
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                            <label for="notes" class="form-label">Notes</label>
                                            <textarea class="form-control" id="notes" rows="3" placeholder="Enter Notes"></textarea>
                                        </div>
                                        <div class="col-12 text-end d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Save Operator</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ Main Content ] end -->
        </div>
        
    </main>
    <!--! ================================================================ !-->


@endsection