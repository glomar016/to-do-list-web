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
                            <div class="form-group col-sm-12">
                                <label for="reserveBilling">Billing Address</label>
                                <input type="text" class="form-control" id="reserveBilling" name="reserveBilling">
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
                            <div class="form-group col-sm-6">
                                <label for="reserveRoute">Route</label>
                                <select class="form-control" id="reserveRoute" name="reserveRoute">

                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="reserveLandmark">Landmark</label>
                                <select class="form-control" id="reserveLandmark" name="reserveLandmark">

                                </select>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="form-group col-sm-12">
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
                            <input type="submit" class="btn btnd-md btn-success float-right"><br><br>
                      </form>
                  </div>
                  </div>
              </div>
          </div>

          <div class="card">
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

<script>

function dataTable(){
    reservationTable = $('#reservationTable').DataTable({
      "ajax": "<?php echo base_url()?>reservation/show_reservations",
      "columns": [
          {data: "id"},
          {data: "referenceNumber"},
          {data: "name"},
          {data: "scheduleId", render: function(data, type, row){
              return row.schedule.route.origin.name + ' - ' + row.schedule.route.destination.name + ' - ' + moment(row.reservationDate).format('ll') + ' - ' 
                    + moment(row.schedule.hourFrom).format('LT') + ' - ' + moment(row.schedule.hourTo).format('LT');;
          }},
          {data: "totalAmount", render: function(data, type, row){
              return "P" + parseFloat(data).toFixed(2);
          }},
          {data: "currentStatus"},
          {data: "status", render: function(data, type, row){
                if (data == "Active"){
                  return '<div class="btn-group">' +
                          '<button class="btn btn-info btn-sm btn-view" value="' + row.id + '"title = "View" type="button"> <i class="zmdi zmdi-view"> </i> View </button>'+
                          '<button class="btn btn-warning btn-sm btn-edit" value="' + row.id + '"title = "Edit" type="button"> <i class="zmdi zmdi-edit"> </i> Edit </button>'+
                          '<button class="btn btn-danger btn-sm btn-delete" value="' + row.id + '"title = "Delete" type="button"> <i class="zmdi zmdi-delete"></i> Delete </button></div>';
                }
                else{
                  return '<button class="btn btn-danger btn-sm">Activate</button>';
                }
              }
          }
        ],

      "aoColumnDefs": [{ "bVisible": false, "aTargets": [0, 6] }],
      "order": [[3, "desc"]]

    })

};


dataTable();

function refresh(){
  var url="<?php echo base_url()?>reservation/show_reservations";

  reservationTable.ajax.url(url).load();
}



$('#reservationForm').on('submit', function(e){

  e.preventDefault();

  var form = $('#reservationForm');

  var reserveBusType = $('#reserveBusType').val();
  var reserveSchedule = $('#reserveSchedule').val();
  var initialKm, initialPrice, additionalKm, discountPercentage, routeKmDistance;


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

  var totalKm = parseInt($('#reserveLandmark').val()) - (parseInt(initialKm));
  console.log(totalKm);
  var totalPrice = parseFloat((parseFloat(totalKm + 1) * parseFloat(additionalKm)));
  var totalDiscount = totalPrice - (parseFloat(totalPrice * (parseFloat(discountPercentage / 100))))

  var date = new Date();
  let today = '0' + Math.floor((date.getMonth()+1).toString() + date.getDate().toString() + date.getFullYear().toString().substr(-2) + date.getHours().toString() + date.getMinutes().toString())
  let random = (Math.random()).toString()
  let referenceNumber = random.slice(2, 6).toString() + today.toString();
  let currentStatus = "Pending"

  let addedData = form.serializeArray()
  addedData.push({name: 'referenceNumber', value: referenceNumber});
  addedData.push({name: 'totalPrice', value: totalPrice});
  addedData.push({name: 'totalDiscount', value: totalDiscount});
  addedData.push({name: 'currentStatus', value: currentStatus});

  console.log(addedData);

      

  $.ajax({
      url:'<?php echo base_url()?>reservation/add_reservation',
      type: "POST",
      data: addedData, 
      dataType: "JSON",

      success: function(data){
        refresh();
        console.log(data);
        document.getElementById("reservationForm").reset();
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
            var html = `<option> -- No landmark available -- </option>`;
          }
          else{
            var html = "<option> -- Select available landmarks -- </option>";
          }

      html += `<option value="${kmDistance}">${routeName}</option>`
      for(var i=0; i < landmark.length; i++){
        html += `<option value="${landmark[i].kmFromOrigin}">${landmark[i].name}</option>`
      }
      
      $('#reserveLandmark').html(html);
    }
})
}


$( "#btnShowSched" ).on('click', function(e) {
  e.preventDefault();
  $("#scheduleDiv").attr("hidden", false);
  show_avail_schedule();
});

// function show_schedule(){
// var scheduleId = document.getElementById('reserveRoute').value;

// $.ajax({
//   url: '<?php echo base_url()?>schedule/show_schedule/' + scheduleId,
//   type: "GET",
//   dataType: "JSON",

//   success: function(data){
//     var schedule = data.data;
//     var html = "";

//     if(schedule.length == 0){
//           var html = `<option> -- No landmark available -- </option>`;
//         }
//         else{
//           var html = "<option> -- Select available landmarks -- </option>";
//         }

//     for(var i=0; i < landmark.length; i++){
//       html += `<option value="${landmark[i].id}">${landmark[i].name}</option>`
//     }
    
//     $('#reserveLandmark').html(html);
//   }
// })
// }

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

        html += `<option value="${schedule[i].busSchedule.id}">` + date + " | " + hourFrom + "-" + hourTo + " | Bus Number: " + `${schedule[i].busInformation.number}</option>`;
      }
      
      $('#reserveSchedule').html(html);
    }
  })

}
  show_terminal();
  get_bus_type();
  // show_avail_schedule();
</script>

</html>