<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb adminx-page-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Profile</a></li>
                    <li class="breadcrumb-item active  aria-current=" page">Profile</li>
                </ol>
            </nav>

            <div class="pb-3">
                <h1>STUDENT PROFILE</h1>
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
                                   <div class="col-lg-8">
                                        <div class="form-group">
                                            <label class="form-label" for="exampleFormControlSelect1">
                                                Search By Student ID</label>
                                          
                                            <input type="text" class="form-control" id="exampleFormControlSelect1">
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

