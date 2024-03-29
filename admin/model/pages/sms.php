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
                                          
                                            <input type="datetime-local" class="form-control" id="exampleFormControlSelect1">
                                        </div>
                                    </div>
                                   
                                   
                                    
                                    <div class="col-lg-4">
                                        <label class="form-label" for="exampleFormControlSelect1">Action
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
	$data=json_decode($report, true);
	// Process your response here
    foreach($data['messages'] as $repo){
      ?>
         <tr>
                                       
                                        <td>
                                            <?php echo $repo['datetime']; ?>
                                            
                                        </td>
                                        <td>
                                            <h5><b><?php echo $repo['number']; ?></b></h1>
                                        </td>
                                        <td>
                                        <?php echo $repo['sender']; ?>
                                        
                                        </td>
                                        <td>
                                        <?php echo $repo['content']; ?>
                                        </td>
                                        <td>
                                        <?php echo $repo['status']; ?>
                                        </td>
                                    </tr>
      <?php
        
    };
?>
                                 
                                   
                                    
                                   

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

