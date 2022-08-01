<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb adminx-page-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                    <li class="breadcrumb-item active  aria-current=" page">Elements</li>
                </ol>
            </nav>

            <div class="pb-3">
                <h1>Elements</h1>
            </div>

            <div class="row">
                <div class="col-lg-7">
                    <div class="card mb-grid">
                        <div class="card-header">
                            <div class="card-header-title">New Admission - <b>PUC</b></div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="col-lg-3">
                                        <label class="form-label" for="exampleInputPassword1">Name</label>
                                        <input type="text" class="form-control" placeholder="City">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label" for="exampleInputPassword1">Father Name</label>
                                        <input type="text" class="form-control" placeholder="State">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label" for="exampleInputPassword1">Gender</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label" for="exampleInputPassword1">DOB</label>
                                        <input type="date" class="form-control" placeholder="Zip">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label" for="exampleInputPassword1">Phone_no</label>
                                        <input type="text" class="form-control" placeholder="Zip">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label" for="exampleInputPassword1">Address</label>
                                        <input type="text" class="form-control" placeholder="Zip">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label" for="exampleInputPassword1">Class</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>1st PUC</option>
                                            <option>2nd PUC</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label" for="exampleInputPassword1">Combination</label>
                                        <select class="form-control" id="exampleFormControlSelect1">
                                            <option>EBACS</option>
                                            <option>EBAS</option>
                                            <option>PCMB</option>
                                            <option>PCMCS</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label" for="exampleInputPassword1">Fee Fixation</label>
                                        <input type="text" class="form-control" onkeypress="return isNumber(event)"  id="enterammount" name="Ammount" style="font-size:35px" id="">
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label" for="exampleInputPassword1">Fee Paid</label>
                                        <input type="text" class="form-control" onkeypress="return isNumber(event)"  id="enterammount1" name="Ammount" style="font-size:50px;color:blue;" id="">
                                    </div>
                                    <div class="col-lg-12">
                                        <label for=""></label>
                                        <button type="submit" class="btn btn-outline-primary btn-block">Proceed</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Data table -->
                    <!-- <div class="card mb-grid">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <div class="card-header-title">Table</div>
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
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Username</th>
                                        <th scope="col">Roles</th>
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
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>@mdo</td>
                                        <td>
                                            <span class="badge badge-pill badge-primary">Admin</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                <input type="checkbox" class="custom-control-input table-select-row">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>@fat</td>
                                        <td>
                                            <span class="badge badge-pill badge-primary">Author</span>
                                            <span class="badge badge-pill badge-primary">Developer</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">
                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                <input type="checkbox" class="custom-control-input table-select-row">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </th>
                                        <td>Larry</td>
                                        <td>the Bird</td>
                                        <td>@twitter</td>
                                        <td>
                                            <span class="badge badge-pill badge-danger">Inactive</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div> -->

                </div>
                <div class="col-lg-5">
                <div class="card mb-grid">
                  <div class="card-header">
                    <div class="card-header-title">Horizontal form</div>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                        </div>
                      </div>
                      <fieldset class="form-group">
                        <div class="row">
                          <legend class="col-form-legend col-sm-2 form-label">Radios</legend>
                          <div class="col-sm-10">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                                Option one is this and that&mdash;be sure to include why it's great
                              </label>
                            </div>
                            <div class="form-check">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                Option two can be something else and selecting it will deselect option one
                              </label>
                            </div>
                            <div class="form-check disabled">
                              <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
                                Option three is disabled
                              </label>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-sm-2 form-label pt-1">Checkbox</div>
                        <div class="col-sm-10">
                          <div class="form-check">
                            <label class="form-check-label">
                              <input class="form-check-input" type="checkbox"> Check me out
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Sign in</button>
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