<?php

include '../Includes/applicationform.php';
include '../Includes/memberapply.php';


    $tid = intval($_GET['tid']);//


    if($tid == 2){
        echo'<div class="form-group row mb-3">
                        <div class="col-xl-6">
                        <label class="form-control-label">All applications<span class="text-danger ml-2">*</span></label>
                        <input type="form" class="form-control" name="applicationforms" id="applicationforms">
                        </div>
                    </div>';
    }
    else if($tid == 3){

         echo'<div class="form-group row mb-3">
                        <div class="col-xl-6">
                        <label class="form-control-label">From Date<span class="text-danger ml-2">*</span></label>
                        <input type="applicationforms" class="form-control" name="fromDate" id="applicationforms">
                        </div>
                        <div class="col-xl-6">
                        <label class="form-control-label">To Date<span class="text-danger ml-2">*</span></label>
                        <input type="date" class="form-control" name="toDate" id="applicationforms">
                        </div>
                    </div>';

    }
    else{


    }
        
?>

