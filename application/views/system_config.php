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
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- END OF OPENING TAG OF CONTENT -->
                <div class="card form">
                    <h5 class="card-header">
                        <a class="collapsed d-block" data-toggle="collapse" href="#collapse-collapsed" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                            <i class="fa fa-chevron-down pull-right"></i>
                            System Configuartion
                        </a>
                    </h5>
                    <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                        <div class="card-body">
                        <div class="card-body">
                            <form id="busInformationForm">
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                    <input hidden type="text" value="<?php echo($this->session->userdata['logged_in']['userId'])?>" class="form-control" id="userId" name="userId">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                    <label for="emailProtocolInput">Email Protocol</label>
                                    <input required type="text" class="form-control" id="emailProtocolInput" name="emailProtocolInput">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                    <label for="SMTPHostInput">SMTP Host</label>
                                        <input required  type="text" class="form-control" id="SMTPHostInput" name="SMTPHostInput">
                                    </div>
                                    <div class="form-group col-sm-6">
                                    <label for="SMTPUserInput">SMTP User</label>
                                    <input required type="number" class="form-control" id="SMTPUserInput" name="SMTPUserInput">
                                    </div>
                                    <div class="form-group col-sm-6">
                                    <label for="SMTPPasswordInput">SMTP Password</label>
                                    <input required type="number" class="form-control" id="SMTPPasswordInput" name="SMTPPasswordInput">
                                    </div>
                                    <div class="form-group col-sm-6">
                                    <label for="SMTPEmailType">SMTP Email Type</label>
                                    <input required type="number" class="form-control" id="SMTPEmailType" name="SMTPEmailType">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-3">
                                    <label for="plateInput">Reservation Running Number</label>
                                    <input required type="text" class="form-control" id="plateInput" name="plateInput">
                                    </div>
                                    <div class="form-group col-sm-3">
                                    <label for="engineInput">Ticket Running Number</label>
                                    <input required type="text" class="form-control" id="engineInput" name="engineInput">
                                    </div>
                                    <div class="form-group col-sm-3">
                                    <label for="chasisInput">Number of Days Allow Cancellation</label>
                                    <input required type="text" class="form-control" id="chasisInput" name="chasisInput">
                                    </div>
                                    <div class="form-group col-sm-3">
                                    <label for="fileNumberInput">Number of Days Cancel If Not Paid</label>
                                    <input required type="text" class="form-control" id="fileNumberInput" name="fileNumberInput">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                    <label for="denominationInput">Max Reservation Per Person</label>
                                    <input required type="text" class="form-control" id="denominationInput" name="denominationInput">
                                    </div>
                                    <div class="form-group col-sm-4">
                                    <label for="pistonInput">Min Days Reserve From Current Date</label>
                                    <input required type="text" class="form-control" id="pistonInput" name="pistonInput">
                                    </div>
                                    <div class="form-group col-sm-4">
                                    <label for="fuelInput">Max Days Reserve From Current Date</label>
                                    <input required type="text" class="form-control" id="fuelInput" name="fuelInput">
                                    </div>
                                    
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-3">
                                    <label for="yearInput">Gcash Public Key</label>
                                    <input required type="text" class="form-control" id="yearInput" name="yearInput">
                                    </div>
                                    <div class="form-group col-sm-3">
                                    <label for="yearInput">Gcash Private Key</label>
                                    <input required type="text" class="form-control" id="yearInput" name="yearInput">
                                    </div>
                                    <div class="form-group col-sm-3">
                                    <label for="yearInput">Gcash URL</label>
                                    <input required type="text" class="form-control" id="yearInput" name="yearInput">
                                    </div>
                                    <div class="form-group col-sm-3">
                                    <label for="yearInput">Gcash Transaction Fee</label>
                                    <input required type="text" class="form-control" id="yearInput" name="yearInput">
                                    </div>
                                    </div>
                                </div>
                                <div class="float-right">
                                    <input type="submit" class="btn btn-primary">

                                </div>
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