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
<?php 
    if (isset($this->session->userdata['logged_in'])) {
        $userType = ($this->session->userdata['logged_in']['userType']);
        $userId = ($this->session->userdata['logged_in']['userId']);

        if($userType == "Admin"){
            header("location: ".base_url()."users/user/forbidden");
        }


    } 
    else {
        header("location: ".base_url());
    }
    ?>
<!-- HEAD TAG -->
<?php $this->load->view('includes/head.php'); ?>

<style>

  /* Container needed to position the button. Adjust the width as needed */
  .gcash_container {
    position: relative;
    margin-left: 45%;
    width: 100px;
  }

  /* Make the image responsive */
  .gcash_container img {
    width: 100%;
    height: auto;
  }

  /* Style the button and place it in the middle of the container/image */
  .gcash_container .btn {
    position: absolute;
    top: 100%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
  }

  .gcash_container .btn:hover {
    background-color: #0065ce;
  }
</style>

<body class="">

  <!-- WRAPPER -->
  <div class="wrapper ">

    <!-- SIDEBAR -->
    <?php $this->load->view('includes/users/sidebar.php'); ?>
    
    <!-- MAIN CONTENT -->
    <div class="main-panel">

      <!-- NAVBAR -->
      <?php $this->load->view('includes/navbar.php'); ?>

      <!-- OPENING TAG OF CONTENT -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- END OF OPENING TAG OF CONTENT -->
            <div class="card">
                <h5 class="card-header">
                    
                </h5>
                
                    <div class="card-body">
                    <div class="card-body">   
                        <form id="paymentForm">
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                <input hidden type="text" value="<?php echo($this->session->userdata['logged_in']['userId'])?>" class="form-control" id="userId" name="userId">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-sm-12" id="paymentReferenceNumberDiv">
                                    
                                </div>
                                <div hidden class="form-group col-sm-12" id="paymentChartOfAccountDiv">
                                    
                                </div>
                                <div class="form-group col-sm-12" hidden>
                                    <label for="paymentTerm">Payment Term</label>
                                    <select class="form-control" id="paymentTerm" name="paymentTerm">
                                        <option value="" disabled selected hidden >- - Select Payment Term - -</option>
                                        <option value="Full Payment">Full Payment</option>
                                        <option value="Half Payment">Half Payment</option>
                                        <!-- <option value="Down Payment">Down Payment</option> -->

                                    </select>
                                </div>
                            </div><br>
                            <div class="form-row">
                                <div class="form-group col-sm-12">
                                    <label for="paymentAmount">Amount to be Paid</label>
                                    <input type="text" class="form-control" id="paymentAmount" name="paymentAmount" disabled>
                                </div>
                                <div class="form-group col-sm-4" hidden>
                                    <label for="paymentCashTendered">Cash Tendered</label>
                                    <input type="text" class="form-control" id="paymentCashTendered" name="paymentCashTendered">
                                </div>
                                <div class="form-group col-sm-4" hidden>
                                    <label for="paymentChange">Change</label>
                                    <input type="text" class="form-control" id="paymentChange" name="paymentChange" disabled>
                                </div>
                            </div>
                                <div class="gcash_container">
                                          <label for="paymentMethod"></label>
                                          <img class="rounded" src="<?php echo base_url()?>resources\images\gcash_logo.png">
                                          <button id="gcashBtn" button class="btn btn-info btn-sm">Pay with GCash</button>
                                </div>
                        </form>
                    </div>
                    </div>
                </div>

            <div class="card">
            <h4 class="card-header card-header-info">List of Payments</h4>
                <div class="card-body">
                <table id="paymentTable" class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Reference Number</th>
                        <th>Passenger Name</th>
                        <th>Amount</th>
                        <th>Date Paid</th>
                        <th width="10%">Actions</th>
                    </thead>
                </table>
            </div>
              
            <!-- CLOSING TAG OF CONTENT -->
          </div>
        </div>
      </div>
      <!-- END OF CLOSING TAG OF CONTENT -->

      <div class="modal fade" id="gcashModal" tabindex="-1" role="dialog" aria-labelledby="gcashModalTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header" style="background-color:#007dfe; color:white">
              <h5 class="modal-title" id="gcashModalTitle"  style="color:black; font-family: Poppins; font-weight: 600">GCash Payment</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="background-color:#007dfe">
                <div class="card-header" style="background-color:#007dfe;">
                    <div class="d-flex justify-content-between form-row">
                        <h4 style="color:black; font-family: Poppins; font-weight: 600">Total Amount</h4>
                        <h4 id="gcashAmount" style="color:white; font-family: Poppins; font-weight: 600">P200.00</h4>
                    </div>
                    
                </div>
                <div class="card-body" style="background-color:#007dfe">
                    <form id="gcash_payment">
                        <div class="d-flex justify-content-center form-row">
                            <h4 id="totalAmount" style="color:white; font-family: Poppins; font-weight: 600">Pay with Gcash</h4>
                        </div>
                        <div class="d-flex justify-content-center form-row">
                          <input id="gcashReservationId" style="color:black; font-family: Poppins; font-weight: 600; width: 75px; background-color:#007dfe" type="text" hidden>
                            <div style="color:black; font-family: Poppins; font-weight: 600; font-size: 12px">
                                <p style="margin-top: 4px">+63</p>&nbsp;
                            </div>
                            
                            <input id="gcashNumber" style="color:black; font-family: Poppins; font-weight: 600; width: 75px; background-color:#007dfe;" maxlength="10" id="gcashNumber" type="text" class="form-control">
                        </div>
                        <div class="d-flex justify-content-center form-row">
                            <input id="paymentId" type="submit" value="confirm" style="width:250px" class="btn btn-info btn_gcash_payment">
                        </div>
                        <br>
                        <br>                        
                    </form>
            </div>
            </div>
          </div>
        </div>
      </div>
      
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

<script>
$(document).ready(function(){

    function dataTable(){
        paymentTable = $('#paymentTable').DataTable({
            "ajax": "<?php echo base_url()?>payment/show_user_payment",
            "columns": [
                { data: "id"},
                { data: "reservation.referenceNumber"},
                { data: "reservation.name"},
                { data: "reservation.totalAmount", render: function(data, type, row){
                    return "P" + parseFloat(data).toFixed(2);
                }},
                { data: "created_at", render: function(data, type, row){
                    return moment (data).format("LL");
                        }
                },
                { data: "status", render: function(data, type, row){
                        if(data == "Active"){
                            return '<div class="btn-group">'+
                                    '<button class="btn btn-primary btn-sm btn_view" value="'+row.id+'" title="View" type="button" ><i class="zmdi zmdi-eye"></i>View</button>'+
                                    '<button class="btn btn-warning btn-sm btn_edit" value="'+row.id+'" title="Edit" type="button" ><i class="zmdi zmdi-edit"></i>Edit</button>'+
                                    '<button class="btn btn-danger btn-sm btn_delete" value="'+row.id+'" title="Delete" type="button"> <i class="zmdi zmdi-delete"></i>Delete</button></div>';
                        }   
                        else{
                            return '<button>Activate</button>';
                        }
                    }
                    
                },
            ],
            "aoColumnDefs": [{ "bVisible": false, "aTargets": [0, 5] }],
            "order": [[5, "desc"]]
        })

        
      

    };

    dataTable();

    function refresh(){
        var url = "<?php echo base_url()?>payment/show_user_payment/";

        paymentTable.ajax.url(url).load();
    }


    function get_reservation(){
        $.ajax({
            url: '<?php echo base_url() ?>reservation/show_user_reservations',
            type: "GET",
            dataType: "JSON",

            success: function(data){
                console.log(data);
                let reservationInfo = data.data
                var html = ""

                $('#paymentReferenceNumberDiv').html(`<label for="paymentReferenceNumber">Reference Number</label>
                                    <select class="form-control" id="paymentReferenceNumber" name="paymentReferenceNumber">
                                        
                                    </select>`)


                html += `<option value="" disabled selected hidden >-- Select Reference Number - -</option>`

                for(var i=0; i < reservationInfo.length; i++){
                    if(reservationInfo[i].currentStatus == "Pending"){
                        html += `<option value="${reservationInfo[i].id}">${reservationInfo[i].referenceNumber}</option>`
                    }
                }
                    
                $('#paymentReferenceNumber').html(html);
                
                $('select').selectize({
                    sortField: 'text'
                });            
            }
        })
    }

    function get_chart_of_account(){

        $.ajax({
            url: '<?php echo base_url() ?>chartOfAccount/show_ChartofAccount',
            type: "GET",
            dataType: "JSON",

            success: function(data){
                console.log(data);
                let chartOfAccountInfo = data.data
                var html = ""

                $('#paymentChartOfAccountDiv').html(`<label for="paymentChartOfAccount">Chart of Acccount</label>
                                    <select class="form-control" id="paymentChartOfAccount" name="paymentChartOfAccount">
                                        
                                    </select>`)

                html += `<option value="" disabled selected hidden >- - Select Chart of Account - -</option>`

                for(var i=0; i < chartOfAccountInfo.length; i++){
                    html += `<option value="${chartOfAccountInfo[i].id}">${chartOfAccountInfo[i].name}</option>`
                }
                    
                $('#paymentChartOfAccount').html(html);

                $('select').selectize({
                    sortField: 'text'
                });            
            }
        })
    }

    get_chart_of_account();
    get_reservation();

    $(document).on('change', '#paymentReferenceNumber', function(e){
        let id = $( "#paymentReferenceNumber option:selected" ).val();
        console.log(id); 

        $.ajax({
            url: '<?php echo base_url() ?>reservation/find_one_reservation',
            type: "POST",
            data: {id: id},
            dataType: "JSON",

            success: function(data){
                console.log(data);
                reservationInfo = data.data;

                amountToPay = Number(reservationInfo.totalAmount) - Number(reservationInfo.paidAmount)

                $('#paymentAmount').val(amountToPay)
            }
        })
    })

    $(document).on('change', '#paymentCashTendered', function(e){

        let paymentAmount = $('#paymentAmount').val()
        let paymentCashTendered = $('#paymentCashTendered').val()

        if(paymentCashTendered == ""){
            $('#paymentChange').val(0)
        }
        else if(Number(paymentCashTendered) < Number(paymentAmount)){
            $('#paymentChange').val(0)
        }
        else{
            $('#paymentChange').val(parseFloat(paymentCashTendered - paymentAmount).toFixed(2))
        }
    })

    $(document).on('change', '#paymentTerm', function(e){
        id =  $("#paymentReferenceNumber option:selected" ).val()
        valueSelected = $('#paymentTerm option:selected').val()

        if(valueSelected == "Half Payment"){
            paymentAmount = $('#paymentAmount').val()
            cashTendered = (Number(paymentAmount) / 2)

            $('#paymentAmount').val(cashTendered)
        }
        else if(valueSelected == "Full Payment"){
            $.ajax({
                url: '<?php echo base_url() ?>reservation/find_one_reservation',
                type: "POST",
                data: {id: id},
                dataType: "JSON",

                success: function(data){
                    console.log(data);
                    reservationInfo = data.data;

                    amountToPay = Number(reservationInfo.totalAmount) - Number(reservationInfo.paidAmount)

                    $('#paymentAmount').val(amountToPay)
                }
            })
        }

    })


    $('#gcashBtn').on('click', function(e){

        id =  $("#paymentReferenceNumber option:selected" ).val()
        $('#gcashReservationId').val(id)
        amount = $('#paymentAmount').val()
        $('#gcashAmount').html("P "+Math.ceil(Number(amount))+".00")

        $('#gcashModal').modal('show');

        e.preventDefault();
    })

    $('#gcash_payment').on('submit', function(e){
        e.preventDefault()

        let amount = $('#gcashAmount').text()
        amount = amount.slice(1, -3)
        let line1 = "Purok 8 Unit 5 Adarna Ext."
        let name = "John Raven Glomar"
        let email = "jrglomar016@gmail.com"
        let gcashNumber = "0"+($('#gcashNumber').val())
        let reservationId = $('#gcashReservationId').val();
        let newAmount = Number(amount) * 100

        $.ajax({
            url: "<?php echo base_url()?>users/payment/Gcash/create_source",
            type: "POST",
            data: {gcashNumber: gcashNumber, amount: newAmount, reservationId: reservationId
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


    

});
</script>