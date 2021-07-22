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
            <div class="card" style="width:100mm; float:center">
                <div class="card-header">
                    <div class="d-flex justify-content-between form-row">
                        <h4 style="color:gray; font-family: Poppins; font-weight: 600">Amount Due</h4>
                        <h4 style="color:blue; font-family: Poppins; font-weight: 600">P200.00</h4>
                    </div>
                    
                </div>
                <div class="card-body">
                    <form id="gcash_payment">
                        <div class="d-flex justify-content-center form-row">
                            <h4 id="totalAmount" style="color:black; font-family: Poppins; font-weight: 600">Pay with Gcash</h4>
                        </div>
                        <div class="d-flex justify-content-center form-row">
                            <div style="color:black; font-family: Poppins; font-weight: 600">
                                <p style="margin-top: 4px">+63</p>&nbsp;
                            </div>
                            <input id="gcashNumber" required style="color:black; font-family: Poppins; font-weight: 600; width: 75px;" maxlength="10" id="gcashNumber" type="text" class="form-control">
                        </div>
                        <div class="d-flex justify-content-center form-row">
                            <input type="submit" style="width:250px" class="btn btn-primary btn_gcash_payment">
                        </div>                        
                    </form>
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

<script>
$(document).ready(function(){
    $('#gcash_payment').on('submit', function(e){
        e.preventDefault()

        let amount = "20000"
        let line1 = "Purok 8 Unit 5 Adarna Ext."
        let name = "John Raven Glomar"
        let email = "jrglomar016@gmail.com"
        let gcashNumber = "0"+($('#gcashNumber').val())

        
        
        console.log(gcashNumber)

        $.ajax({
            url: "<?php echo base_url()?>users/payment/Gcash/create_source",
            type: "POST",
            data: {gcashNumber: gcashNumber, amount: amount
                    , line1: line1 , name: name , email: email },
            datatype: "JSON",
            
            
            success: function(data){
                var res = JSON.parse(data);
                console.log(res)

                href = res.data.attributes.redirect.checkout_url;
                window.location.href = href;
            }
        })
    })

})
</script>

</html>