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
<?php $this->load->view('includes/users/head.php'); ?>

<body class="">

  <!-- WRAPPER -->
  <div class="wrapper ">

    <!-- SIDEBAR -->
    <?php $this->load->view('includes/users/sidebar.php'); ?>
    
    <!-- MAIN CONTENT -->
    <div class="main-panel">

      <!-- NAVBAR -->
      <?php $this->load->view('includes/users/navbar.php'); ?>

      <!-- OPENING TAG OF CONTENT -->
      <div class="content" style="padding-top: 0px;">
        <div class="container-fluid">
          <div class="row">
            <!-- END OF OPENING TAG OF CONTENT -->

            <!-- SESSION CHECK -->
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

        
        <!-- END OF SESSION CHECK -->

        <div class="card">
          <h4 class="card-header card-header-info">List of Reservations</h4>
            <div class="card-body">
              <table id="reservationTable" class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Reference Number</th>
                    <th>Customer's Name</th>
                    <th>Schedule</th>
                    <th>Total Amount</th>
                    <th>Status</th>
                    <th hidden>Reservation Date</th>
                    <th >Actions</th>
                </thead>
              </table>
            </div>
          </div>
        </div>
        </div>
      </div>
            <!-- CLOSING TAG OF CONTENT -->

            <!-- Modal -->
            <div class="modal fade" id="viewReservationModal" tabindex="-1" role="dialog" aria-labelledby="viewReservationModalTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="viewReservationModalTitle">Reservation Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 style="color: black">Reference Number: 
                              <label id="referenceNumberView"></label>
                            </h6>
                        </div>
                        <div class="col-md-12">
                            <h6 style="color: black">Name: 
                              <label id="nameView">John Raven Glomar</label>
                            </h6>
                        </div>
                        <div class="col-md-12">
                            <h6 style="color: black">Reservation Date Booked: 
                              <label id="reservationDateView"></label>
                            </h6>
                        </div>
                        <div class="col-md-12">
                            <h6 style="color: black">Main Route: 
                              <label id="routeNameView"></label>
                            </h6>
                        </div>
                        <div class="col-md-12">
                            <h6 style="color: black">Schedule: 
                              <label id="scheduleNameView"></label>
                            </h6>
                        </div>
                    </div>
                    <br>
                    <h5>Passenger/s Details</h5>
                    <table id="passengerTableView" class="table">
                      <thead class="col-md-12">

                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                    
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="cancelReservationModal" tabindex="-1" role="dialog" aria-labelledby="cancelReservationModalTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="cancelReservationModalTitle">Cancel Reservation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <h6 style="color: black">Are you sure to cancel reservation?</h6>
                    
                  </div>
                  <div class="modal-footer">
                    <button type="button" id="cancelReservationBtn" class="btn btn-danger cancelReservationConfirm" data-dismiss="modal">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                  </div>
                </div>
              </div>
            </div>

            <div id="counterPrintReceipt" class="myDivToPrint" hidden>
                    <?php $this->load->view('receipt/counter_receipt') ?>
            </div>
          


      <!-- END OF CLOSING TAG OF CONTENT -->
      
      <!-- FOOTER -->
      <?php $this->load->view('includes/users/footer.php')?>

    </div>
    <!-- END OF MAIN CONTENT -->

  </div>
  <!-- END OF WRAPPER -->

  <!-- FIXED PLUGINS -->
  
  <!-- FIXED PLUGINS -->
  <?php $this->load->view('includes/users/core_js_files.php')?>
  
</body>
<script>
    $(document).ready(function(){
            
      function dataTable(){
          reservationTable = $('#reservationTable').DataTable({
            "ajax": "<?php echo base_url()?>reservation/show_user_reservations",
            "columns": [
                {data: "id"},
                {data: "referenceNumber"},
                {data: "name"},
                // {data: "name"},
                {data: "scheduleId", render: function(data, type, row){
                    return row.schedule.route.origin.name + ' - ' + row.schedule.route.destination.name + ' - ' + moment(row.reservationDate).format('ll') + ' - ' 
                          + moment(row.schedule.hourFrom).format('LT') + ' - ' + moment(row.schedule.hourTo).format('LT');;
                }},
                {data: "totalAmount", render: function(data, type, row){
                    return "P" + parseFloat(data).toFixed(2);
                }},
                {data: "currentStatus"},
                {data: "created_at"},
                {data: "currentStatus", render: function(data, type, row){
                      if (data == "Paid"){
                        return '<div class="btn-group">' +
                                '<button class="btn btn-primary btn-sm btn-print-reservation" value="' + row.id + '"title = "Edit" type="button"> <i class="zmdi zmdi-edit"> </i> Print </button>&nbsp'+
                                '</div>';
                      }
                      else if(data == "Pending"){
                        return '<div class="btn-group">' +
                                '<button class="btn btn-info btn-sm btn-view-reservation" value="' + row.id + '"title = "View" type="button"> <i class="zmdi zmdi-view"> </i> View </button>&nbsp'+
                                '<button class="btn btn-default btn-sm btn-cancel-reservation" value="' + row.id + '"title = "Cancel" type="button"> <i class="zmdi zmdi-view"> </i> Cancel </button>'+
                                '</div>';
                      }
                    }
                }
              ],

            "aoColumnDefs": [{ "bVisible": false, "aTargets": [0, 6] }],
            "order": [[6, "desc"]]

          })

      };


      dataTable();

      function refresh(){
        var url="<?php echo base_url()?>reservation/show_user_reservations";

        reservationTable.ajax.url(url).load();
      }
          
      $(document).on("click", ".btn-view-reservation", function(e){
        let reservationId = this.value;

        $('#passengerTableView').find('thead').html("")
        $('#passengerTableView').find('tbody').html("")

        let passengerRoute = []
        let passengerName = []
        let passengerSeat = []

        $.ajax({
                url: '<?php echo base_url()?>reservation/get_reservation_line/',
                type: 'POST',
                data: { reservationId, reservationId },
                dataType: "JSON",

                success: function(data){
                  reservationLine = data.data;
                  console.log(data.data);
                  referenceNumber = reservationLine[0].reservation.referenceNumber
                  scheduleName = reservationLine[0].reservation.scheduleName
                  name = reservationLine[0].reservation.name
                  reservationDate = reservationLine[0].reservation.reservationDate
                  routeName = reservationLine[0].reservation.schedule.route.name;

                  $('#referenceNumberView').html(referenceNumber)
                  $('#scheduleNameView').html(scheduleName)
                  $('#nameView').html(name)
                  $('#reservationDateView').html(reservationDate)
                  $('#routeNameView').html(routeName)

                  if(reservationLine.length != 0){
                    $('#passengerTableView').find('thead').append(`
                      <th><h6 style="color: black">Passenger Seat</h6></th>
                      <th><h6 style="color: black">Passenger Name</h6></th>
                      <th><h6 style="color: black">Passenger Route</h6></th>
                    `)

                    for(i=0; i < reservationLine.length; i++){

                      $('#passengerTableView').find('tbody').append(`
                        <tr>
                          <td><label>${reservationLine[i].seat.code}</label></td>
                          <td><label>${reservationLine[i].passengerName}</label></td>
                          <td><label>${reservationLine[i].route}</label></td>
                        </tr>
                      `)
                    }
                  }
                  $('#viewReservationModal').modal('show');
                }
        })


      });

      $(document).on("click", ".btn-cancel-reservation", function(e){
        $('#cancelReservationBtn').val(this.value);

        $('#cancelReservationModal').modal('show');
      });

      $(document).on("click", ".cancelReservationConfirm", function(e){
        reservationId = this.value;

        seatId = []

        $.ajax({
                url: '<?php echo base_url()?>reservation/get_reservation_line/',
                type: 'POST',
                data: { reservationId, reservationId },
                dataType: "JSON",

                success: function(data){
                  reservationData = data.data

                  for(i=0; i < reservationData.length; i++){
                    seatId.push(reservationData[i].seatId);
                  }

                  $.ajax({
                    url: '<?php echo base_url()?>reservation/delete_reservation/',
                      type: 'POST',
                      data: { reservationId, reservationId },
                      dataType: "JSON",

                      success: function(data){
                        
                        $.ajax({
                        url: '<?php echo base_url()?>reservation/delete_reservation_lines/',
                        type: 'POST',
                        data: { reservationId, reservationId },
                        dataType: "JSON",

                        success: function(data){
                            $.ajax({
                                url: '<?php echo base_url()?>reservation/activate_bus_seats/',
                                type: 'POST',
                                data: { seatId, seatId },
                                dataType: "JSON",

                                success: function(data){

                                }
                            })
                        }

                      })
                      showNotification('delete', 'Successfully cancelled a reservation!', 'danger', 'top', 'right');
                      refresh();
                      }
                  })

                    
                }
        })

      });

      $(document).on('click', '.btn-print-reservation', function(){
          
        let reservationId = this.value;


        $('#passengerTablePrint').find('thead').html("")
        $('#passengerTablePrint').find('tbody').html("")

        let passengerRoute = []
        let passengerName = []
        let passengerSeat = []

        $.ajax({
                url: '<?php echo base_url()?>reservation/get_reservation_line/',
                type: 'POST',
                data: { reservationId, reservationId },
                dataType: "JSON",

                success: function(data){
                  reservationLine = data.data;
                  console.log(data.data);
                  referenceNumber = reservationLine[0].reservation.referenceNumber
                  scheduleName = reservationLine[0].reservation.scheduleName
                  name = reservationLine[0].reservation.name
                  billingAddress = reservationLine[0].reservation.billingAddress
                  promoName = reservationLine[0].reservation.promo
                  reservationDate = reservationLine[0].reservation.reservationDate
                  routeName = reservationLine[0].reservation.schedule.route.name;
                  totalAmount = reservationLine[0].reservation.totalAmount;

                  $('#customerNamePrint').html(name)
                  $('#customerAddressPrint').html(billingAddress)
                  $('#scheduleNamePrint').html(scheduleName)
                  $('#tripPromoCodePrint').html(promoName)
                  $('#tripRouteNamePrint').html(routeName)

                  $('#tripAmount').html(totalAmount)
                  $('#tripPromoDiscount').html("P0.00")
                  $('#tripTotalAmount').html(totalAmount)

                  if(reservationLine.length != 0){

                    $('#passengerTablePrint').find('thead').append(`<tr>
                                        <th width="20%" id="passengerSeatPrint">Seat No.</th>
                                        <th width="20%" id="passengerNamePrint">Name</th>
                                        <th width="20%" id="passengerRoutePrint">Route</th>
                                        <th width="20%" id="passengerInsurancePrint">Insurance</th>
                                        <th width="20%" id="passengerSubTotalPrint">Sub Total</th>
                                    </tr>`)

                    for(i=0; i < reservationLine.length; i++){

                      if(reservationLine[i].insuranceFee == null){
                        insurance = "P0.00";
                      }
                      else{
                        insurance = reservationLine[i].insuranceFee
                      }

                      $('#passengerTablePrint').find('tbody').append(`
                        <tr>
                          <td><p class="pTag">${reservationLine[i].seat.code}</p></td>
                          <td><p class="pTag">${reservationLine[i].passengerName}</p></td>
                          <td><p class="pTag">${reservationLine[i].route}</p></td>
                          <td><p class="pTag">${insurance}</p></td>
                          <td><p class="pTag">${reservationLine[i].amount}</p></td>
                        </tr>
                      `)
                    }
                  }
                }
        })

          $("#counterPrintReceipt").printThis({
                debug: true,               // show the iframe for debugging
                importCSS: true,            // import parent page css
                importStyle: true,         // import style tags
                printContainer: false,       // print outer container/$.selector
                loadCSS: "",                // path to additional css file - use an array [] for multiple
                pageTitle: "",              // add title to print page
                removeInline: false,        // remove inline styles from print elements
                removeInlineSelector: "*",  // custom selectors to filter inline styles. removeInline must be true
                printDelay: 333,            // variable print delay
                header: null,               // prefix to html
                footer: null,               // postfix to html
                base: false,                // preserve the BASE tag or accept a string for the URL
                formValues: true,           // preserve input/form values
                canvas: false,              // copy canvas content
                doctypeString: '...',       // enter a different doctype for older markup
                removeScripts: true,       // remove script tags from print content
                copyTagClasses: true,      // copy classes from the html & body tag
                beforePrintEvent: null,     // function for printEvent in iframe
                beforePrint: null,          // function called before iframe is filled
                afterPrint: null            // function called before iframe is removed
              });
      })
    });
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>


