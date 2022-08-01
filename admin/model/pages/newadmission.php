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
                <div class="col-lg-12">
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
                                        <button type="submit" class="btn btn-outline-primary btn-block">ADD</button>
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
            </div>
        </div>
    </div>
</div>