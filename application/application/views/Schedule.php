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

#viewScheduleForm label {
  margin-top: -9px;
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
      <div class="content" style="padding-top: 0px;">
        <div class="container-fluid">
          <div class="row">
            <!-- END OF OPENING TAG OF CONTENT -->
            <div class="card">
              <h5 class="card-header">
                  <a class="collapsed d-block" data-toggle="collapse" href="#collapse-collapsed" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                      <i class="fa fa-chevron-down pull-right"></i>
                      Add Schedule
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <div class="card-body">
                      <form id="scheduleForm">
                            <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label for="routeInput">Route</label>
                                        <select class="form-control" id="routeInput" name="routeInput">           
                                        
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="busTypeInput">Bus Type</label>
                                        <select class="form-control" id="busTypeInput" name="busTypeInput">           
                                        
                                        </select>
                                    </div>
                            </div>
                            <div class="form-row">
                                    <div class="form-group col-sm-3">
                                        <label for="estimatedTimeTravelInput">Estimated Time Travel</label>
                                        <input type="text" class="form-control" id="estimatedTimeTravelInput" name="estimatedTimeTravelInput">
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="hourFromInput">Hour From</label>
                                        <input type="time" class="form-control" id="hourFromInput" name="hourFromInput">
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="hourToInput">Hour To</label>
                                        <input type="time" class="form-control" id="hourToInput" name="hourToInput">
                                    </div>
                                    <div class="form-group col-sm-3">
                                        <label for="willArriveNextDayInput">Will Arrive the Next Day</label>
                                        <input type="text" class="form-control" id="willArriveNextDayInput" name="willArriveNextDayInput">
                                    </div>
                            </div>
                            <div class="form-row">
                                <label>Check all that applies</label>
                            </div>
                            <div class="form-row">
                                <div class="form-check form-check-inline">
                                    <input  type="checkbox" id="mondayInput" name="mondayInput" value="True">
                                    <label class="form-check-label" for="mondayInput" style="padding-left: 5px;">Monday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input  type="checkbox" id="tuesdayInput" name="tuesdayInput" value="True">
                                    <label class="form-check-label" for="tuesdayInput" style="padding-left: 5px;">Tuesday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input  type="checkbox" id="wednesdayInput" name="wednesdayInput" value="True">
                                    <label class="form-check-label" for="wednesdayInput" style="padding-left: 5px;">Wednesday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input  type="checkbox" id="thursdayInput" name="thursdayInput" value="True">
                                    <label class="form-check-label" for="thursdayInput" style="padding-left: 5px;">Thursday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input  type="checkbox" id="fridayInput" name="fridayInput" value="True">
                                    <label class="form-check-label" for="fridayInput" style="padding-left: 5px;">Friday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input  type="checkbox" id="saturdayInput" name="saturdayInput" value="True">
                                    <label class="form-check-label" for="saturdayInput" style="padding-left: 5px;">Saturday</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input  type="checkbox" id="sundayInput" name="sundayInput" value="True">
                                    <label class="form-check-label" for="sundayInput" style="padding-left: 5px;">Sunday</label>
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
              <table id="scheduleTable" class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Route</th>
                    <th>Bus Type</th>
                    <th>Time</th>
                    <th>Date Created</th>
                    <th width="10%">Actions</th>
                </thead>
              </table>
          </div>
          
              
            <!-- CLOSING TAG OF CONTENT -->
          </div>
        </div>
      </div>
      <!-- END OF CLOSING TAG OF CONTENT -->

      <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="viewModal">View Schedule</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card-body">
              <form id="viewScheduleForm">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="routeView">Route</label> <br>
                        <span id="routeView" name="routeView">           
                        </span>
                    </div>
                    <div class="form-group col-sm-6">
                            <label for="busTypeView">Bus Type</label> <br>
                            <span id="busTypeView" name="busTypeView">           
                            </span>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-3">
                            <label for="estimatedTimeTravelView">Estimated Time Travel</label>
                            <span id="estimatedTimeTravelView" name="estimatedTimeTravelView"> </span>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="hourFromView">Hour From</label> <br>
                            <span id="hourFromView" name="hourFromView"> </span>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="hourToView">Hour To</label> <br>
                            <span id="hourToView" name="hourToView"> </span>
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="willArriveNextDayView">Will Arrive the Next Day</label>
                            <span id="willArriveNextDayView" name="willArriveNextDayView"> </span>
                        </div>
                    </div>
                    <div class="form-row">
                        <label>Check all that applies</label>
                    </div>
                    <div class="form-row">
                        <div class="form-check form-check-inline">
                            <input  type="checkbox" id="mondayView" name="mondayView" value="" onclick="return false;">
                            <label class="form-check-label" for="mondayView" style="padding-left: 5px;">Monday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input  type="checkbox" id="tuesdayView" name="tuesdayView" value="" onclick="return false;">
                            <label class="form-check-label" for="tuesdayView" style="padding-left: 5px;">Tuesday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input  type="checkbox" id="wednesdayView" name="wednesdayView" value="" onclick="return false;">
                            <label class="form-check-label" for="wednesdayView" style="padding-left: 5px;">Wednesday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input  type="checkbox" id="thursdayView" name="thursdayView" value="" onclick="return false;">
                            <label class="form-check-label" for="thursdayView" style="padding-left: 5px;">Thursday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input  type="checkbox" id="fridayView" name="fridayView" value="" onclick="return false;">
                            <label class="form-check-label" for="fridayView" style="padding-left: 5px;">Friday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input  type="checkbox" id="saturdayView" name="saturdayView" value="" onclick="return false;">
                            <label class="form-check-label" for="saturdayView" style="padding-left: 5px;">Saturday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input  type="checkbox" id="sundayView" name="sundayView" value="" onclick="return false;">
                            <label class="form-check-label" for="sundayView" style="padding-left: 5px;">Sunday</label>
                        </div>
                    </div>
              </form>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editModal">Edit Schedule</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card-body">
              <form id="editScheduleForm">
              <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input hidden type="text" class="form-control" id="scheduleIdEdit" name="scheduleIdEdit">
                        <label for="routeEdit">Route</label>
                        <select class="form-control" id="routeEdit" name="routeEdit">           
                        
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                            <label for="busTypeEdit">Bus Type</label>
                            <select class="form-control" id="busTypeEdit" name="busTypeEdit">           
                            
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-3">
                            <label for="estimatedTimeTravelEdit">Estimated Time Travel</label>
                            <input type="text" class="form-control" id="estimatedTimeTravelEdit" name="estimatedTimeTravelEdit">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="hourFromEdit">Hour From</label>
                            <input type="time" class="form-control" id="hourFromEdit" name="hourFromEdit">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="hourToEdit">Hour To</label>
                            <input type="time" class="form-control" id="hourToEdit" name="hourToEdit">
                        </div>
                        <div class="form-group col-sm-3">
                            <label for="willArriveNextDayEdit">Will Arrive the Next Day</label>
                            <input type="text" class="form-control" id="willArriveNextDayEdit" name="willArriveNextDayEdit">
                        </div>
                    </div>
                    <div class="form-row">
                        <label>Check all that applies</label>
                    </div>
                    <div class="form-row">
                        <div class="form-check form-check-inline">
                            <input  type="checkbox" id="mondayEdit" name="mondayEdit" value="True">
                            <label class="form-check-label" for="mondayEdit" style="padding-left: 5px;">Monday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input  type="checkbox" id="tuesdayEdit" name="tuesdayEdit" value="True">
                            <label class="form-check-label" for="tuesdayEdit" style="padding-left: 5px;">Tuesday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input  type="checkbox" id="wednesdayEdit" name="wednesdayEdit" value="True">
                            <label class="form-check-label" for="wednesdayEdit" style="padding-left: 5px;">Wednesday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input  type="checkbox" id="thursdayEdit" name="thursdayEdit" value="True">
                            <label class="form-check-label" for="thursdayEdit" style="padding-left: 5px;">Thursday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input  type="checkbox" id="fridayEdit" name="fridayEdit" value="True">
                            <label class="form-check-label" for="fridayEdit" style="padding-left: 5px;">Friday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input  type="checkbox" id="saturdayEdit" name="saturdayEdit" value="True">
                            <label class="form-check-label" for="saturdayEdit" style="padding-left: 5px;">Saturday</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input  type="checkbox" id="sundayEdit" name="sundayEdit" value="True">
                            <label class="form-check-label" for="sundayEdit" style="padding-left: 5px;">Sunday</label>
                        </div>
                    </div>
                  <input type="submit" class="btn btn-primary">
              </form>
            </div>
          </div>
        </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="deleteForm">
              <input hidden type="text" id="deleteScheduleId" name="deleteScheduleId">
              You're deactivating this schedule.
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-danger delete-confirm" >Deactivate</button>
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

<script>

function dataTable(){
    scheduleData = $('#scheduleTable').DataTable({
      "ajax": "<?php echo base_url()?>schedule/showSchedule",
      "columns": [
          {data: "id"},
          {data: "route.name"},
          {data: "busType.name"},
          {"data": null, render: function (data, type, row) {
              var time = moment(row.hourFrom).format('LT') + " - " + moment(row.hourTo).format('LT');
              return time;
          }},
          {data: "created_at", render: function(data, type, row){
                return moment(data).format('LL');
          }},
          {data: "status", render: function(data, type, row){
                if (data == "Active"){
                  return '<div class="btn-group">' +
                          '<button class="btn btn-primary btn-sm btn-view" value="' + row.id + '"title = "View" type="button"> <i class="zmdi zmdi-eye"> </i> View </button>'+
                          '<button class="btn btn-warning btn-sm btn-edit" value="' + row.id + '"title = "Edit" type="button"> <i class="zmdi zmdi-edit"> </i> Edit </button>'+
                          '<button class="btn btn-danger btn-sm btn-delete" value="' + row.id + '"title = "Delete" type="button"> <i class="zmdi zmdi-delete"></i> Delete </button></div>';
                }
                else{
                  return '<button class="btn btn-danger btn-sm">Activate</button>';
                }
              }
          }
        ],

      "aoColumnDefs": [{ "bVisible": false, "aTargets": [0, 4] }],
      "order": [[4, "desc"]]

    })

};


function getBusType(){
    
    $.ajax({
      url: '<?php echo base_url()?>schedule/getBusType',
      type: "GET",
      dataType: "JSON",

      success: function(data){
        var busTypeInfo = data.data;

        var html = "";

        for(var i=0; i < busTypeInfo.length; i++){
          html += `<option value="${busTypeInfo[i].id}">${busTypeInfo[i].name}</option>`
        }
        
        $('#busTypeInput').html(html);
        $('#busTypeEdit').html(html);

      }
    })
  }

function getRoute(){

$.ajax({
    url: '<?php echo base_url()?>schedule/getRoute',
    type: "GET",
    dataType: "JSON",

    success: function(data){
    var routeInfo = data.data;

    var html = "";

    for(var i=0; i < routeInfo.length; i++){
        html += `<option value="${routeInfo[i].id}">${routeInfo[i].origin.name + " - " + routeInfo[i].destination.name}</option>`
    }
    
    $('#routeInput').html(html);
    $('#routeEdit').html(html);

    }
})
}

getRoute();
getBusType();
dataTable();

function refresh(){
  var url="<?php echo base_url()?>schedule/showSchedule";

  scheduleData.ajax.url(url).load();
}


$('#scheduleForm').on('submit', function(e){

    e.preventDefault();

    var form = $('#scheduleForm');


    $.ajax({
        url:'<?php echo base_url()?>schedule/addSchedule',
        type: "POST",
        data: form.serialize(),
        dataType: "JSON",

        success: function(data){
          document.getElementById("scheduleForm").reset();
          showNotification('create', 'Successfully added a new schedule!', 'success', 'top', 'right');
          refresh();
        }
    })
});

$(document).on("click", ".btn-view", function(){
  var id = this.value;

  $("#viewModal").modal('show');
  $.ajax({
        url:'<?php echo base_url()?>schedule/viewSchedule',
        type: "POST",
        data: { id: id},
        dataType: "JSON",

        success: function(data){
          var scheduleInfo = data.data;

          console.log(scheduleInfo);

          $('#scheduleIdView').val(scheduleInfo.id);
          $('#routeView').html(scheduleInfo.route.name);
          $('#busTypeView').html(scheduleInfo.busType.name);
          $('#estimatedTimeTravelView').html(scheduleInfo.estimatedTimeTravel);
          $('#hourToView').html(moment(scheduleInfo.hourTo).format('LT'));
          $('#hourFromView').html(moment(scheduleInfo.hourFrom).format('LT'));
          $('#willArriveNextDayView').html(scheduleInfo.willArriveTheNextDay);

          if(scheduleInfo.monday == "True"){ mondayView.checked = true }
          if(scheduleInfo.tuesday == "True"){ tuesdayView.checked = true }
          if(scheduleInfo.wednesday == "True"){ wednesdayView.checked = true }
          if(scheduleInfo.thursday == "True"){ thursdayView.checked = true }
          if(scheduleInfo.friday == "True"){ fridayView.checked = true }
          if(scheduleInfo.saturday == "True"){ saturdayView.checked = true }
          if(scheduleInfo.sunday == "True"){ sundayView.checked = true }
        }
    })
});

$(document).on("click", ".btn-edit", function(){
  var id = this.value;
  $("#editModal").modal('show');
  $.ajax({
        url:'<?php echo base_url()?>schedule/viewSchedule',
        type: "POST",
        data: { id: id},
        dataType: "JSON",

        success: function(data){
          var scheduleInfo = data.data;

          $('#scheduleIdEdit').val(scheduleInfo.id);
          $('#routeEdit').val(scheduleInfo.routeId);
          $('#busTypeEdit').val(scheduleInfo.busTypeId);
          $('#estimatedTimeTravelEdit').val(scheduleInfo.estimatedTimeTravel);
          $('#hourToEdit').val(moment(scheduleInfo.hourTo).format('HH:mm'));
          $('#hourFromEdit').val(moment(scheduleInfo.hourFrom).format('HH:mm'));
          $('#willArriveNextDayEdit').val(scheduleInfo.willArriveTheNextDay);

          if(scheduleInfo.monday == "True"){ mondayEdit.checked = true }
          if(scheduleInfo.tuesday == "True"){ tuesdayEdit.checked = true }
          if(scheduleInfo.wednesday == "True"){ wednesdayEdit.checked = true }
          if(scheduleInfo.thursday == "True"){ thursdayEdit.checked = true }
          if(scheduleInfo.friday == "True"){ fridayEdit.checked = true }
          if(scheduleInfo.saturday == "True"){ saturdayEdit.checked = true }
          if(scheduleInfo.sunday == "True"){ sundayEdit.checked = true }
          
        }
    })
});

$('#editScheduleForm').on('submit', function(e){

    e.preventDefault();

    var form = $('#editScheduleForm');

    $.ajax({
        url:'<?php echo base_url()?>schedule/editSchedule',
        type: "POST",
        data: form.serialize(),
        dataType: "JSON",

        success: function(data){
          $("#editModal").modal('hide');
          showNotification('update', 'Successfully update bus information!', 'warning', 'top', 'right');
          refresh();
        }
    })
});

$(document).on("click", ".btn-delete", function(){
  var id = this.value;
  $("#deleteModal").modal('show');
  $.ajax({
        url:'<?php echo base_url()?>schedule/viewSchedule',
        type: "POST",
        data: { id: id},
        dataType: "JSON",

        success: function(data){
          var userInfo = data.data;
          var deleteScheduleId = document.getElementById('deleteScheduleId');
          deleteScheduleId.value = userInfo.id
        }
    })
});

$('.delete-confirm').on('click', function(e){

    e.preventDefault();

    var form = $('#deleteForm');

    $.ajax({
        url:'<?php echo base_url()?>schedule/deleteSchedule',
        type: "POST",
        data: form.serialize(),
        dataType: "JSON",

        success: function(data){
          $("#deleteModal").modal('hide');
          showNotification('delete', 'Deleted a schedule!', 'danger', 'top', 'right');
          refresh();
        }
    })
});


</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>