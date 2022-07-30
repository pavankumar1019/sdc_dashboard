<div class="adminx-content">
        <div class="adminx-main-content">
          <div class="container-fluid">
            <!-- BreadCrumb -->
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb adminx-page-breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                <li class="breadcrumb-item active  aria-current="page">Elements</li>
              </ol>
            </nav>

            <div class="pb-3">
              <h1>Elements</h1>
            </div>

            <div class="row">
              <div class="col-lg-6">
                <div class="card mb-grid">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="card-header-title">Basic Form Example</div>

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
                    <form>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                      </div>
                      <div class="form-group">
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="customCheck1">
                          <label class="custom-control-label" for="customCheck1">Remember me</label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>

                <div class="card mb-grid">
                  <div class="card-header">
                    <div class="card-header-title">Input sizes</div>
                  </div>
                  <div class="card-body">
                    <input class="form-control mb-2 form-control-lg" type="text" placeholder=".form-control-lg">
                    <input class="form-control mb-2" type="text" placeholder="Default input">
                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm">
                  </div>
                </div>

                <div class="card mb-grid">
                  <div class="card-header">
                    <div class="card-header-title">Column sizing</div>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="form-row">
                        <div class="col-7">
                          <input type="text" class="form-control" placeholder="City">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="State">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Zip">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="card mb-grid">
                  <div class="card-header">
                    <div class="card-header-title">Validation</div>
                  </div>
                  <div class="card-body">
                    <p>
                      The example below uses a flexbox utility to vertically center the contents and changes <code class="highlighter-rouge">.col</code> to <code class="highlighter-rouge">.col-auto</code> so that your columns only take up as much space as needed. Put another way, the column sizes itself based on the contents.
                    </p>
                    <form id="needs-validation" novalidate>
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label class="form-label" for="validationCustom01">First name</label>
                          <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                        </div>
                        <div class="col-md-6 mb-3">
                          <label class="form-label" for="validationCustom02">Last name</label>
                          <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="col-md-6 mb-3">
                          <label class="form-label" for="validationCustom03">City</label>
                          <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                          <div class="invalid-feedback">
                            Please provide a valid city.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label class="form-label" for="validationCustom04">State</label>
                          <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                          <div class="invalid-feedback">
                            Please provide a valid state.
                          </div>
                        </div>
                        <div class="col-md-3 mb-3">
                          <label class="form-label" for="validationCustom05">Zip</label>
                          <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                          <div class="invalid-feedback">
                            Please provide a valid zip.
                          </div>
                        </div>
                      </div>
                      <button class="btn btn-primary mr-2" type="submit">Submit form</button>
                      <small class="text-muted">
                        Click submit to test validation feature
                      </small>
                    </form>
                  </div>
                </div>

                <div class="card mb-grid">
                  <div class="card-header">
                    File upload
                  </div>
                  <div class="card-body">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>