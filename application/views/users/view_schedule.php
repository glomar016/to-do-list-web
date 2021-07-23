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

<style>
#dateInput{
    margin-top: 28px;
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
      <?php $this->load->view('includes/users/navbar.php'); ?>

    <!-- SESSION CHECK -->
    <?php 
        if (isset($this->session->userdata['logged_in'])) {
            $userType = ($this->session->userdata['logged_in']['userType']);
            $userId = ($this->session->userdata['logged_in']['userId']);

        if($userType == ""){
            // header("location: ".base_url()."user/forbidden");
            echo "Logged In";
        }

        } 
        else {
            header("location: ".base_url()."login");
        }
        ?>

        
    <!-- END OF SESSION CHECK -->

      <!-- OPENING TAG OF CONTENT -->
      <div class="content" style="padding-top: 0px;">
        <div class="container-fluid">
          <div class="row">
            <!-- END OF OPENING TAG OF CONTENT -->
            <div class="card">
              <div>
                  <div class="card-body">
                  <div class="card-body">
                  <form id="viewScheduleForm" name="viewScheduleForm">
                      <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label for="exampleInputEmail1">Date</label>
                            <input type="date" class="form-control" name="dateInput" id="dateInput" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="busTypeInput">Bus Type</label>
                            <select class="form-control" id="busTypeInput" name="busTypeInput">
                                <option value="All">All</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="exampleInputEmail1">Origin Terminal</label>
                            <select class="form-control" id="originTerminalInput" name="originTerminalInput">
                                
                            </select>
                        </div>
                      </div>
                      <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="exampleInputPassword1">Route</label>
                                <select class="form-control" id="routeInput" name="routeInput">
                                
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputPassword1">Landmark</label>
                                <select class="form-control" id="landmarkInput" name="landmarkInput">
                                
                                </select>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Search">
                    </form>
                  </div>
                  </div>
              </div>
          </div>
            <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                    <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                            <span>List of Schedule</span>
                        </div>
                    </div>
                </div>
              <div class="card-body">
                <table id="userTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date and Time</th>
                            <th>Terminal</th>
                            <th>Route</th>
                            <th>Bus Type</th>
                            <th>Fare (Regular)</th>
                            <th>Fare (Discount)</th>
                            <th>Date Created</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
              </div>
            </div>

            <!-- CLOSING TAG OF CONTENT -->
          </div>
        </div>
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
    // DATA TABLES
    function loadtable(){
        userDataTable = $('#userTable').DataTable( {
            "ajax": "<?php echo base_url()?>user/show_user",
            "columns": [
                { data: "id"},
                { data: "firstName", render: function(data, type, row){
                        return `${row.firstName} ${row.lastName}`
                    }
                },
                { data: "lastName"},
                { data: "email"},
                { data: "lastName"},
                { data: "lastName"},
                { data: "lastName"},
                { data: "created_at" },

            ],

            "aoColumnDefs": [{ "bVisible": false, "aTargets": [0, 7] }],
            "order": [[7, "desc"]]
        })
    }

    

    loadtable();
    
    function refresh(){
        var url = "<?php echo base_url()?>user/show_user";

        userDataTable.ajax.url(url).load();
    }

$('#viewScheduleForm').on('submit', function(e){
    e.preventDefault();

    var form = $('#viewScheduleForm'); 

    // ajax opening tag
    $.ajax({
        url: '<?php echo base_url()?>users/view_schedule/search_schedule',
        type: "POST",
        data: form.serialize(),
    
        success: function(data){
            console.log(data.data.id)
            document.getElementById("viewScheduleForm").reset();
            refresh();

        }
    // ajax closing tag
    })
});

function get_bus_type(){
    
    $.ajax({
      url: '<?php echo base_url()?>busInformation/get_bus_type',
      type: "GET",
      dataType: "JSON",

      success: function(data){
        var busTypeInfo = data.data;

        var html = ""

        if(busTypeInfo.length == 0){
          var html = `<option> -- No Bus Type -- </option>`;
        }
        else{
          var html = "<option value='1'>All</option>";
        }

        for(var i=0; i < busTypeInfo.length; i++){
          html += `<option value="${busTypeInfo[i].id}">${busTypeInfo[i].name}</option>`
        }
        
        $('#busTypeInput').html(html);
      }
    })
}

function get_terminal(){
        
    $.ajax({
        url: '<?php echo base_url() ?>route/get_terminal',
        type: "GET",
        dataType: "JSON",

        success: function(data){
            console.log(data);

            var terminalInfo = data.data;
            var html = ""

            if(terminalInfo.length == 0){
                var html = `<option> -- No Terminal -- </option>`;
            }
            else{
                var html = "<option value='1'>All</option>";
            }
            
            for(var i=0; i < terminalInfo.length; i++){
                html += `<option value="${terminalInfo[i].id}">${terminalInfo[i].name}</option>`
            }

            $('#originTerminalInput').html(html);
        }
    })
}

function get_route(){
        
    $.ajax({
        url: '<?php echo base_url() ?>route/show_route',
        type: "GET",
        dataType: "JSON",

        success: function(data){
            console.log(data);

            var routeInfo = data.data;
            var html = ""

            if(routeInfo.length == 0){
                var html = `<option> -- No Route -- </option>`;
            }
            else{
                var html = "<option value='1'>All</option>";
            }
            
            for(var i=0; i < routeInfo.length; i++){
                html += `<option value="${routeInfo[i].id}">${routeInfo[i].name}</option>`
            }

            $('#routeInput').html(html);
        }
    })
}


get_route();
get_terminal();
get_bus_type();

</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/users/fixed_scripts.php')?>

</html>


