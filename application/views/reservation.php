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
                                    <option value="" disabled selected hidden >- - Select Route - -</option>

                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="reserveLandmark">Landmark</label>
                                <select class="form-control" id="reserveLandmark" name="reserveLandmark">
                                    <option value="" disabled selected hidden >- - Select Landmark - -</option>

                                </select>
                            </div>
                          </div>
                          <div class="form-row">
                          <div class="form-group col-sm-12">
                                <label for="reserveSchedule">Schedule</label>
                                <select class="form-control" id="reserveSchedule" name="reserveSchedule">
                                    <option value="" disabled selected hidden >- - Select Schedule - -</option>

                                </select>
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

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

<script>


$('#reservationForm').on('submit', function(e){

e.preventDefault();

var form = $('#reservationForm');
console.log(form.serialize())

$.ajax({
    url:'<?php echo base_url()?>reservation/add_reservation',
    type: "POST",
    data: form.serialize(),
    dataType: "JSON",

    success: function(data){
      document.getElementById("reservationForm").reset();
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
        var html = "";

        if(route.length == 0){
          var html = `<option> -- No route available -- </option>`;
        }
        else{
          var html = "<option> -- Select available bus schedule -- </option>";
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
    show_avail_schedule();
    show_landmark();
});

function show_landmark(){
var landmarkId = document.getElementById('reserveRoute').value;

$.ajax({
  url: '<?php echo base_url()?>RouteView/show_landmark/' + landmarkId,
  type: "GET",
  dataType: "JSON",

  success: function(data){
    var landmark = data.data;
    var html = "";

    if(landmark.length == 0){
          var html = `<option> -- No landmark available -- </option>`;
        }
        else{
          var html = "<option> -- Select available bus schedule -- </option>";
        }

    for(var i=0; i < landmark.length; i++){
      html += `<option value="${landmark[i].id}">${landmark[i].name}</option>`
    }
    
    $('#reserveLandmark').html(html);
  }
})
}

function show_schedule(){
var landmarkId = document.getElementById('reserveRoute').value;

$.ajax({
  url: '<?php echo base_url()?>RouteView/show_landmark/' + landmarkId,
  type: "GET",
  dataType: "JSON",

  success: function(data){
    var landmark = data.data;
    var html = "";

    for(var i=0; i < landmark.length; i++){
      html += `<option value="${landmark[i].id}">${landmark[i].name}</option>`
    }
    
    $('#reserveLandmark').html(html);
  }
})
}

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
      // console.log(schedule);

      var html = "";
      
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