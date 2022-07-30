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

                <div class="card mb-grid">
                  <div class="card-header">
                    <div class="card-header-title">Form controls</div>
                  </div>
                  <div class="card-body">
                    <p>
                      Textual form controls—like <code class="highlighter-rouge">&lt;input&gt;</code>s, <code class="highlighter-rouge">&lt;select&gt;</code>s, and <code class="highlighter-rouge">&lt;textarea&gt;</code>s—are styled with the <code class="highlighter-rouge">.form-control</code> class. Included are styles for general appearance, focus state, sizing, and more.
                    </p>
                    <form>
                      <div class="form-group">
                        <label class="form-label" for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleFormControlSelect1">Example select</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleFormControlSelect2">Example multiple select</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                    </form>
                  </div>
                </div>

                <div class="card mb-grid">
                  <div class="card-header">
                    <div class="card-header-title">Validation errors</div>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="form-group">
                        <label class="form-label is-invalid">Invalid Field</label>
                        <input type="email" class="form-control is-invalid" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text invalid-feedback">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group">
                        <label class="form-label is-valid">VALID</label>
                        <input type="password" class="form-control is-valid" placeholder="Password">
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>