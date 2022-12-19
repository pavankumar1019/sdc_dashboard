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
                                        <th scope="col">
                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                <input type="checkbox" class="custom-control-input table-select-all">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </th>
                                        <th scope="col">Detailes</th>
                                        <th scope="col">Fixation</th>
                                        <th scope="col">Paid Detailes</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                        <th scope="row">
                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                <input type="checkbox" class="custom-control-input table-select-row">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </th>
                                        <td>
                                            <h2>PAVAN KUMAR S</h2>
                                            SRINIVASA <br>
                                            1 PUC EBACS
                                        </td>
                                        <td>
                                            <h5><b>₹30,000 </b></h1>
                                        </td>
                                        <td>
                                            20-01-2022:9:22:AM - <b>₹10,000</b> <br>
                                            20-01-2022:9:22:AM - <b>₹10,000</b> <br>
                                        </td>
                                        <td>
                                            <span class="badge badge-pill badge-primary">Balance</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary" type="button"  data-toggle="modal" data-target="#exampleModalCenter">Veiw Profile</button>
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

