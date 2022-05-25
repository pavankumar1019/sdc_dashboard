<div class="container p-5">
    <h3>New Admissions</h3>
    <form  id="fupForm" enctype="multipart/form-data">
        <div class="form-row" style="font-weight:bold;">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Name Of Student </label>
                <input type="email" class="form-control" id="inputEmail4" name="student_name" placeholder="Name" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Student Aadhaar No.</label>
                <input type="text" class="form-control" id="inputPassword4" name="student_aadhar" placeholder="Aadhar No" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Date of Birth</label>
                <input type="date" class="form-control" name="dob" id="inputAddress" required>
            </div>
            
            <div class="form-group col-md-3" style="display:flex;">
            
            <div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" name="check" value="m"  onclick="onlyOne(this)">
													Male
													<i class="input-helper"></i></label>
												</div> &nbsp;&nbsp;&nbsp;
            <div class="form-check form-check-flat">
													<label class="form-check-label">
														<input class="checkbox" type="checkbox" name="check" value="f"  onclick="onlyOne(this)">
													Female
													<i class="input-helper"></i></label>
												</div>
</div>
          
            <div class="form-group">
                <label for="inputAddress2 col-md-3">Place of Birth</label>
                <input type="text" class="form-control" name="place_of_birth" id="inputAddress2" placeholder="">
            </div>

          
            <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" name="state" class="form-control" required>
                <option value="SelectState">Select State</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputCity">District</label>
                <select class="form-control" name="district" id="inputDistrict" required>
        <option value="">-- select one -- </option>
    </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Religion</label>
                <input type="text" name="religion" class="form-control" id="inputZip" required>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Caste</label>
                <input type="text" name="caste" class="form-control" id="inputZip" required>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Subcaste</label>
                <input type="text" name="subcaste" class="form-control" id="inputZip" required>
            </div>
            <div class="form-group col-md-12">
                <label for="inputZip">Address</label>
                <textarea  name="address" class="form-control" id="" cols="30" rows="3" required></textarea>

            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Telephone / Mobile No</label>
                <input type="text" name="mobile_no" class="form-control" id="inputZip" required>

            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">E-mail ID</label>
                <input type="text" name="email_id" class="form-control" id="inputZip">

            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Father Name</label>
                <input type="text" name="father_name" class="form-control" id="inputZip">

            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Occupation</label>
                <input type="text" name="father_occ" class="form-control" id="inputZip">

            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Mother Name</label>
                <input type="text" name="mother_name"  class="form-control" id="inputZip">

            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Occupation</label>
                <input type="text" name="mother_occ" class="form-control" id="inputZip">

            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Name of the guardian :</label>
                <input type="text" name="name_of_g" class="form-control" id="inputZip">

            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Guardian address</label>
                <input type="text" name="g_address" class="form-control" id="inputZip">

            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="form-group col-md-12">
                <label for="inputZip">Parents Annual Income :</label>
                <input type="text" name="annual_income" class="form-control" id="inputZip">

            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Name of previous school :</label>
                <input type="text" name="name_of_preschool" class="form-control" id="inputZip" required>

            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Address of previous school</label>
                <input type="text" name="address_of_preschool" class="form-control" id="inputZip" required>
            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="col-12">
            <label for="inputZip">Particulars of SSLC / Equivalent Exam Passed</label> <br>
            </div>
            <div class="form-group col-md-6">
         
                <label for="inputZip">Reg No. :</label>
                <input type="text" name="reg_no_sslc" class="form-control" id="inputZip" required>

            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Year of Passing</label>
                <input type="text" name="year_of_passing" class="form-control" id="inputZip" required>
            </div>
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="col-12">
            <label for="inputZip">Subjects studied in 10th Standard and marks obtained</label> <br>
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Language 1</label>
                <select id="inputState" name='l1' class="form-control" required>
                    <option selected>Choose...</option>
                    <option>Kannada</option>
                    <option>English</option>
                    <option>Hindi</option>
                    <option>Sanskrit</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Marks Obtained</label>
                <input type="text" name="l1_m" class="form-control" id="inputZip" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Language 2</label>
                <select id="inputState" name="l2" class="form-control">
                    <option selected>Choose...</option>
                    <option>Kannada</option>
                    <option>English</option>
                    <option>Hindi</option>
                    <option>Sanskrit</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Marks Obtained</label>
                <input type="text" name="l2_m" class="form-control" id="inputZip" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Language 3</label>
                <select id="inputState" name="l3" class="form-control">
                    <option selected>Choose...</option>
                    <option>Kannada</option>
                    <option>English</option>
                    <option>Hindi</option>
                    <option>Sanskrit</option>
                </select>
            </div>
            
            <div class="form-group col-md-6">
                <label for="inputZip">Marks Obtained</label>
                <input type="text" name="l3_m" class="form-control" id="inputZip" required>
            </div>
           
            <div class="form-group col-md-6">
                <input type="text" name='s1' class="form-control" placeholder="Science" id="inputZip" disabled>
            </div>
            <div class="form-group col-md-4">
            <label for="inputZip">Marks Obtained</label>
                <input type="text" name="s1_m" class="form-control" placeholder="Science" id="inputZip" required>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="s2" class="form-control" placeholder="Maths" id="inputZip" disabled>
            </div>
            <div class="form-group col-md-4">
            <label for="inputZip"> Marks Obtained</label>
                <input type="text" name="s2_m" class="form-control" placeholder="maths" id="inputZip" required>
            </div>
            <div class="form-group col-md-6">
                <input type="text" name="s3" class="form-control" placeholder="Social Science" id="inputZip" disabled>
            </div>
            <div class="form-group col-md-4">
            <label for="inputZip"> Marks Obtained</label>
                <input type="text" name="s3_m" class="form-control" placeholder="Social Science" id="inputZip" required>
            </div>
            <div class="form-group col-md-4">
            <label for="inputZip">total_marks_obtained</label>
                <input type="text" name="marks"  class="form-control" placeholder="Science" id="inputZip" required>
            </div>
            <div class="form-group col-md-6">
           
                      <label>File upload (only img,png)</label>
                   
                      <div class="input-group col-xs-12">
                        <input type="file" class="form-control file-upload-info" name="img" id="deploy" accept=".jpg, .png, .jpeg" required>
                                            </div>
                               </div>
            
            <div class="col-12">
                <hr style="height:2px;border-width:0;color:gray;background-color:gray">
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Combination Opted</label>
                <select id="inputState" name="combination_opted" class="form-control" required>
                    <option selected>Choose...</option>
                    <option>PCMB</option>
                    <option>PCMCs</option>
                    <option>EBACs</option>
                    <option>EBAS</option>
                    <option>ABSM</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputZip">Language Opted</label>
                <select id="inputState" name="lang_opted" class="form-control" required>
                    <option selected>Choose...</option>
                    <option>Hindi</option>
                    <option>Kannada</option>
                    <option>Urdu</option>
                    <option>Sanskrit</option>
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
        <button type="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
</div>