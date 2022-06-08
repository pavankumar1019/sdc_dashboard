<div class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <!-- Large modal -->

                <div class="modal fade bd-example-modal-lg" id="newadmissionmodal" tabindex="-1" role="dialog"
                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">ADD</h5>
                                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button> -->
                            </div>
                            <div class="modal-body">
                                <form method="post" id="newadmissionsubmit">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="inputEmail4">Name</label>
                                            <input type="text" class="form-control" id="name" name="name" placeholder="">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputPassword4">Aadhar No.</label>
                                            <input type="text" class="form-control" id="inputPassword4" placeholder="">
                                        </div>
                                        <div class="form-group col-lg-1 col-4">
                                            <label for="inputPassword4">DOB(dd)</label>
                                            <input type="number" class="form-control p-lg-2" id="dd"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                placeholder="DD" min="1" max="31" maxlength="2">
                                        </div>
                                        <div class="form-group col-lg-1 col-4">
                                            <label for="inputPassword4">/(mm)</label>
                                            <input type="number" class="form-control p-lg-2" id="month"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                placeholder="MM" min="1" max="12" maxlength="2">
                                        </div>
                                        <div class="form-group col-lg-2 col-4">
                                            <label for="inputPassword4">/(yy)</label>
                                            <input type="number" class="form-control p-lg-2" id="yy" placeholder="YYYY"
                                                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                                                min="1990" max="2022" maxlength="4">
                                        </div>
                                        <div class="form-group col-md-1">
                                        <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">Male</label>
                                                    </div>
                                                  
                                        </div>
                                        <div class="form-group col-md-2">
                                        <div class="custom-control custom-radio">
                                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">Female</label>
                                                    </div>
                                                  
                                        </div>

                                        <div class="form-group col-lg-3 col-4">
                                            <label for="inputPassword4">Religion</label>
                                            <select class="form-control dropdown" id="religion" name="religion">
    <option value="" selected="selected" disabled="disabled">-- select one --</option>
    <option value="African Traditional &amp; Diasporic">African Traditional &amp; Diasporic</option>
    <option value="Agnostic">Agnostic</option>
    <option value="Atheist">Atheist</option>
    <option value="Baha'i">Baha'i</option>
    <option value="Buddhism">Buddhism</option>
    <option value="Cao Dai">Cao Dai</option>
    <option value="Chinese traditional religion">Chinese traditional religion</option>
    <option value="Christianity">Christianity</option>
    <option value="Hinduism">Hinduism</option>
    <option value="Islam">Islam</option>
    <option value="Jainism">Jainism</option>
    <option value="Juche">Juche</option>
    <option value="Judaism">Judaism</option>
    <option value="Neo-Paganism">Neo-Paganism</option>
    <option value="Nonreligious">Nonreligious</option>
    <option value="Rastafarianism">Rastafarianism</option>
    <option value="Secular">Secular</option>
    <option value="Shinto">Shinto</option>
    <option value="Sikhism">Sikhism</option>
    <option value="Spiritism">Spiritism</option>
    <option value="Tenrikyo">Tenrikyo</option>
    <option value="Unitarian-Universalism">Unitarian-Universalism</option>
    <option value="Zoroastrianism">Zoroastrianism</option>
    <option value="primal-indigenous">primal-indigenous</option>
    <option value="Other">Other</option>
  </select>
                                        </div>
                                        <div class="form-group col-lg-3 col-4">
                                            <label for="inputPassword4">Caste</label>
                                            <input type="text" class="form-control p-lg-2">
                                        </div>
                                        <div class="form-group col-lg-2 col-4">
                                            <label for="inputPassword4">Sub-caste</label>
                                            <input type="text" class="form-control p-lg-2" >
                                        </div>
                                        <div class="form-group col-lg-6 ">
                                            <label for="exampleFormControlTextarea1">Address</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                                style="height: 54px;"></textarea>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="inputPassword4">Phone_number</label>
                                            <input type="text" class="form-control p-lg-2" id="numberonly"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10">
                                        </div>
                                        <div class="form-group col-lg-6 ">
                                            <label for="inputPassword4">Email</label>
                                            <input type="email" class="form-control p-lg-2" >
                                        </div>
                                        <div class="form-group col-lg-3 ">
                                            <label for="inputPassword4">Father Name / Guardian</label>
                                            <input type="text" class="form-control p-lg-2">
                                        </div>
                                        <div class="form-group col-lg-3 ">
                                            <label for="inputPassword4">Mother Name</label>
                                            <input type="text" class="form-control p-lg-2" >
                                        </div>
                                        <div class="form-group col-lg-3 ">
                                            <label for="inputPassword4">SSLC Reg</label>
                                            <input type="text" class="form-control p-lg-2" >
                                        </div>
                                        <div class="form-group col-lg-2 ">
                                            <label for="inputPassword4">Year Of Passing</label>
                                            <input type="text" class="form-control p-lg-2">
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="inputPassword4">Total Marks OBT</label>
                                            <input type="text" class="form-control p-lg-2" >
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="inputPassword4">Combination OPT</label>
                                            <select id="inputState" name="combination_opted" class="form-control" required="">
                    <option selected="">Choose...</option>
                    <option>PCMB</option>
                    <option>PCMCs</option>
                    <option>EBACs</option>
                    <option>EBAS</option>
                    <option>ABSM</option>
                </select>
                                        </div>
                                        <div class="form-group col-lg-3">
                                            <label for="inputPassword4">Language OPT</label>
                                            <select id="inputState" name="lang_opted" class="form-control" required="">
                    <option selected="">Choose...</option>
                    <option>Hindi</option>
                    <option>Kannada</option>
                    <option>Urdu</option>
                    <option>Sanskrit</option>
                </select>
                                        </div>
                                        <hr>
                                        
                                        <div class="form-group  col-12">
                                        <input type="submit" name="submit"  class="btn btn-primary" />
                                        </div>
                                      

                                    </div>

                            </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
            <!-- modal Close -->
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">New Admissions</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./dashboard.php?page=home"><i
                                            class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="javascript:">New Admissions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page inner -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- [ Main Content ] start -->
                    <div class="row">
                        <!--[ daily sales section ] start-->
                        <div class="col-md-6 col-xl-4 ">
                            <div class="card daily-sales bg-info " type="button" id="btnAdmissionModal">
                                <div class="card-block">
                                    <h6 class="mb-4 text-white"> New Admissions</h6>
                                    <div class="row d-flex align-items-center">
                                        <div class="col-9">
                                            <h3 class="f-w-300 d-flex align-items-center m-b-0 text-white"><i
                                                    class="feather icon-user-check text-c-green f-30 m-r-10"></i> <span id="getcountdata"></span> 
                                            </h3>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [ breadcrumb ] end -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- [ Main Content ] start -->
                    <div class="row">

                        <div class="col-md-12 col-xl-12 ">
                            <div class="card daily-sales">
                                <div class="card-block">
                                    <h6 class="mb-4">Query</h6>
                                    <div class="form-group">
                                        <label for="search">Search Here !</label>
                                        <input type="text" class="form-control" id="search" placeholder="Search..">

                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-md-6">
                            <div class="card Recent-Users">
                                <div class="card-header">
                                    <h5>New Admissions</h5>
                                </div>
                                <div class="card-block px-0 py-3">
                                    <div class="table-responsive">
                                        <table class="table table-hover" id="dynamic_content">
                                            <tbody>
                                                <tr class="unread">
                                                    <!-- <td><img class="rounded-circle" style="width:40px;"
                                                            src="assets/images/user/avatar-1.jpg" alt="activity-user">
                                                    </td> -->
                                                    <td>
                                                        <h6 class="mb-1">Name</h6>
                                                        <p class="m-0">Father Name : <br>Mother Name: <br>SSLC MARKS :  <br>Combination Opted: <br>Language Opted: </p>
                                                    </td>
                                                    <td>
                                                        <h6 class="text-muted"><i
                                                                class="fas fa-circle text-c-green f-10 m-r-15"></i>11
                                                            MAY 12:56</h6>
                                                    </td>
                                                    <td><a href="#!"
                                                            class="label theme-bg2 text-white f-12">Edit</a><a
                                                            href="#!" class="label theme-bg text-white f-12">Delete</a>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Main Content ] end -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- <script>
    function onSubmit() {

        var formData = new FormData();
        formData.append("name", document.getElementById("name").value);
         
        var ajax = new XMLHttpRequest();
        ajax.open("POST", "./php_operations/newadmissions.php", true);
        ajax.send(formData);
 
        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
 
        var progress = document.getElementById("progress");
             ajax.upload.onprogress = (event) => {
    // event.loaded returns how many bytes are downloaded
    // event.total returns the total number of bytes
    // event.total is only available if server sends `Content-Length` header
    progress.max = event.total;
            progress.value = event.loaded;
    console.log(`Uploaded ${event.loaded} of ${event.total} bytes`);
}
        return false;
    }
</script> -->