@extends('layouts.header')

@section('content')

<!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Machines Management</h5>
                    </div>
                    <ul class="breadcrumb">
                        
                        <li class="breadcrumb-item">Add New Machine </li>
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
                       
                            <a href="{{url('admin/machine-list'); }}" class="btn btn-success">
                                <i class="feather-list me-2"></i>
                                <span>Machine List</span>
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
                                        <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#basicTab" role="tab">Basic Information</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade  show active p-4" id="basicTab" role="tabpanel">
                                    <form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label">Machine Name</label>
                                            <input type="text" class="form-control" name="machine_name" placeholder=" Enter Machine Name" required> 
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label">Machine Type</label>
                                            <select class="form-select" name="machine_type" required>
                                                <option value="" selected disabled>Select Machine Type</option>
                                                <option value="Type A">Type A</option>
                                                <option value="Type B">Type B</option>
                                                <option value="Type C">Type C</option>
                                            </select>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label">Model Number</label>
                                            <input type="text" class="form-control" name="model_number" placeholder=" Enter Model Number" required>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label">manufacturer</label>
                                            <input type="text" class="form-control" name="manufacturer" placeholder=" Enter Manufacturer" required>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label">Serial Number</label>
                                            <input type="text" class="form-control" name="serial_number" placeholder=" Enter Serial Number" required>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label">Year Installed</label>
                                            <input type="number" class="form-control" name="year_installed" placeholder=" Enter Year Installed" required>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label">Purchase Date</label>
                                            <input type="date" class="form-control" name="purchase_date" required>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label">Capacity</label>
                                            <input type="number" class="form-control" name="capacity" placeholder=" Enter Capacity" required>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label">Capacity Unit</label>
                                            <select class="form-select" name="capacity_unit" required>
                                                <option value="" selected disabled>Select Capacity Unit</option>
                                                <option value="kg">Kg</option>
                                                <option value="liters">Liters</option>
                                                <option value="tons">Tons</option>
                                            </select>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label">Maximum Temperature </label>
                                            <input type="number" class="form-control" name="max_temperature" placeholder=" Enter Maximum Temperature" required>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label">Max Pressure</label>
                                            <input type="number" class="form-control" name="max_pressure" placeholder=" Enter Max Pressure" required>
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label"> Power (kW)</label>
                                            <input type="number" class="form-control" name="power" placeholder="75" >
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label">Location</label>
                                            <input type="text" class="form-control" name="location" placeholder=" Floor 1" >
                                        </div>
                                        
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label">Dementions (LxWxH)</label>
                                            <input type="text" class="form-control" name="dementions" placeholder=" 2x3x4" >
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label class="form-label">status</label>
                                            <select class="form-select" name="status" required>
                                                <option value="" selected disabled>Select Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                                <option value="Under Maintenance">Under Maintenance</option>
                                            </select>
                                        </div>
                                    </div>
                                        <div class="col-12 text-end d-flex justify-content-end mt-5">
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