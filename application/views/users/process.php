

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
    
    <!-- MAIN CONTENT -->
    <div class="main-panel">

      <!-- NAVBAR -->
      

      <!-- OPENING TAG OF CONTENT -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- END OF OPENING TAG OF CONTENT -->
            <div class="card" style="width:100mm; float:center">
                
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
    function paid_process(){

        let messageType = "<?php echo $messageType?>";

        if(messageType == 'Success'){
           
            Swal.fire(
                'Success!',
                'Payment success!',
                'success'
            )

            setInterval(function(){
                    window.location.href = '<?php echo base_url()?>users/my_reservation'
            }, 1000);

        }
        else if(messageType == 'Failed'){

            Swal.fire(
                        'Failed!',
                        'Payment failed!',
                        'error'
                    )

            setInterval(function(){
                    window.location.href = '<?php echo base_url()?>users/online_payment'
            }, 1000);
            
        }

        
    }

    paid_process()

})
</script>

</html>