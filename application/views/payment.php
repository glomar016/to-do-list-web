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
            <div class="card">
                <h5 class="card-header">
                    <a class="collapsed d-block" data-toggle="collapse" href="#collapse-collapsed" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                        <i class="fa fa-chevron-down pull-right"></i>
                        Add Payment
                    </a>
                </h5>
                <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                    <div class="card-body">
                    <div class="card-body">   
                        <form id="paymentForm">
                            <div class="form-row">
                                <div class="form-group col-sm-6" id="paymentReferenceNumberDiv">
                                    
                                </div>
                                <div class="form-group col-sm-6" id="paymentChartOfAccountDiv">
                                    
                                </div>
                                <div class="form-group col-sm-12">
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
                                <div class="form-group col-sm-4">
                                    <label for="paymentAmount">Amount to be Paid</label>
                                    <input type="text" class="form-control" id="paymentAmount" name="paymentAmount" disabled>
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="paymentCashTendered">Cash Tendered</label>
                                    <input type="text" class="form-control" id="paymentCashTendered" name="paymentCashTendered">
                                </div>
                                <div class="form-group col-sm-4">
                                    <label for="paymentChange">Change</label>
                                    <input type="text" class="form-control" id="paymentChange" name="paymentChange" disabled>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary">
                        </form>
                    </div>
                    </div>
                </div>
            </div>

            <div class="card">
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
            "ajax": "<?php echo base_url()?>payment/show_payment",
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
        var url = "<?php echo base_url()?>payment/show_payment/";

        paymentTable.ajax.url(url).load();
    }


    function get_reservation(){
        $.ajax({
            url: '<?php echo base_url() ?>reservation/show_reservations',
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


    $('#paymentForm').on('submit', function(e){

        e.preventDefault();
        let form = $('#paymentForm')
        let cashTendered = $('#paymentCashTendered').val()

        let payingAmount = Number(cashTendered) - Number($('#paymentChange').val())

        let reservationId;
        
        $.ajax({
            url:'<?php echo base_url()?>payment/add_payment',
            type: "POST",
            data: form.serialize(), 
            dataType: "JSON",

            success: function(data){
                refresh();
                let objData = data.data;
                console.log(objData)
                document.getElementById("paymentForm").reset();

                reservationId = objData[0].reservationId;
                totalAmount = (objData[0].reservation.totalAmount)
                paidAmount = (objData[0].reservation.paidAmount)
                newPaidAmount = Number(paidAmount) + Number(payingAmount)

                $.ajax({
                    url:'<?php echo base_url()?>payment/add_paid_amount',
                    type: "POST",
                    data: { reservationId: reservationId, paidAmount: newPaidAmount }, 
                    dataType: "JSON",

                    success: function(data){
                        objData = (data.data);
                        if(Number(objData.paidAmount) >= Number(objData.totalAmount)){
                            $.ajax({
                                url:'<?php echo base_url()?>reservation/update_status',
                                type: "POST",
                                data: {id : reservationId}, 
                                dataType: "JSON",
                                
                                success: function(data){
                                    
                                }
                            })
                        }

                        refresh();
                        console.log(data.data);
                        showNotification('create', 'Successfully added a new payment!', 'success', 'top', 'right');

                        setInterval(function(){
                                        location.reload()
                                    }, 1000);
                    }
                })


                
            }
        })
    })

    

});
</script>