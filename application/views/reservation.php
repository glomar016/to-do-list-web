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

<style>
  .myDivToPrint {
        background-color: white;
        height: 100%;
        width: 100%;
        position: fixed;
        top: 0;
        left: 0;
        margin: 0;
        padding: 0px;
        font-size: 20px;
        line-height: 18px;
    }
</style>

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
                      Add Reservation
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <div class="card-body">   
                      <form id="reservationForm">
                          <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="reserveName">Name</label>
                                <input type="text" class="form-control" id="reserveName" name="reserveName">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="reserveDate">Date</label>
                                <input type="date" class="form-control" id="reserveDate" name="reserveDate">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-8">
                                <label for="reserveBilling">Billing Address</label>
                                <input type="text" class="form-control" id="reserveBilling" name="reserveBilling">
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="promoId">Promo Code</label>
                                <input type="text" class="form-control" id="promoId" name="promoId">
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="reserveBusType">Bus Type</label>
                                <select class="form-control" id="reserveBusType" name="reserveBusType">
                                    <option value="" disabled selected hidden >- - Select Bus Type - -</option>

                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="reserveOrigin">Origin Terminal</label>
                                <select class="form-control" id="reserveOrigin" name="reserveOrigin">
                                    <option value="" disabled selected hidden >- - Select Origin Terminal - -</option>

                                </select>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-12">
                                <label for="reserveRoute">Route</label>
                                <select class="form-control" id="reserveRoute" name="reserveRoute">

                                </select>
                            </div>
                            
                            <!-- <div class="form-group col-sm-6">
                                <label for="reserveLandmark">Landmark</label>
                                <select class="form-control" id="reserveLandmark" name="reserveLandmark">

                                </select>
                            </div> -->
                          </div>
                          <div class="form-row">
                            
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-12 d-flex justify-content-center">
                              <button id="btnShowSched" class="btn btn-sm btn-info float-left">Show Available Schedule</button>
                            </div>
                          </div>
                          <div class="form-row">
                          <div id="scheduleDiv" class="form-group col-sm-12" hidden>
                                <label for="reserveSchedule">Schedule</label>
                                <select class="form-control" id="reserveSchedule" name="reserveSchedule">

                                </select>
                            </div>
                          </div>
                            
                  </div>
                  </div>
              </div>
          </div>

          
            <div id="templateDiv" class="card" hidden>
              <div class="card-body">
                <table id="templateTable" class="table">
                    <thead>
                    </thead>
                </table>
              </div>
            </div>
          
            <div id="seatDiv"  class="card" hidden>
              <div class="card-body">
                <table id="seatTable" class="table">
                  <thead>
                    <tr>
                      <th hidden>Seat ID</th>
                      <th>Seat Number</th>
                      <th>Passenger's Name</th>
                      <th>Destination</th>
                      <th>Insurance</th>
                      <th>PWD/Senior/Student</th>
                      <th>Amount</th>
                  </thead>
                  <tbody>

                  </tbody>
                </table>
                <input type="submit" class="btn btnd-md btn-success float-right"><br><br>
                </form>
              </div>
            </div>

          

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
            <!-- CLOSING TAG OF CONTENT -->
          </div>
        </div>
      </div>
      <!-- END OF CLOSING TAG OF CONTENT -->

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

  let globalLandmark;

function dataTable(){
    reservationTable = $('#reservationTable').DataTable({
      "ajax": "<?php echo base_url()?>reservation/show_reservations",
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
                          '<button class="btn btn-danger btn-sm btn-refund-reservation" value="' + row.id + '"title = "Refund" type="button"> <i class="zmdi zmdi-edit"> </i> Refund </button>'+
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
  var url="<?php echo base_url()?>reservation/show_reservations";

  reservationTable.ajax.url(url).load();
}

var bookingDate = new Date();
// var bookingDate = date.getFullYear()+'-'+(date.getMonth()+1)+'-'+date.getDate();
// var travelDate = $('#reserveDate').val();
console.log(bookingDate);

var code, ajaxRequest, initialKm, initialPrice, additionalKm, discountPercentage, routeKmDistance;
var totalKm, totalPrice, totalDiscount, priceTotal, discountTotal, totalPricePromoPercent;

$('#reserveBusType').on('change', function(e){
e.preventDefault()
var reserveBusType = document.getElementById('reserveBusType').value;

  var id = this.value;

  $.ajax({
        url:'<?php echo base_url()?>fare/get_specific_fare',
        type: "POST",
        data: { id: reserveBusType},
        dataType: "JSON",
        async: false,

        success: function(data){
          console.log(data);
          objectdata = data.data;
          initialKm = objectdata[0].initialKm;
          initialPrice = objectdata[0].initialPrice;
          additionalKm = objectdata[0].additionalKm;
          discountPercentage = objectdata[0].discountPercentage;
        }
    })
});

  $('#promoId').on('keyup', function(e){
    e.preventDefault();
    var promoId = document.getElementById('promoId').value;
    var travelDate = document.getElementById('reserveDate').value;
    var value = $(this).val();
    clearTimeout(ajaxRequest);
    ajaxRequest = setTimeout(function(e) {
    $.ajax({
      url: '<?php echo base_url()?>promo/get_one_specific_promo/',
      data: {promoId: promoId},
      type: "POST",
      dataType: "JSON",
      async: false,

      success: function(data){
        var promoInfo = data.data;
        console.log(promoInfo);

        if(promoInfo != null){
          if(bookingDate >= new Date(promoInfo.effectivityDate).getTime() && bookingDate < new Date(promoInfo.deactivationDate).getTime()){
            if(bookingDate >= new Date(promoInfo.bookingDateFrom).getTime() && bookingDate <= new Date(promoInfo.bookingDateTo).getTime()){
              if(travelDate >= promoInfo.travelDateFrom && travelDate <= promoInfo.tavelDateTo){
                code = promoInfo.id;
                console.log("gumagana");
                if(promoInfo.fixedDiscount){
                  totalKm = parseInt($('#reserveLandmark').val()) - (parseInt(initialKm));
                  totalPrice = parseFloat((parseFloat(totalKm + 1) * parseFloat(additionalKm)));
                  totalDiscount = totalPrice - (parseFloat(totalPrice * (parseFloat(discountPercentage / 100))))

                  console.log(totalPrice);

                  if(totalPrice >= promoInfo.minimumAmount && totalDiscount >= promoInfo.minimumAmount){
                    priceTotal = parseFloat(totalPrice) - parseFloat(promoInfo.fixedDiscount);
                    discountTotal = parseFloat(totalDiscount) - parseFloat(promoInfo.fixedDiscount);
                    showNotification('create', 'Successfully applied a Promo!', 'success', 'top', 'right');
                  }
                  else{
                    code = null;
                    priceTotal = parseFloat((parseFloat(totalKm + 1) * parseFloat(additionalKm)));
                    discountTotal = totalPrice - (parseFloat(totalPrice * (parseFloat(discountPercentage / 100))))
                    showNotification('error', 'Sorry, You have not reached the minimum amount of promo!', 'danger', 'top', 'right');
                  }

                  if(priceTotal < 0 || discountTotal < 0){
                    priceTotal = 0;
                    discountTotal = 0;
                  }
                }
                else if(promoInfo.percentageDiscount){
                  totalKm = parseInt($('#reserveLandmark').val()) - (parseInt(initialKm));
                  totalPrice = parseFloat((parseFloat(totalKm + 1) * parseFloat(additionalKm)));
                  totalDiscount = totalPrice - (parseFloat(totalPrice * (parseFloat(discountPercentage / 100))))
                  
                  console.log(totalPrice);
                  
                  if(totalPrice >= promoInfo.minimumAmount && totalDiscount >= promoInfo.minimumAmount){
                    totalPricePromoPercent = (parseFloat(totalPrice) * (parseFloat(promoInfo.percentageDiscount)) / 100);
                    priceTotal = parseFloat(totalPrice) - parseFloat(totalPricePromoPercent);
                    discountTotal = totalDiscount - (parseFloat(totalDiscount * (parseFloat(promoInfo.percentageDiscount / 100))))
                    showNotification('create', 'Successfully added a Promo!', 'success', 'top', 'right');
                  }
                  else{
                    code = null;
                    priceTotal = parseFloat((parseFloat(totalKm + 1) * parseFloat(additionalKm)));
                    discountTotal = totalPrice - (parseFloat(totalPrice * (parseFloat(discountPercentage / 100))))
                    showNotification('error', 'Sorry, You have not reached the minimum amount of promo!', 'danger', 'top', 'right');
                  }
                }
                else{
                  code = null;
                  showNotification('error', 'Promo Code does not exist!', 'danger', 'top', 'right');
                  totalKm = parseInt($('#reserveLandmark').val()) - (parseInt(initialKm));
                  priceTotal = parseFloat((parseFloat(totalKm + 1) * parseFloat(additionalKm)));
                  discountTotal = priceTotal - (parseFloat(priceTotal * (parseFloat(discountPercentage / 100))))
                }
              }
              else{
                code = null
                showNotification('error', 'Sorry, Promo Code is out of date!', 'danger', 'top', 'right');
              }
            }
            else{
                code = null
                showNotification('error', 'Sorry, Promo Code is out of date!', 'danger', 'top', 'right');
              }
          }
          else{
            code = null
            showNotification('error', 'Promo is not yet implemented or has expired!', 'danger', 'top', 'right');
          }
        }
        else{
          code = null
          showNotification('error', 'Sorry, Promo Code does not exist!', 'danger', 'top', 'right');
        }

      }
    });
  }, 1000, value);
  });


$('#reservationForm').on('submit', function(e){

  e.preventDefault();

  var scheduleValue = $("#reserveSchedule").children(":selected").text();

  var form = $('#reservationForm');

  var reserveSchedule = $('#reserveSchedule').val();
  let priceTotal = 0;

  let seatId = [],
          seatCode = [],
          passengerName = []
          landmark = []
          passengerInsurance = []
          passengerDiscount = []
          passengerAmount = []
          
          let originTerminal = $('#reserveOrigin option:selected').text()

          $("input[name='seatId[]']").each(function() {
              seatId.push($(this).val());
          });
          $("input[name='passengerName[]']").each(function() {
              passengerName.push($(this).val());
          });
          $("input[name='passengerAmount[]']").each(function() {
              passengerAmount.push($(this).val());
              priceTotal = parseFloat(priceTotal) + parseFloat($(this).val())
              console.log(priceTotal);
          });
          $("select[name='passengerLandmark[]'] option:selected").each(function() {
              landmark.push(originTerminal + ' - ' +$(this).text());
          });
          $("select[name='passengerInsurance[]'] option:selected").each(function() {
              passengerInsurance.push($(this).val());
          });
          $("select[name='passengerDiscount[]'] option:selected").each(function() {
              passengerDiscount.push($(this).val());
          });
          
          console.log(landmark)
          console.log(passengerAmount)

          let reservationLineData = {
            "seatId": seatId,
            "seatCode": seatCode,
            "passengerName": passengerName,
            "landmark": landmark,
            "passengerInsurance": passengerInsurance,
            "passengerDiscount": passengerDiscount,
            "passengerAmount": passengerAmount,
          }

  
  $.ajax({
      url:'<?php echo base_url()?>schedule/get_specific_schedule',
      type: "POST",
      data: { id: reserveSchedule},
      dataType: "JSON",
      async: false,

      success: function(data){
        objectdata = data.data;
        routeKmDistance = objectdata[0].route.kmDistance;
      }
  })

    var promoId = code;

    if(promoId == null){
      totalKm = parseInt($('#reserveLandmark').val()) - (parseInt(initialKm));
    }
    
    var date = new Date();
    let today = '0' + Math.floor((date.getMonth()+1).toString() + date.getDate().toString() + date.getFullYear().toString().substr(-2) + date.getHours().toString() + date.getMinutes().toString())
    let random = (Math.random()).toString()
    let referenceNumber = random.slice(2, 6).toString() + today.toString();
    let currentStatus = "Pending"

    let addedData = form.serializeArray()
    addedData.push({name: 'promoId', value: promoId});
    addedData.push({name: 'referenceNumber', value: referenceNumber});
    addedData.push({name: 'scheduleName', value: scheduleValue});
    addedData.push({name: 'totalPrice', value: parseFloat(priceTotal).toFixed(2)});
    // addedData.push({name: 'totalDiscount', value: discountTotal});
    addedData.push({name: 'currentStatus', value: currentStatus});

    console.log(addedData);

        

    $.ajax({
        url:'<?php echo base_url()?>reservation/add_reservation',
        type: "POST",
        data: addedData, 
        dataType: "JSON",

        success: function(data){
          refresh();
          console.log(data.data.id);
          reservationId = data.data.id;

          $.ajax({
              url:'<?php echo base_url()?>reservation/add_reservation_line',
              type: "POST",
              data: { reservationLineData: reservationLineData, reservationId: reservationId },
              dataType: "JSON",
              async: false,

              success: function(data){
                objectdata = data.data;
                console.log(objectdata);
              }
          })
          document.getElementById("reservationForm").reset();
          $('#seatDiv').attr("hidden", true);
          $('#seatTable').find('tbody').html("");
          $('#templateDiv').attr("hidden", true);
          $('#templateTable').html(`<thead></thead>`);
          $('#reserveRoute').html("");
          $('#reserveLandmark').html("");
          $('#reserveSchedule').html("");
          $('#scheduleDiv').attr("hidden", true)
          showNotification('create', 'Successfully added a new reservation!', 'success', 'top', 'right');
        }
    })

});

function get_bus_type(){
  

    
    $.ajax({
      url: '<?php echo base_url()?>busInformation/get_bus_type',
      type: "GET",
      dataType: "JSON",

      success: function(data){
        var busTypeInfo = data.data;
        var html = "";

        if(busTypeInfo.length == 0){
          var html = `<option> -- No Bus Type -- </option>`;
        }
        else{
          var html = "<option> -- Select available Bus Type -- </option>";
        }

        for(var i=0; i < busTypeInfo.length; i++){
          html += `<option value="${busTypeInfo[i].id}">${busTypeInfo[i].name}</option>`
        }
        
        $('#reserveBusType').html(html);


      }
    })
  }

function show_promo(){

$.ajax({
  url: '<?php echo base_url()?>promo/show_promo',
  type: "GET",
  dataType: "JSON",

  success: function(data){
    var promoInfo = data.data;
    var html = "";

    if(promoInfo.length == 0){
      var html = `<option> -- No Promo -- </option>`;
    }
    else{
      var html = "<option> -- Select available Promo -- </option>";
    }

    for(var i=0; i < promoInfo.length; i++){
      html += `<option value="${promoInfo[i].id}">${promoInfo[i].code}</option>`
    }
    
    $('#promoId').html(html);

  }
})
}


function show_terminal(){
    
    $.ajax({
      url: '<?php echo base_url()?>Terminal/show_terminal',
      type: "GET",
      dataType: "JSON",

      success: function(data){
        var terminal = data.data;
        var html = "";

        if(terminal.length == 0){
          var html = `<option> -- No Terminal available -- </option>`;
        }
        else{
          var html = "<option> -- Select available Terminal -- </option>";
        }

        for(var i=0; i < terminal.length; i++){
          html += `<option value="${terminal[i].id}">${terminal[i].name}</option>`
        }
        
        $('#reserveOrigin').html(html);


      }
    })
  }


$( "#reserveOrigin" ).change(function() {
    show_route();
    
    });

function show_route(){
    var originId = document.getElementById('reserveOrigin').value;

    $.ajax({
      url: '<?php echo base_url()?>route/show_route_origin/' + originId,
      type: "GET",
      dataType: "JSON",

      success: function(data){
        var route = data.data;
        console.log(route);
        var html = "";

        if(route.length == 0){
          var html = `<option> -- No route available -- </option>`;
        }
        else{
          var html = "<option> -- Select available routes -- </option>";
        }

        for(var i=0; i < route.length; i++){
          html += `<option value="${route[i].id}">${route[i].name}</option>`
        }
        
        $('#reserveRoute').html(html);


      }
    })
}

$( "#reserveRoute" ).change(function() {
    show_landmark();
});

function show_landmark(){
  var routeId = document.getElementById('reserveRoute').value;
  console.log(routeId);
  let kmDistance, routeName;

  $.ajax({
    url: '<?php echo base_url()?>route/get_one_route/',
    data: {id: routeId},
    type: "POST",
    dataType: "JSON",

    success: function(data){
      var route = data.data;
      var html = "";
      kmDistance = route.kmDistance
      routeName = route.destination.name
      console.log(route);
    }
  })

  $.ajax({
    url: '<?php echo base_url()?>RouteView/show_landmark/' + routeId,
    type: "GET",
    dataType: "JSON",

    success: function(data){
      var landmark = data.data;
      var html = "";
      console.log(landmark);

      if(landmark.length == 0){
            var html = `<option> -- Select option -- </option>`;
          }
          else{
            var html = "<option> -- Select option -- </option>";
          }

      html += `<option value="${kmDistance}">${routeName}</option>`
      for(var i=0; i < landmark.length; i++){
        html += `<option value="${landmark[i].kmFromOrigin}">${landmark[i].name}</option>`
      }
      
      $('#reserveLandmark').html(html);
      globalLandmark = html;
    }
})
}


$( "#btnShowSched" ).on('click', function(e) {
  e.preventDefault();
  $("#scheduleDiv").attr("hidden", false);
  show_avail_schedule();
});


  function show_avail_schedule(){
    var routeId = document.getElementById('reserveRoute').value;
    var date = document.getElementById('reserveDate').value;
    var TypeId = document.getElementById('reserveBusType').value;
    var formatDate = date + 'T00:00:00.000Z';
    dataInfo = {
      
    }

    $.ajax({
      url: '<?php echo base_url()?>Reservation/show_avail_bus/',
      type: "POST",
      data: {date: formatDate ,
            routeId: routeId,
            TypeId: TypeId},
      datatype: "JSON",
      // contentType: 'application/json',
      
    
      success: function(data){
        var sched = JSON.parse(data);
        var schedule = sched.data
        console.log(schedule);
        var html = "";

        if(schedule.length == 0){
              var html = `<option> -- No schedule available -- </option>`;
            }
            else{
              var html = "<option> -- Select available schedule -- </option>";
            }
        
        
        for(var i=0; i < schedule.length; i++){
          var date = moment(`${schedule[i].scheduleDate}`).format('LL');
          var hourFrom = moment(`${schedule[i].busSchedule.hourFrom}`).format('LT');
          var hourTo = moment(`${schedule[i].busSchedule.hourTo}`).format('LT');

          html += `<option id="${schedule[i].busInformation.id}" value="${schedule[i].busSchedule.id}">` + date + " | " + hourFrom + "-" + hourTo + " | Bus Number: " + `${schedule[i].busInformation.number}</option>`;
        }
        
        $('#reserveSchedule').html(html);
      }
    })

  }

  $('#reserveSchedule').on('change', function(e){
      var id = $(this).children(":selected").attr("id");
      
      $('#templateTable').html(`<thead></thead>`);

      $('#templateDiv').attr('hidden', false);

        $.ajax({
            url: '<?php echo base_url()?>busInformation/show_bus_seats/',
            type: 'POST',
            data: { id, id },
            dataType: "JSON",

            success: function(response){
              let data = response.data;
              console.log(data)
              let html;
              for(let tr=1; tr <= + data[0].template.row; tr++){
                html += `<tr id=tr${tr}> </tr>`
              }

              $('#templateTable').html(html);
              console.log(data);

              let i = 0;
              for(let col=1; col <= data[0].template.column; col++){
                  for(let row=1; row <= data[0].template.row; row++){
                    if(col == 1){
                      if(row == 1){
                        $('#tr'+row).append(`<td style="padding: 15px; padding-left: 50px; text-align:center;"><p style="text-align:center">Entrance</p></td>`)
                      
                        i++;
                      }
                      else if(row == data[0].template.row){
                        $('#tr'+row).append(`<td style="padding: 15px; padding-left: 50px; text-align:center;"><img src="/brs-web/resources/images/seats_driver.png" length="20" width="20"><p style="text-align:center">Driver</p></td>`)
                        console.log('this is driver seat' + data[i].code)
                      
                        i++;
                      }
                      else{
                        $('#tr'+row).append(`<td style="padding: 15px; padding-left: 50px; text-align:center;"></td>`)
                        i++;
                      }
                    }
                    else if(parseInt(row) == (parseInt(data[0].template.row)-2)){
                      if(col == data[0].template.column){
                        if(data[i].currentStatus == 'Available'){
                          $('#tr'+row).append(`<td  style="padding: 15px; padding-left: 50px;  text-align:center;"><img class="seatImg" id="${data[i].id}" alt="${data[i].code}" src="/brs-web/resources/images/seats_available.png" length="20" width="20">
                          <p>${(data[i].code).slice(5, 7)}</p></td>`)
                        }
                        else if(data[i].currentStatus == 'Reserved'){
                          $('#tr'+row).append(`<td  style="padding: 15px; padding-left: 50px;  text-align:center;"><img class="seatImg" id="${data[i].id}" alt="${data[i].code}" src="/brs-web/resources/images/seats_taken.png" length="20" width="20">
                          <p>${(data[i].code).slice(5, 7)}</p></td>`)
                        }

                        
                      
                        i++;
                      }
                      else{
                        $('#tr'+row).append(`<td style="padding: 15px; padding-left: 50px; text-align:center;"></td>`)
                      
                        i++;
                      }
                    }
                    else{
                      if(data[i].currentStatus == 'Available'){
                          $('#tr'+row).append(`<td  style="padding: 15px; padding-left: 50px;  text-align:center;"><img class="seatImg" id="${data[i].id}" alt="${data[i].code}" src="/brs-web/resources/images/seats_available.png" length="20" width="20">
                          <p>${(data[i].code).slice(5, 7)}</p></td>`)
                      }
                      else if(data[i].currentStatus == 'Reserved'){
                        $('#tr'+row).append(`<td  style="padding: 15px; padding-left: 50px;  text-align:center;"><img class="seatImg" id="${data[i].id}" alt="${data[i].code}" src="/brs-web/resources/images/seats_taken.png" length="20" width="20">
                        <p>${(data[i].code).slice(5, 7)}</p></td>`)
                      }
                    
                      i++;
                    }
                  }
              }
            }
        })
  })

  let globalTrCount = 1;

  $(document).on("click", ".seatImg", function(e){

    image = $(this).attr('src');

    $('#seatDiv').attr('hidden', false)

    let seatCode = $(this).attr("alt");
    let seatId = $(this).attr("id")

    if(image == "/brs-web/resources/images/seats_available.png"){
      $(this).attr('src', '/brs-web/resources/images/seats_selected.png')
      $('#seatTable').find('tbody').append(`
        <tr class="seatTr${seatCode.slice(5, 7)}">
          <td hidden>
            <input readonly type="text" value="${seatId}" class="form-control" name="seatId[]">
          </td>
          <td>
            <input readonly type="text" value="${seatCode}" class="form-control" name="seatCode[]">
          </td>
          <td>
            <input type="text" class="form-control" name="passengerName[]">
          </td>
          <td>
            <select id="passengerLandmark${seatCode.slice(5, 7)}" class="form-control passengerLandmark" name="passengerLandmark[]">
                ${globalLandmark}
            </select>
          </td>
          <td>
            <select id="" class="form-control" name="passengerInsurance[]">
              <option disabled selected> -- Select Option -- </option>
            </select>
          </td>
          <td>
            <select id="passengerDiscount${seatCode.slice(5, 7)}" class="form-control passengerDiscount" name="passengerDiscount[]">
              <option disabled selected> -- Select Option -- </option>
              <option id="No">No</option>
              <option id="Yes">Yes</option>
            </select>
          </td>
          <td>
            <input id="amount${seatCode.slice(5, 7)}" readonly type="text" class="form-control" name="passengerAmount[]">
          </td>
        </tr>
      `)
    }
    else if(image == "/brs-web/resources/images/seats_selected.png"){
      $(this).attr('src', '/brs-web/resources/images/seats_available.png')
      $('.seatTr'+(seatCode.slice(5, 7))).remove()
    }
    
  })

  $(document).on("change", ".passengerLandmark", function(e){
    var kmOriginDistance = $(this).children(":selected").val()

    var seatNumber = this.id;
    seatNumber = seatNumber.slice(-2)
    
    discounted = $("#passengerDiscount"+seatNumber).val()

    if(discounted == "Yes"){
      let amount = parseFloat(((kmOriginDistance) - parseInt(initialKm)) * parseFloat(additionalKm) + parseFloat(initialPrice)).toFixed(2)
      discountedAmount = parseFloat(amount) - ((parseFloat(amount) * parseFloat(discountPercentage / 100)))

      $("#amount"+seatNumber).val(parseFloat(discountedAmount).toFixed(2))
    }
    else{
      kmOriginDistance = $($("#passengerLandmark"+seatNumber)).children(":selected").val()

      let amount = parseFloat(((kmOriginDistance) - parseInt(initialKm)) * parseFloat(additionalKm) + parseFloat(initialPrice)).toFixed(2)

      $("#amount"+seatNumber).val(amount)
    }

  })

  $(document).on("change", ".passengerDiscount", function(e){

    var seatNumber = this.id;
    seatNumber = seatNumber.slice(-2)

    if(this.value == "Yes"){
      kmOriginDistance = $($("#passengerLandmark"+seatNumber)).children(":selected").val()

      let amount = parseFloat(((kmOriginDistance) - parseInt(initialKm)) * parseFloat(additionalKm) + parseFloat(initialPrice)).toFixed(2)
      discountedAmount = parseFloat(amount) - ((parseFloat(amount) * parseFloat(discountPercentage / 100)))

      $("#amount"+seatNumber).val(parseFloat(discountedAmount).toFixed(2))
    }
    else{
      kmOriginDistance = $($("#passengerLandmark"+seatNumber)).children(":selected").val()

      let amount = parseFloat(((kmOriginDistance) - parseInt(initialKm)) * parseFloat(additionalKm) + parseFloat(initialPrice)).toFixed(2)

      $("#amount"+seatNumber).val(amount)
    }
  })

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
              console.log(passengerRoute)
              console.log(passengerName)
              console.log(passengerSeat)
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
      $("#counterPrintReceipt").printThis({
						debug: true,               // show the iframe for debugging
            importCSS: true,            // import parent page css
            importStyle: true,         // import style tags
            printContainer: false,       // print outer container/$.selector
            loadCSS: "",                // path to additional css file - use an array [] for multiple
            pageTitle: "",              // add title to print page
            removeInline: true,        // remove inline styles from print elements
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


  show_terminal();
  show_promo();
  get_bus_type();
  // show_avail_schedule();
</script>

</html>