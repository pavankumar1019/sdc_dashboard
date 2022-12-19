<div class="adminx-content">
    <div class="adminx-main-content">
        <div class="container-fluid">

  <section class="m-5">
      <form>
          <div class="form-group">
              <label for="exampleFormControlSelect1">Select Combination</label>
              <select class="form-control" id="exampleFormControlSelect1">
                  <option>ALL DATA</option>
                  <option>1st PUC C5 COMMERCE</option>
                  <option>1st PUC C4 COMMERCE</option>
                  <option>1st PUC C3 COMMERCE</option>
                  <option>1st PUC C2 COMMERCE</option>
              </select>
          </div>
          <div class="form-group">
              <label for="exampleFormControlSelect2">Select Data</label>
              <textarea id="number" class="form-control" id="exampleFormControlSelect2" rows="5"
                  pattern="/^[0-9][0-9\s]*$/"
                  style="background:#404040;border:none;font-weight:bold;color:white; font-family: 'Lucida Console', 'Courier New', monospace;'"></textarea>
          </div>
          <div class="form-group">
              <label for="exampleFormControlSelect1">Select Header</label>
              <select class="form-control" id="exampleFormControlSelect1">
                  <option>SDCDGR</option>
                  <option>SDCPUC</option>

              </select>
          </div>
          <div class="form-group">
              <label for="exampleFormControlTextarea1">Message</label>
              <div class="form-control" style="height:100px" id="exampleFormControlTextarea1">Dear <input
                      style="background:#ccffff;border:none;font-weight:bold;" type="tel" name="" id="">
                  &nbsp;<input style="background:#ccffff;border:none;font-weight:bold;width:100%;" type="tel" name=""
                      id="">
                  SDC <input style="background:#ccffff;border:none;font-weight:bold;" type="tel" name="" id="">
              </div>
          </div>
      </form>
  </section>

  </div>
    </div>
</div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>
  <script>
$(document).ready(function() {

    $('#number').on('change, keyup', function() {
        var currentInput = $(this).val();
        var fixedInput = currentInput.replace(/[A-Za-z!@#$%^&*()]/g, '');
        $(this).val(fixedInput);
        console.log(fixedInput);
    });
    $('#number').on('change, keyup', function() {
        var currentInput = $(this).val();
        var fixedInput = currentInput.replace(/['\r\n' ]/g, ',');
        $(this).val(fixedInput);
        console.log(fixedInput);
    });
});
  </script>