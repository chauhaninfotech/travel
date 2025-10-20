@extends('layouts.header')

@section('content')

<!--! ================================================================ !-->
    <main class="nxl-container">
        <div class="nxl-content">
            <!-- [ page-header ] start -->
            <div class="page-header">
                <div class="page-header-left d-flex align-items-center">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Colors Management</h5>
                    </div>
                    <ul class="breadcrumb">
                        
                        <li class="breadcrumb-item">Create Advanced Color Formula </li>
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
                       
                            <a href="{{url('admin/color-list'); }}" class="btn btn-success">
                                <i class="feather-list me-2"></i>
                                <span>Colors Formula List</span>
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
                                        <a href="javascript:void(0);" class="nav-link active" data-bs-toggle="tab" data-bs-target="#basicTab" role="tab">Basic Inforamation</a>
                                    </li>
                                    <li class="nav-item flex-fill border-top" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#dyeTab" role="tab">Dye Formula</a>
                                    </li>
                                    <li class="nav-item flex-fill border-top" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#processTab" role="tab">Process Steps</a>
                                    </li>
                                    <li class="nav-item flex-fill border-top" role="presentation">
                                        <a href="javascript:void(0);" class="nav-link" data-bs-toggle="tab" data-bs-target="#testingTab" role="tab">Testing</a>
                                    </li>
                                    
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade  show active p-4" id="basicTab" role="tabpanel">
                                        <div class="row g-3">
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="colorName" class="form-label">Color/Formula Name</label>
                                                <input type="text" class="form-control" id="colorName" placeholder="Enter Color Name">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="colorCode" class="form-label">Color Code</label>
                                                <input type="text" class="form-control" id="colorCode" placeholder="Enter Color Code">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="pantoneReference" class="form-label">Pantone Reference</label>
                                                <input type="text" class="form-control" id="pantoneReference" placeholder="Pantone 18-1664 TPX">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="colorType" class="form-label">Color Type</label>
                                                <select class="form-select" id="colorType">
                                                    <option selected disabled>Select Color Type</option>
                                                    <option>Reactive</option>
                                                    <option>Vat</option>
                                                    <option>Disperse</option>
                                                    <option>Acid</option>
                                                    <option>Direct</option>
                                                    <option>Pigment</option>
                                                </select>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="fabricType" class="form-label">Fabric Type</label>
                                                <select class="form-select" id="fabricType">
                                                    <option selected disabled>Select Fabric Type</option>
                                                    <option>Cotton</option>
                                                    <option>Polyester</option>
                                                    <option>Nylon</option>
                                                    <option>Silk</option>
                                                    <option>Wool</option>
                                                    <option>Blended</option>
                                                </select>
                                            </div>
                                            
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="fabricWeight" class="form-label">Fabric Weight (GSM)</label>
                                                <input type="number" class="form-control" id="fabricWeight" placeholder="160">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="batchSize" class="form-label">Batch Size</label>
                                                <input type="number" class="form-control" id="batchSize" placeholder="100">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="shade" class="form-label">Shade</label>
                                                <select class="form-select" id="shade">
                                                    <option selected disabled>Select Shade</option>
                                                    <option>Light</option>
                                                    <option>Medium</option>
                                                    <option>Dark</option>
                                                </select> 
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="liquidRatio" class="form-label">Liquor Ratio</label>
                                                <select class="form-select" id="liquidRatio">
                                                    <option selected disabled>Select Liquor Ratio</option>
                                                    <option>1:5</option>
                                                    <option>1:10</option>
                                                    <option>1:15</option>
                                                    <option>1:20</option>
                                                    <option>1:30</option>
                                                </select>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="phLevel" class="form-label">pH Level</label>
                                                <input type="number" class="form-control" id="phLevel" placeholder="7.0">
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="fastness" class="form-label">Fastness</label>
                                                <select class="form-select" id="fastness">
                                                    <option selected disabled>Select Fastness</option>
                                                    <option>Wash Fastness</option>
                                                    <option>Light Fastness</option>
                                                    <option>Rub Fastness</option>
                                                    <option>Sweat Fastness</option>
                                                </select>
                                            </div>
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="status" class="form-label">Status</label>
                                                <select class="form-select" id="status">
                                                    <option selected disabled>Select Status</option>
                                                    <option>Active</option>
                                                    <option>Inactive</option>
                                                </select>   
                                            </div>
                                            <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                                <label for="notes" class="form-label">Notes</label>
                                                <textarea class="form-control" id="notes" rows="3" placeholder="Enter Notes"></textarea>
                                            </div>
									</div>
                                </div>
                                <div class="tab-pane fade p-4" id="dyeTab" role="tabpanel">
                             
                                    <div class="title-separator mt-3 mb-4" style="width: 100%; float: right;">
                                        <a style="width: 190px; float: right;" href="javascript:void(0);" class="btn btn-info addmore"><i class="feather-plus me-2"></i><span>Add More</span></a>
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
                                </div>
                                <div class="tab-pane fade p-4" id="processTab" role="tabpanel">
                                    <div class="title-separator mt-3 mb-4" style="width: 100%; float: right;">
                                        <a style="width: 190px; float: right;" href="javascript:void(0);" class="btn btn-info addmoreprocess"><i class="feather-plus me-2"></i><span>Add Step</span></a>
                                    </div>
                                    <div class="row g-3 process-step-section">
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="stepName" class="form-label">Step Name</label>
                                                <input type="text" class="form-control" id="stepName" placeholder="Enter Step Name">
                                            </div>
                                    
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="machineType" class="form-label">Machine Type</label>
                                                <select class="form-select" id="machineType">
                                                    <option selected disabled>Select Machine Type</option>
                                                    <option>Jet Dyeing Machine</option>
                                                    <option>Winch Dyeing Machine</option>
                                                    <option>Jig Dyeing Machine</option>
                                                    <option>Beam Dyeing Machine</option>
                                                    <option>Pad Batch Dyeing Machine</option>
                                                    <option>Continuous Dyeing Machine</option>
                                                </select>
                                            </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="temperature" class="form-label">Temperature (°C)</label>
                                            <input type="number" class="form-control" id="temperature" placeholder="Enter Temperature"> 
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="time" class="form-label">Time (mins)</label>
                                            <input type="number" class="form-control" id="time" placeholder="Enter Time">
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="phAdjuster" class="form-label">pH Adjuster</label>  
                                            <input type="text" class="form-control" id="phAdjuster" placeholder="Enter pH Adjuster">
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="phAdjusterAmount" class="form-label">pH Adjuster Amount (g)</label>
                                            <input type="number" class="form-control" id="phAdjusterAmount" placeholder="Enter pH Adjuster Amount"> 
                                        </div>
                                    </div>
                                    <div id="processStepAppend"></div>
                                </div>
                                <div class="tab-pane fade  p-4" id="testingTab" role="tabpanel">
                                    <div class="row g-3">
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="colorMatch" class="form-label">Color Match (%)</label>
                                            <input type="text" class="form-control" id="colorMatch" placeholder="96.5">
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="colorReproducibility" class="form-label">Reproducibility (%)</label>
                                            <input type="text" class="form-control" id="colorReproducibility" placeholder="96.5">
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="lightFastness" class="form-label">Light Fastness (%)</label>
                                            <input type="text" class="form-control" id="lightFastness" placeholder="6">
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="washFastness" class="form-label">Wash Fastness (%)</label>
                                            <input type="text" class="form-control" id="washFastness" placeholder="5-6">
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="rubFastness" class="form-label">Rub Fastness (%)</label>
                                            <input type="text" class="form-control" id="rubFastness" placeholder="5">
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="sweatFastness" class="form-label">Sweat Fastness (%)</label>
                                            <input type="text" class="form-control" id="sweatFastness" placeholder="5">
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                                            <label for="reproducibility" class="form-label">Reproducibility</label>
                                            <select class="form-select" id="reproducibility">
                                                <option selected disabled>Select Reproducibility</option>
                                                <option>Good</option>
                                                <option>Average</option>
                                                <option>Poor</option>   
                                            </select>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                                            <label for="colorBleeding" class="form-label">Color Bleeding</label>
                                            <select class="form-select" id="colorBleeding">
                                                <option selected disabled>Select Color Bleeding</option>
                                                <option>Excellent</option>
                                                <option>Good</option>
                                                <option>Average</option>
                                                <option>Poor</option>
                                            </select>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                                            <label for="colorConsistency" class="form-label">Color Consistency</label>
                                            <select class="form-select" id="colorConsistency">
                                                <option selected disabled>Select Color Consistency</option>
                                                <option>Excellent</option>
                                                <option>Good</option>
                                                <option>Average</option>
                                                <option>Poor</option>
                                            </select>
                                        </div>
                                        <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6">
                                            <label for="colorFastness" class="form-label">Color Fastness</label>
                                            <select class="form-select" id="colorFastness">
                                                <option selected disabled>Select Color Fastness</option>
                                                <option>Excellent</option>
                                                <option>Good</option>
                                                <option>Average</option>
                                                <option>Poor</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                                            <label for="testingNotes" class="form-label">Notes</label>
                                            <textarea class="form-control" id="testingNotes" rows="3" placeholder="Enter Notes"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <label for="testingReport" class="form-label">Upload Testing Report</label>
                                            <input class="form-control" type="file" id="testingReport">
                                        </div>
                                        <div class="col-12 text-end d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary">Save Formula</button>
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

                $(document).on('click', '.removeSection', function(e) {
                    e.preventDefault();
                    $(this).closest('.title-separator').next('.dye-formula-section').remove();
                    $(this).closest('.title-separator').remove();
                });

                $('.addmoreprocess').click(function(e) { 
                    e.preventDefault();
                    var newRow = `<hr><div class="title-separator mt-5" style="width: 100%; float: right;">
                                        <a style="width: 190px; float: right;" href="javascript:void(0);" class="btn btn-danger removeprocessSection"><i class="feather-trash me-2"></i><span>Remove Section</span></a>
                                    </div>
                                    <div class="row g-3 process-step-section">
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="stepName" class="form-label">Step Name</label>
                                                <input type="text" class="form-control" id="stepName" placeholder="Enter Step Name">
                                            </div>
                                    
                                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                                <label for="machineType" class="form-label">Machine Type</label>
                                                <select class="form-select" id="machineType">
                                                    <option selected disabled>Select Machine Type</option>
                                                    <option>Jet Dyeing Machine</option>
                                                    <option>Winch Dyeing Machine</option>
                                                    <option>Jig Dyeing Machine</option>
                                                    <option>Beam Dyeing Machine</option>
                                                    <option>Pad Batch Dyeing Machine</option>
                                                    <option>Continuous Dyeing Machine</option>
                                                </select>
                                            </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="temperature" class="form-label">Temperature (°C)</label>
                                            <input type="number" class="form-control" id="temperature" placeholder="Enter Temperature"> 
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="time" class="form-label">Time (mins)</label>
                                            <input type="number" class="form-control" id="time" placeholder="Enter Time">
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="phAdjuster" class="form-label">pH Adjuster</label>  
                                            <input type="text" class="form-control" id="phAdjuster" placeholder="Enter pH Adjuster">
                                        </div>
                                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6">
                                            <label for="phAdjusterAmount" class="form-label">pH Adjuster Amount (g)</label>
                                            <input type="number" class="form-control" id="phAdjusterAmount" placeholder="Enter pH Adjuster Amount"> 
                                        </div>
                                    </div>`;
                    $('#processStepAppend').append(newRow);
                });

                $(document).on('click', '.removeprocessSection', function(e) { 
                    e.preventDefault();
                    $(this).closest('.title-separator').next('.process-step-section').remove();
                    $(this).closest('.title-separator').remove();
                });
            });
        </script>
    @endpush