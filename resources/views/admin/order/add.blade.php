@extends('layouts.header')

@section('content')

<!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Receipt Management</h5>
                    </div>
                    <ul class="breadcrumb">
                        
                        <li class="breadcrumb-item">Add New Grey Product </li>
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
                       
                            <a href="{{url('admin/order-list'); }}" class="btn btn-success">
                                <i class="feather-list me-2"></i>
                                <span>Receipt Grey Product</span>
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
                                        <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#orderTab" role="tab">Order Details</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade  show active p-4" id="orderTab" role="tabpanel">
                                    <form class="form-horizontal" action="#" method="POST" enctype="multipart/form-data">
                                    @csrf
                                        
                                    <div class="row g-3">
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="orderNumber" class="form-label">Order Number</label>
                                                <input type="text" class="form-control" id="orderNumber" placeholder="Enter Order Number">
                                            </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="orderDate" class="form-label">Order Date</label>
                                                <input type="date" class="form-control" id="orderDate" placeholder="Select Order Date">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="deliveryDate" class="form-label">Delivery Date</label>
                                                <input type="date" class="form-control" id="deliveryDate" placeholder="Select Delivery Date">
                                            </div>
                                    
                                            
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="fabrictName" class="form-label">Fabric Name</label>
                                                <select class="form-select" id="fabrictName">
                                                    <option selected disabled>Select Fabric Name</option>
                                                    <option>Cotton</option>
                                                    <option>Polyester</option>
                                                    <option>Silk</option>
                                                    <option>Linen</option>
                                                    <option>Wool</option>
                                                    <option>Nylon</option>
                                                </select>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="customerName" class="form-label">Customer Name</label>
                                                <select class="form-select" id="customerName">
                                                    <option selected disabled>Select Customer Name</option>
                                                    <option>John Doe</option>
                                                    <option>Jane Smith</option>
                                                    <option>Michael Johnson</option>
                                                    <option>Emily Davis</option>
                                                    <option>David Wilson</option>
                                                </select>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="fabricType" class="form-label">Fabric Type</label>
                                                <select class="form-select" id="fabricType">
                                                    <option selected disabled>Select Fabric Type</option>
                                                    <option>Woven</option>
                                                    <option>Knit</option>
                                                    <option>Non-woven</option>
                                                </select>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="fabricColor" class="form-label">Fabric Color</label>
                                                <input type="text" class="form-control" id="fabricColor" placeholder="Enter Fabric Color">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="fabricWeight" class="form-label">Weight (gsm)</label>
                                                <input type="number" class="form-control" id="fabricWeight" placeholder="Enter Fabric Weight">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="fabricQuantity" class="form-label">Quantity (meters)</label>
                                                <input type="number" class="form-control" id="fabricQuantity" placeholder="Enter Fabric Quantity">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="fabricRoll" class="form-label">Roll</label>
                                                <input type="number" class="form-control" id="fabricRoll" placeholder="Enter Roll ">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="fabricPrice" class="form-label">Price per Meter ($)</label>
                                                <input type="number" class="form-control" id="fabricPrice" placeholder="Enter Price per Meter"> 
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="totalAmount" class="form-label">Total Amount ($)</label>
                                                <input type="number" class="form-control" id="totalAmount" placeholder="Enter Total Amount">
                                            </div>
                                            


                                        <div class="col-12 text-end d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Save Receipt</button>
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
@push('scripts')
        <script>
            $(document).ready(function() {
                $('.addmore').click(function(e) { 
                    e.preventDefault();
                    var newRow = `<hr><div class="title-separator mt-3 mb-4" style="width: 100%; float: right;">
                                        <a style="width: 190px; float: right;" href="javascript:void(0);" class="btn btn-danger removeSection"><i class="feather-trash me-2"></i><span>Remove Section</span></a>
                                    </div>
                                    <div class="row g-3 dye-formula-section">
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2">
                                                <label for="dyeName" class="form-label">Dye Name</label>
                                                <input type="text" class="form-control" id="dyeName" placeholder="Enter Dye Name">
                                            </div>
                                    
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2">
                                                <label for="dyetype" class="form-label">Dye Type</label>
                                                <select class="form-select" id="dyetype">
                                                    <option selected disabled>Select Dye Type</option>
                                                    <option>Reactive</option>
                                                    <option>Vat</option>
                                                    <option>Disperse</option>
                                                    <option>Acid</option>
                                                    <option>Direct</option>
                                                    <option>Pigment</option>
                                                </select>
                                            </div>
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2">
                                                <label for="dyeClass" class="form-label">Dye Class</label>
                                                <input type="text" class="form-control" id="dyeClass" placeholder="Enter Dye Class">
                                            </div>
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2">
                                                <label for="dyeWeight" class="form-label">Weight (kg)</label>
                                                <input type="number" class="form-control" id="dyeWeight" placeholder="100">
                                            </div>
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2">
                                                <label for="dyeConcentration" class="form-label">Dye Concentration (%)</label>
                                                <input type="number" class="form-control" id="dyeConcentration" placeholder="Enter Dye Concentration">
                                            </div>
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2">
                                                <label for="dyeAmount" class="form-label">Dye Amount (g)</label>
                                                <input type="number" class="form-control" id="dyeAmount" placeholder="Enter Dye Amount">
                                            </div>
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2">
                                                <label for="auxiliaries" class="form-label">Auxiliaries</label>
                                                <input type="text" class="form-control" id="auxiliaries" placeholder="Enter Auxiliaries">
                                            </div>
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2">
                                                <label for="auxiliaryAmount" class="form-label">Auxiliary Amount (g)</label>    
                                                <input type="number" class="form-control" id="auxiliaryAmount" placeholder="Enter Auxiliary Amount">
                                            </div>
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2">
                                                <label for="waterQuality" class="form-label">Water Quality</label>
                                                <select class="form-select" id="waterQuality">
                                                    <option selected disabled>Select Water Quality</option>
                                                    <option>Soft</option>
                                                    <option>Medium</option>
                                                    <option>Hard</option>
                                                </select>
                                            </div>
                                           <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2">
                                                <label for="waterAmount" class="form-label">Water Amount (L)</label>
                                                <input type="number" class="form-control" id="waterAmount" placeholder="Enter Water Amount">
                                            </div>
                                            
                                            <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2">
                                                <label for="salt" class="form-label">Salt (g)</label>
                                                <input type="number" class="form-control" id="salt" placeholder="Enter Salt Amount">
                                            </div>
                                           <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-2">
                                                <label for="otherChemicals" class="form-label">Other Chemicals</label>
                                                <select class="form-select" id="otherChemicals">
                                                    <option selected disabled>Select Other Chemicals</option>
                                                    <option>None</option>
                                                    <option>Urea</option>
                                                    <option>Soda Ash</option>
                                                    <option>Hydrogen Peroxide</option>
                                                    <option>Acetic Acid</option>
                                                    <option>Formalin</option>
                                                </select>
                                            </div>
                                        <div id="dyeFormulaAppend"></div>
                                    </div>
                                </div>`;
                    $('#dyeFormulaAppend').append(newRow);
                });

            });
        </script>
    @endpush