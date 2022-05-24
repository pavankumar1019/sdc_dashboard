<div class="container p-5">
    <h3>New Admissions</h3>
    <form>
        <div class="form-row" style="font-weight:bold;">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name Of Student </label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="Name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Student Aadhaar No.</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Aadhar No">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Date of Birth</label>
                <input type="date" class="form-control" id="inputAddress" >
            </div>
            
            <div class="form-group col-md-3" style="display:flex;">
            
            <div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" name="check"  onclick="onlyOne(this)">
													Male
													<i class="input-helper"></i></label>
												</div> &nbsp;&nbsp;&nbsp;
            <div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" name="check"  onclick="onlyOne(this)">
													Female
													<i class="input-helper"></i></label>
												</div>
</div>
          
            <div class="form-group">
                <label for="inputAddress2 col-md-3">Place of Birth</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>

            <div class="form-group col-md-2">
                <label for="inputCity">District</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Religion</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Caste</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Subcaste</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="form-group col-md-12">
                <label for="inputZip">Address</label>
                <textarea name="" class="form-control" id="" cols="30" rows="3"></textarea>

            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Telephone / Mobile No</label>
                <input type="text" class="form-control" id="inputZip">

            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">E-mail ID</label>
                <input type="text" class="form-control" id="inputZip">

            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Father Name</label>
                <input type="text" class="form-control" id="inputZip">

            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Occupation</label>
                <input type="text" class="form-control" id="inputZip">

            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Mother Name</label>
                <input type="text" class="form-control" id="inputZip">

            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Occupation</label>
                <input type="text" class="form-control" id="inputZip">

            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Name of the guardian :</label>
                <input type="text" class="form-control" id="inputZip">

            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Guardian address</label>
                <input type="text" class="form-control" id="inputZip">

            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="form-group col-md-12">
                <label for="inputZip">Parents Annual Income :</label>
                <input type="text" class="form-control" id="inputZip">

            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Name of previous school :</label>
                <input type="text" class="form-control" id="inputZip">

            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Address of previous school</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="col-12">
            <label for="inputZip">Particulars of SSLC / Equivalent Exam Passed</label> <br>
            </div>
            <div class="form-group col-md-6">
         
                <label for="inputZip">Reg No. :</label>
                <input type="text" class="form-control" id="inputZip">

            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Year of Passing</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="col-12">
            <label for="inputZip">Subjects studied in 10th Standard and marks obtained</label> <br>
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Language 1</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>Kannada</option>
                    <option>English</option>
                    <option>Hindi</option>
                    <option>Sanskrit</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Marks Obtained</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Language 2</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>Kannada</option>
                    <option>English</option>
                    <option>Hindi</option>
                    <option>Sanskrit</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Marks Obtained</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Language 3</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>Kannada</option>
                    <option>English</option>
                    <option>Hindi</option>
                    <option>Sanskrit</option>
                </select>
            </div>
            
            <div class="form-group col-md-6">
                <label for="inputZip">Marks Obtained</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
           
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Science" id="inputZip" disabled>
            </div>
            <div class="form-group col-md-4">
            <label for="inputZip">Marks Obtained</label>
                <input type="text" class="form-control" placeholder="Science" id="inputZip" >
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Maths" id="inputZip" disabled>
            </div>
            <div class="form-group col-md-4">
            <label for="inputZip"> Marks Obtained</label>
                <input type="text" class="form-control" placeholder="Science" id="inputZip" >
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Social Science" id="inputZip" disabled>
            </div>
            <div class="form-group col-md-4">
            <label for="inputZip"> Marks Obtained</label>
                <input type="text" class="form-control" placeholder="Social Science" id="inputZip" >
            </div>
            <div class="form-group col-md-4">
            <label for="inputZip">% of Marks Obtained</label>
                <input type="text" class="form-control" placeholder="Science" id="inputZip" >
            </div>
            <div class="form-group col-md-4">
            <label for="inputZip">Result</label>
                <select id="inputState" class="form-control">
                    <option selected>Passed</option>
                    <option>Failed</option>

                </select>
            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
        </div>


        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <p class="form-check-label" for="gridCheck">
             I hereby accept that the detailes furnished above are true and i abide to the rules and regulations of the education department / college during my child's study in the college .I also accept to compensate for any 
             damages in causes by my child to institution.I also examin the child's progrees in accademics and attendence from time to time .      
                </p>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>