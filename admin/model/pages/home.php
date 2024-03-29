

      <!-- adminx-content-aside -->
      <div class="adminx-content">
        <!-- <div class="adminx-aside">

        </div> -->

        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Dashboard</h1>
            </div>

            <div class="row">
              <div class="col-md-6 col-lg-3 d-flex bounceIn">
                <div class="card mb-grid w-100">
                  <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between mb-3">
                      <h5 class="card-title mb-0">
                       Admissions Today (PUC)
                      </h5>

                      <div class="card-title-sub">
                      100 Q
                      </div>
                    </div>

                 
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex bounceIn">
                <div class="card mb-grid w-100">
                  <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between mb-3">
                      <h5 class="card-title mb-0">
                      Admissions Today (Degree)
                      </h5>

                      <div class="card-title-sub">
                       80 Q
                      </div>
                    </div>

                    <!-- <div class="progress mt-auto">
                      <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> -->
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex bounceIn">
                <div class="card border-0 bg-info text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="layers"></i>
                    </div>
                    <div class="card-body">
                      <div class="card-info-title">PUC</div>
                      <h3 class="card-title mb-0">
                        ₹76800
                      </h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-3 d-flex bounceIn" id="sms_div" onClick="location.href='./dashboard.php?page=sms'">
                <div class="card border-0 bg-secondary text-white text-center mb-grid w-100">
                  <div class="d-flex flex-row align-items-center h-100">
                    <div class="card-icon d-flex align-items-center h-100 justify-content-center">
                      <i data-feather="layers"></i>
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
?>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-lg-8 zoomIn">
                <div class="card">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title slideInRight">SDC-Institution</div>

                    <nav class="card-header-actions">
                      <a class="card-header-action" data-toggle="collapse" href="#card1" aria-expanded="false" aria-controls="card1">
                        <i data-feather="minus-circle"></i>
                      </a>
                      
                      <div class="dropdown">
                        <a class="card-header-action" href="#" role="button" id="card1Settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <i data-feather="settings"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="card1Settings">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </div>

                      <a href="#" class="card-header-action">
                        <i data-feather="x-circle"></i>
                      </a>
                    </nav>
                  </div>
                  <div class="card-body collapse show" id="card1">
                    <h4 class="card-title">Manul</h4>
                    <p class="card-text">Need help? Read our manul.</p>
                    <a href="#" class="btn btn-secondary">Read more..</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="card">
                  <div class="card-header">
                New Admission
                  </div>
                  <div class="card-body">
                    <h4 class="card-title">Enroll New Admission</h4>
                    <p class="card-text">Make your work done easy.</p>
                    <a href="#" class="btn btn-info">Go</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    