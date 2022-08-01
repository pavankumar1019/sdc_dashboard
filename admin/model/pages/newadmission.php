<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb adminx-page-breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Fee system</a></li>
                    <li class="breadcrumb-item active  aria-current=" page">New Admission</li>
                </ol>
            </nav>

            <div class="pb-3">
                <h1>New Admission</h1>
            </div>

            <div class="row">
                <div class="col-lg-9">
                    <div class="card mb-grid">
                        <div class="card-header">
                            <div class="card-header-title">New Admission - <b>PUC</b></div>
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-row">
                                    <div class="col-lg-3">
                                        <label class="form-label" for="exampleInputPassword1">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Name">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label" for="exampleInputPassword1">Father Name</label>
                                        <input type="text" class="form-control" id="fathername"
                                            placeholder="Father name">
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
                                        <input type="date" class="form-control" id="dob" placeholder="DOB">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label" for="exampleInputPassword1">Phone_no</label>
                                        <input type="text" class="form-control" id="phone" placeholder="phone">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label" for="exampleInputPassword1">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="address">
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label" for="exampleInputPassword1">Class</label>
                                        <select class="form-control" id="class">
                                            <option value="1st PUC">1st PUC</option>
                                            <option vlaue="2nd PUC">2nd PUC</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-3">
                                        <label class="form-label" for="exampleInputPassword1">Combination</label>
                                        <select class="form-control" id="comb">
                                            <option value="EBACS">EBACS</option>
                                            <option value="EBAS">EBAS</option>
                                            <option value="PCMB">PCMB</option>
                                            <option value="PCMCS">PCMCS</option>

                                        </select>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label" for="exampleInputPassword1">Fee Fixation</label>
                                        <input type="text" class="fixation form-control"
                                            onkeypress="return isNumber(event)" id="enterammount" name="Ammount"
                                            style="font-size:35px" id="">
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-check">
                                            <label class="form-label" for="exampleInputPassword1">Mode of
                                                Payment</label>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="m_pay"
                                                            value="cash"> Cash
                                                    </label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="m_pay"
                                                            value="phonephe"> Phone phe
                                                    </label>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label class="form-check-label">
                                                        <input class="form-check-input" type="radio" name="m_pay"
                                                            value="cheque"> Cheque
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label" for="exampleInputPassword1">Fee Paid</label>
                                        <input type="text" class="paid form-control" onkeypress="return isNumber(event)"
                                            id="enterammount1" name="Ammount" style="font-size:50px;color:blue;" id="">
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
                <div class="col-lg-3">
                    <div class="card mb-grid">
                        <div class="card-header">
                            <div class="card-header-title">Preview Panel</div>
                        </div>
                        <div class="card-body">
                            <h2 id="v_name" style="text-transform: uppercase;"></h2>
                            <h5 id="v_fathername" style="text-transform: uppercase;"></h5>
                            <p id="v_dob"></p>
                            <h5><b id="v_phone"></b></h5>
                            <p id="v_address"></p>
                            <h6><span id="v_class"></span><span id="v_comb"></span></h6>
                            <h5 id="v_fixation"></h5>
                            <h5 id="v_paid"></h5>
                            <h5 id="balance"></h5>
                        </div>
                    </div>



                </div>



            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="payment_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mode"></h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
            </div>
            <div class="modal-body">
                <label>Ricept No</label>
                <input type="text" style="text-align: center;" class="form-control" name="" id="">
                <label id="tx">TXN ID</label>
                <input type="text" style="text-align: center;" class="form-control" id="tx1" name="" >
                <label id="c_no">Check_No</label>
                <input type="text" style="text-align: center;" class="form-control" name="" id="c_no">
                <label id="cdate">Check Date</label>
                <input type="text" style="text-align: center;" class="form-control" name="" id="cdate">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
               
            </div>
        </div>
    </div>
</div>