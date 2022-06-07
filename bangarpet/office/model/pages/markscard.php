<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- Large modal -->

                <div class="modal fade bd-example-modal-lg" id="newadmissionmodal" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">MC- Generator</h5>
                                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> -->
                            </div>
                            <div class="modal-body">
                                <form method="post" id="newadmissionsubmit">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                        <label for="numberonly">SATS No.</label>
                                        <input type="text" class="form-control p-lg-2" id="numberonly"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10">

                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4">STUDENT No.</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4">REG No.</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4">NAME</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4">FATHER NAME</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4">MOTHER NAME</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="inputPassword4">COMBINATION</label>
                                            <select id="inputState" name="combination_opted" class="form-control" required="">
                    <option selected="">Choose...</option>
                    <option value="5">PCMB</option>
                    <option value="4">PCMCs</option>
                    <option value="3">EBAS</option>
                    <option value="2">EBACs</option>
                    <option value="1">BASM</option>
                </select>
                                        </div>
                                        <div class="form-group col-lg-4 col-2">
                                            <label for="inputPassword4">1ST LANGUAGE</label>
                                            <select class="form-control dropdown" id="religion" name="religion">
    <option value="" selected="selected" disabled="disabled">-- select one --</option>
  
    <option value="01">KANNADA</option>
    <option value="03">HINDI</option>
    <option value="08">URDU</option>
    <option value="09">SANSKRIT</option>
 
  </select>
                                        </div>
                                        <div class="form-group col-md-2">
                                        <label for="numberonly">L1 MARKS</label>
                                        <input type="text" class="form-control p-lg-2" id="numberonly">

                                        </div>
                                        <div class="form-group col-md-2">
                                        <label for="numberonly">L2 MARKS</label>
                                        <input type="text" class="form-control p-lg-2" id="numberonly"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10">

                                        </div>
                                        <div class="form-group col-md-2">
                                        <label for="numberonly">S1 MARKS</label>
                                        <input type="text" class="form-control p-lg-2" id="numberonly"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10">

                                        </div>
                                        <div class="form-group col-md-2">
                                        <label for="numberonly">S2 MARKS</label>
                                        <input type="text" class="form-control p-lg-2" id="numberonly"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10">

                                        </div>
                                        <div class="form-group col-md-2">
                                        <label for="numberonly">S3 MARKS</label>
                                        <input type="text" class="form-control p-lg-2" id="numberonly"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10">

                                        </div>
                                        <div class="form-group col-md-2">
                                        <label for="numberonly">S4 MARKS</label>
                                        <input type="text" class="form-control p-lg-2" id="numberonly"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10">

                                        </div>
                                        <div class="form-group col-md-4">
                                        <label for="numberonly">TOTAL MARKS</label>
                                        <input type="text" class="form-control p-lg-2" id="numberonly"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10">

                                        </div>
                                        <div class="form-group col-md-4">
                                        <label for="numberonly">YEAR OF PASSING</label>
                                        <input type="text" class="form-control p-lg-2" id="numberonly" >

                                        </div>
                                        
                                        <hr>
                                        
                                        <div class="form-group  col-12">
                                        <input type="submit" name="submit"  class="btn btn-primary" />
                                        </div>
                                      

                                    </div>

                            </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <!-- modal Close -->
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">MC- Generator</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./dashboard.php?page=home"><i
                                            class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:">MC- Generator</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page inner -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- [ Main Content ] start -->
                    <div class="row">
                        <!--[ daily sales section ] start-->
                        <div class="col-md-6 col-xl-4 ">
                            <div class="card daily-sales bg-dark " type="button" id="btnAdmissionModal">
                                <div class="card-block">
                                    <h6 class="mb-4 text-white">MC- Generator</h6>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-9">
                                            <h3 class="f-w-300 d-flex align-items-center m-b-0 text-white"><i
                                                    class="feather icon-grid text-c-green f-30 m-r-10"></i> <span id="getcountdata">0</span> 
                                            </h3>
                                        </div>
                                        <p class="text-white">Custom</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 ">
                            <div class="card daily-sales bg-danger " type="button" id="btnAdmissionModal">
                                <div class="card-block">
                                    <h6 class="mb-4 text-white">Truncate Data</h6>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-9">
                                            <h3 class="f-w-300 d-flex align-items-center m-b-0 text-white"><i
                                                    class="feather icon-alert-triangle text-c-green f-30 m-r-10"></i><span id="getcountdata2">0</span> 
                                            </h3>
                                            
                                        </div>
                                        <p class="text-white"> Warning</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [ breadcrumb ] end -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- [ Main Content ] start -->
                    <div class="row">

                        <div class="col-md-12 col-xl-12 ">
                            <div class="card daily-sales">
                                <div class="card-block">
                                    <h6 class="mb-4">Query</h6>
                                    <div class="form-group">
                                        <label for="search">Search Here !</label>
                                        <input type="text" class="form-control" id="search_box" placeholder="Search..">

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6">
                            <div class="card Recent-Users">
                                <div class="card-header">
                                    <h5>Result Data</h5>
                                </div>
                                <div class="card-block px-0 py-3">
                                    <div class="table-responsive" id="dynamic_content">
                                       
                                                
                                       
                                                
                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Main Content ] end -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- <script>
    function onSubmit() {

        var formData = new FormData();
        formData.append("name", document.getElementById("name").value);
         
        var ajax = new XMLHttpRequest();
        ajax.open("POST", "./php_operations/newadmissions.php", true);
        ajax.send(formData);
 
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
 
        var progress = document.getElementById("progress");
             ajax.upload.onprogress = (event) => {
    // event.loaded returns how many bytes are downloaded
    // event.total returns the total number of bytes
    // event.total is only available if server sends `Content-Length` header
    progress.max = event.total;
            progress.value = event.loaded;
    console.log(`Uploaded ${event.loaded} of ${event.total} bytes`);
}
        return false;
    }
</script> -->

