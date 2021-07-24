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

        if($userType == "Passenger"){
            header("location: ".base_url()."users/user/forbidden");
        }


    } 
    else {
        header("location: ".base_url());
    }
    ?>

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
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">event_available</i>
                  </div>
                  <p class="card-category">Number of Reservation this <?php echo(date("F"))?></p>
                  <h3 class="card-title" id="monthlyReservations">666
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 1 Month
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">directions_bus</i>
                  </div>
                  <p class="card-category">Scheduled Reservations Today</p>
                  <h3 class="card-title" id="dailyReservation">32</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">info_outline</i>
                  </div>
                  <p class="card-category">Expected Passengers Today</p>
                  <h3 class="card-title" id="dailyPassengers">75</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 24 Hours
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Scheduled Bus Today</h4>
                  <p class="card-category">Scheduled Bus on <?php echo date('l jS \of F Y');?></p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover" id="scheduledBus">
                    <thead class="text-success">
                      <th>Plate No.</th>
                      <th>Bus Number</th>
                      <th>Bus Type</th>
                      <th>Route</th>
                      <th>Time</th>
                    </thead>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-lg-6 col-md-12">
              <div class="card">
                <div class="card-header card-header-success">
                  <h4 class="card-title">Bus Route Available Today</h4>
                  <p class="card-category">Bus Route Available on <?php echo date('l jS \of F Y');?></p>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover" id="availableRouteTable">
                    <thead class="text-success">
                      <th>Origin</th>
                      <th>Destination</th>
                      <th>Km Distance</th>
                      <th>Effectivity Date</th>
                    </thead>
                  </table>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                   <div class="ct-chart" id="websiteViewsChart"></div>  <!-- PAPALITAN ID NETO -->
                </div>
                <div class="card-body">
                  <h4 class="card-title">Monthly Reservations</h4>
                  <!-- <p class="card-category">Last Campaign Performance</p> -->
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons">date_range</i> Last 1 Year
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div> <!-- PAPALITAN ID NETO -->
                </div>
                <div class="card-body">
                  <h4 class="card-title">Daily Reservations</h4>
                  <!-- <p class="card-category">
                    <span class="text-success"><i class="fa fa-long-arrow-up"></i> 55% </span> increase in today sales.</p> -->
                </div>
                <div class="card-footer">
                  <div class="stats">
                  <i class="material-icons">date_range</i> Last 1 Week
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

function scheduledBusTable(){
    busScheduleData = $('#scheduledBus').DataTable({
      "ajax": "<?php echo base_url()?>busSchedule/showBusScheduleDashboard",
      "columns": [
          // {data: "id"},
          {data: "busInformation.plateNumber"},
          {data: "busInformation.number"},
          {data: "busInformation.busTypeId.name"},
          {data: "busSchedule.route.origin.name", render: function(data, type, row){
            return row.busSchedule.route.origin.name + ' - ' + row.busSchedule.route.destination.name;
          }},
          {data: "busSchedule.hourFrom", render: function(data, type, row){
                return moment(data).format('LT') + ' - ' + moment(row.busSchedule.hourTo).format('LT');
          }},
          // {data: "status", render: function(data, type, row){
          //       if (data == "Active"){
          //         return '<div class="btn-group">' +
          //                 '<button class="btn btn-warning btn-sm btn-edit" value="' + row.id + '"title = "Edit" type="button"> <i class="zmdi zmdi-edit"> </i> Edit </button>'+
          //                 '<button class="btn btn-danger btn-sm btn-delete" value="' + row.id + '"title = "Delete" type="button"> <i class="zmdi zmdi-delete"></i> Delete </button></div>';
          //       }
          //       else{
          //         return '<button class="btn btn-danger btn-sm">Activate</button>';
          //       }
          //     }
          // }
        ],

      "aoColumnDefs": [{ "bVisible": false, "aTargets": [] }],
      "order": [[4, "desc"]]

    })

};

function availableRouteTable(){
  routeDataTable = $('#availableRouteTable').DataTable({
      "ajax": "<?php echo base_url()?>route/show_routeDashboard",
      "columns": [
          // { data: "id"},
          { data: "origin.name"},
          { data: "destination.name"},
          { data: "kmDistance"},
          { data: "effectivityDate", render: function (data, type, row){
              return moment (data).format("LL");
                  }
          },
          // { data: "status", render: function(data, type, row){
          //             if(data == "Active"){
          //                 return '<div class="btn-group">'+
          //                         '<button class="btn btn-primary btn-sm btn_view" value="'+row.id+'" title="View" type="button" ><i class="zmdi zmdi-eye"></i>View</button>'+
          //                         '<button class="btn btn-warning btn-sm btn_edit" value="'+row.id+'" title="Edit" type="button" ><i class="zmdi zmdi-edit"></i>Edit</button>'+
          //                         '<button class="btn btn-danger btn-sm btn_delete" value="'+row.id+'" title="Delete" type="button"> <i class="zmdi zmdi-delete"></i>Delete</button></div>';
          //             }   
          //             else{
          //                 return '<button class="btn btn-secondary btn-sm">Activate</button>';
          //             }
          //         }
          // },
      ],

          "aoColumnDefs": [{ "bVisible": false, "aTargets": [] }],
          "order": [[3, "desc"]]
  })

};

availableRouteTable();
scheduledBusTable();

</script>

</html>