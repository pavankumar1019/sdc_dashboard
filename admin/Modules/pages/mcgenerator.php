<div class="main-panel">        
        <div class="content-wrapper">
          <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <h3>Bulk Marks Card Printing</h3>
          </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bulk Marks Card Priniting</h4>
                  <div class="form-group row">
                      <label>File upload (only xls,csv)</label>
                   
                      <div class="input-group col-xs-12">
                        <input type="file" class="form-control file-upload-info" id="deploy" >
                                            </div>
                    </div>
                    <p style="color:red" id="mssg"></p>
          Note:- &nbsp;The excel/csv file should be in the format <a href="">Click Here</a> sample data <a href="#">Download</a>
                  
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Read Here</h4>
                  <p class="card-description">
                    Note:- Enter the Class code as per given below
                  </p>
                <h5>PCMB - (5)</h5>
                <h5>PCMCS - (4)</h5>
                <h5>EBAS  - (3)</h5>
                <h5>EBACS - (2)</h5>
                <h5>BASM  - (1)</h5>
                </div>
          
             
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Your Data</h4>
                  <p class="card-description">
                     <code>You can modify your data here</code>
                  </p>
                  <button type="submit" class="btn  btn-outline-danger mr-2" id="truncate">Truncate Data</button>
                  <button type="submit" class="btn  btn-primary mr-2" id="print_all">Print all at once</button>
                  <p></p>
                  <label>Search</label>
                  <input class="typeahead" type="text" id="inputsearch" placeholder="Search here....">

                  <div class="table-responsive pt-3" id="data">
              
                  </div>
                </div>
              </div>
            </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2022. PK | Developer All rights reserved.</span>
            
          </div>
        </footer>
        <!-- partial -->
      </div>
</div>