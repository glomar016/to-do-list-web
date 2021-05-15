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
                              <label for="busNumberInput">Bus No.</label>
                              <input type="text" class="form-control" id="busNumberInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-6">
                                <label for="busTypeInput">Bus Type</label>
                                <select class="form-control" id="busTypeInput">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                              <div class="form-group col-sm-6">
                                <label for="busTemplateInput">Bus Template</label>
                                <select class="form-control" id="busTemplateInput">
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
                              <input type="text" class="form-control" id="ownerInput">
                              </div>
                              <div class="form-group col-sm-6">
                              <label for="contactInput">Contact Number</label>
                              <input type="text" class="form-control" id="contactInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-3">
                              <label for="plateInput">Plate Number</label>
                              <input type="text" class="form-control" id="plateInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="engineInput">Engine Number</label>
                              <input type="text" class="form-control" id="engineInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="chasisInput">Chasis Number</label>
                              <input type="text" class="form-control" id="chasisInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="fileNumberInput">MV File Number</label>
                              <input type="text" class="form-control" id="fileNumberInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-3">
                              <label for="denominationInput">Denomination</label>
                              <input type="text" class="form-control" id="denominationInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="pistonInput">Piston Placement</label>
                              <input type="text" class="form-control" id="pistonInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="cylindersInput">Number of Cylinders</label>
                              <input type="text" class="form-control" id="cylindersInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="fuelInput">Fuel</label>
                              <input type="text" class="form-control" id="fuelInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-3">
                              <label for="makeInput">Make</label>
                              <input type="text" class="form-control" id="makeInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="seriesInput">Series</label>
                              <input type="text" class="form-control" id="seriesInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="cylindersInput">Body Type</label>
                              <input type="text" class="form-control" id="bodyInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="bodyNumberInput">Body Number</label>
                              <input type="text" class="form-control" id="bodyNumberInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-3">
                              <label for="yearInput">Year Model</label>
                              <input type="text" class="form-control" id="yearInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="grossWeightInput">Gross Weight (kg)</label>
                              <input type="text" class="form-control" id="grossWeightInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="netWeightInput">Net Weight (kg)</label>
                              <input type="text" class="form-control" id="netWeightInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="shipWeightInput">Shipping Weight (kg)</label>
                              <input type="text" class="form-control" id="shipWeightInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <label>Check all that applies</label>
                          </div>
                          <div class="form-row">
                            <div class="form-check form-check-inline">
                              <input  type="checkbox" id="inlineCheckbox1" value="True">
                              <label class="form-check-label" for="inlineCheckbox1" style="padding-left: 5px;">with Television</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input  type="checkbox" id="inlineCheckbox2" value="True">
                              <label class="form-check-label" for="inlineCheckbox2" style="padding-left: 5px;">with Aircon</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input  type="checkbox" id="inlineCheckbox3" value="True">
                              <label class="form-check-label" for="inlineCheckbox3" style="padding-left: 5px;">with WiFi</label>
                            </div>
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
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

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>