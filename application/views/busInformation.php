<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim

=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<!-- HEAD TAG -->
<?php $this->load->view('includes/head.php'); ?>


<body class="">

  <!-- WRAPPER -->
  <div class="wrapper ">

    <!-- SIDEBAR -->
    <?php $this->load->view('includes/sidebar.php'); ?>
    
    <!-- MAIN CONTENT -->
    <div class="main-panel">

      <!-- NAVBAR -->
      <?php $this->load->view('includes/navbar.php'); ?>

      <!-- OPENING TAG OF CONTENT -->
      <div class="content" style="padding-top: 0px;">
        <div class="container-fluid">
          <div class="row">
            <!-- END OF OPENING TAG OF CONTENT -->
            <div class="card">
              <h5 class="card-header">
                  <a class="collapsed d-block" data-toggle="collapse" href="#collapse-collapsed" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                      <i class="fa fa-chevron-down pull-right"></i>
                      Add Bus Information
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <div class="card-body">
                      <form id="busInformationForm">
                          <div class="form-row">
                              <div class="form-group col-sm-12">
                              <label for="busNumberInput">Bus Number</label>
                              <input type="text" class="form-control" id="busNumberInput" name="busNumberInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-6">
                                <label for="busTypeInput">Bus Type</label>
                                <select class="form-control" id="busTypeInput" name="busTypeInput">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                              <div class="form-group col-sm-6">
                                <label for="busTemplateInput">Bus Template</label>
                                <select class="form-control" id="busTemplateInput" name="busTemplateInput">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-6">
                              <label for="ownerInput">Owner</label>
                              <input type="text" class="form-control" id="ownerInput" name="ownerInput">
                              </div>
                              <div class="form-group col-sm-6">
                              <label for="contactInput">Contact Number</label>
                              <input type="text" class="form-control" id="contactInput" name="contactInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-3">
                              <label for="plateInput">Plate Number</label>
                              <input type="text" class="form-control" id="plateInput" name="plateInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="engineInput">Engine Number</label>
                              <input type="text" class="form-control" id="engineInput" name="engineInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="chasisInput">Chasis Number</label>
                              <input type="text" class="form-control" id="chasisInput" name="chasisInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="fileNumberInput">MV File Number</label>
                              <input type="text" class="form-control" id="fileNumberInput" name="fileNumberInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-3">
                              <label for="denominationInput">Denomination</label>
                              <input type="text" class="form-control" id="denominationInput" name="denominationInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="pistonInput">Piston Placement</label>
                              <input type="text" class="form-control" id="pistonInput" name="pistonInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="cylindersInput">Number of Cylinders</label>
                              <input type="text" class="form-control" id="cylindersInput" name="cylindersInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="fuelInput">Fuel</label>
                              <input type="text" class="form-control" id="fuelInput" name="fuelInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-3">
                              <label for="makeInput">Make</label>
                              <input type="text" class="form-control" id="makeInput" name="makeInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="seriesInput">Series</label>
                              <input type="text" class="form-control" id="seriesInput" name="seriesInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="cylindersInput">Body Type</label>
                              <input type="text" class="form-control" id="bodyInput" name="bodyInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="bodyNumberInput">Body Number</label>
                              <input type="text" class="form-control" id="bodyNumberInput" name="bodyNumberInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-3">
                              <label for="yearInput">Year Model</label>
                              <input type="text" class="form-control" id="yearInput" name="yearInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="grossWeightInput">Gross Weight (kg)</label>
                              <input type="text" class="form-control" id="grossWeightInput" name="grossWeightInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="netWeightInput">Net Weight (kg)</label>
                              <input type="text" class="form-control" id="netWeightInput" name="netWeightInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="shipWeightInput">Shipping Weight (kg)</label>
                              <input type="text" class="form-control" id="shipWeightInput" name="shipWeightInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <label>Check all that applies</label>
                          </div>
                          <div class="form-row">
                            <div class="form-check form-check-inline">
                              <input  type="checkbox" id="withTelevision" name="withTelevision" value="True">
                              <label class="form-check-label" for="withTelevision" style="padding-left: 5px;">with Television</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input  type="checkbox" id="withAircon" name="withAircon" value="True">
                              <label class="form-check-label" for="withAircon" style="padding-left: 5px;">with Aircon</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input  type="checkbox" id="withWifi" name="withWifi" value="True">
                              <label class="form-check-label" for="withWifi" style="padding-left: 5px;">with WiFi</label>
                            </div>
                          </div>
                          <input type="submit" class="btn btn-primary">
                      </form>
                  </div>
                  </div>
              </div>
          </div>
          
              
            <!-- CLOSING TAG OF CONTENT -->
          </div>
        </div>
      </div>
      <!-- END OF CLOSING TAG OF CONTENT -->
      
      <!-- FOOTER -->
      <?php $this->load->view('includes/footer.php')?>

    </div>
    <!-- END OF MAIN CONTENT -->

  </div>
  <!-- END OF WRAPPER -->

  <!-- FIXED PLUGINS -->
  
  <!-- FIXED PLUGINS -->
  <?php $this->load->view('includes/core_js_files.php')?>
  
</body>

<script>
$('#busInformationForm').on('submit', function(e){

    e.preventDefault();

    var form = $('#busInformationForm');

    $.ajax({
        url:'<?php echo base_url()?>busInformation/addBusInformation',
        type: "POST",
        data: form.serialize(),
        dataType: "JSON",

        success: function(data){
          
        }
    })
});
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>