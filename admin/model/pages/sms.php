<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb adminx-page-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">SMS</a></li>
                    <li class="breadcrumb-item active  aria-current=" page">Logs</li>
                </ol>
            </nav>

            <div class="pb-3">
                <h1>SMS</h1>
            </div>
            <div class="col-md-6 col-lg-3 d-flex bounceIn">
                <div class="card border-0 bg-secondary text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">SMS Credits</div>
                      <h3 class="card-title mb-0">
                      <?php
	// Account details
	$apiKey = urlencode('NDM1OTMzNTA0MjUyMzk2MzVhNGUzMDQ4NzY3NTM5Njc=');
 
	// Prepare data for POST request
	$data = array('apikey' => $apiKey);
 
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/balance/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($ch);
	curl_close($ch);
	

  $result = json_decode($response, true);
	// Process your response here
  echo $result['balance']['sms'];
?>                </h3>
                    </div>
                  </div>
                </div>
              </div>
            <div class="row">
                <div class="col-lg-12">



                    <div class="card mb-grid">
                        <div class="card-header">
                            <div class="card-header-title">Functions</div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                   <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleFormControlSelect1">
                                                Year</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="">YYYY</option>
                                                <option>2022</option>
                                                <option>2021</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleFormControlSelect1">
                                                Select Course</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option value="">-Select one-</option>
                                                <option>PUC</option>
                                                <option>UG</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleFormControlSelect1">
                                                Select Class</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>1st PUC</option>
                                                <option>2nd PUC</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleFormControlSelect1">
                                                Select Combination</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                            <option value="all">ALL</option>    
                                            <option>PCMB</option>
                                                <option>PCMCS</option>
                                                <option>EBACS</option>
                                                <option>EBAS</option>
                                                <option>ABMS</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <label class="form-label" for="exampleFormControlSelect1">
                                        </label>
                                        <input type="button" class="form-control btn btn-outline-info btn-block" value="Get">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Datatable -->
                    <div class="card mb-grid">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="card-header-title">Data</div>
                        </div>
                        <div class="table-responsive-md">
                            <table class="table table-actions table-striped table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                <input type="checkbox" class="custom-control-input table-select-all">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </th>
                                        <th scope="col">Date</th>
                                        <th scope="col">To</th>
                                        <th scope="col">From</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
	// Account details
	$apiKey = urlencode('NDM1OTMzNTA0MjUyMzk2MzVhNGUzMDQ4NzY3NTM5Njc=');
	// Prepare data for POST request
	$data = array('apikey' => $apiKey);
	// Send the POST request with cURL
	$ch = curl_init('https://api.textlocal.in/get_history_api/');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$report = curl_exec($ch);
	curl_close($ch);
	
	// Process your response here
	var_dump( $report['total']);
?>
                                    <tr>
                                        <th scope="row">
                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                <input type="checkbox" class="custom-control-input table-select-row">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </th>
                                        <td>
                                            <h2> 20-01-2022:9:22:AM</h2>
                                            
                                        </td>
                                        <td>
                                            <h5><b>7483737698</b></h1>
                                        </td>
                                        <td>
                                            <b>SDCPUC</b> 
                                        
                                        </td>
                                        <td>
                                        Your OTP : 333259 Do not share OTP SDC College Bangarpet  
                                        </td>
                                        <td>
                                        <b>Undelivered </b> 
                                        </td>
                                    </tr>
                                   
                                    
                                   

                                </tbody>
                            </table>
                        </div>
                    </div>


                    <!-- data table end  -->


                </div>

            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Collect Fee</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <div class="modal-body">
       <h2>PAVAN KUMAR S</h2>
       <h4>Fixation : <b><?php
       setlocale(LC_MONETARY,"en_IN");
       echo money_format(" %i", "30000");
       ?></b></h4>
       <input type="text" class="form-control" onkeypress="return isNumber(event)"  id="enterammount" name="Ammount" style="font-size:100px" id="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Collect</button>
      </div>
    </div>
  </div>
</div>