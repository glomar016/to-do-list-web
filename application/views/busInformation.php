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

#viewBusInfoForm label {
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
                      Add Bus Information
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <div class="card-body">
                      <form id="busInformationForm">
                          <div class="form-row">
                              <div class="form-group col-sm-12">
                              <label for="busNumberInput">Bus Number</label>
                              <input type="text" class="form-control" id="busNumberInput" name="busNumberInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-6">
                                <label for="busTypeInput">Bus Type</label>
                                <select class="form-control" id="busTypeInput" name="busTypeInput">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                              <div class="form-group col-sm-6">
                                <label for="busTemplateInput">Bus Template</label>
                                <select class="form-control" id="busTemplateInput" name="busTemplateInput">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-6">
                              <label for="ownerInput">Owner</label>
                              <input type="text" class="form-control" id="ownerInput" name="ownerInput">
                              </div>
                              <div class="form-group col-sm-6">
                              <label for="contactInput">Contact Number</label>
                              <input type="text" class="form-control" id="contactInput" name="contactInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-3">
                              <label for="plateInput">Plate Number</label>
                              <input type="text" class="form-control" id="plateInput" name="plateInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="engineInput">Engine Number</label>
                              <input type="text" class="form-control" id="engineInput" name="engineInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="chasisInput">Chasis Number</label>
                              <input type="text" class="form-control" id="chasisInput" name="chasisInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="fileNumberInput">MV File Number</label>
                              <input type="text" class="form-control" id="fileNumberInput" name="fileNumberInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-3">
                              <label for="denominationInput">Denomination</label>
                              <input type="text" class="form-control" id="denominationInput" name="denominationInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="pistonInput">Piston Placement</label>
                              <input type="text" class="form-control" id="pistonInput" name="pistonInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="fuelInput">Fuel</label>
                              <input type="text" class="form-control" id="fuelInput" name="fuelInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="yearInput">Year Model</label>
                              <input type="text" class="form-control" id="yearInput" name="yearInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-3">
                              <label for="makeInput">Make</label>
                              <input type="text" class="form-control" id="makeInput" name="makeInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="seriesInput">Series</label>
                              <input type="text" class="form-control" id="seriesInput" name="seriesInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="cylindersInput">Body Type</label>
                              <input type="text" class="form-control" id="bodyInput" name="bodyInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="bodyNumberInput">Body Number</label>
                              <input type="text" class="form-control" id="bodyNumberInput" name="bodyNumberInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-3">
                              <label for="netCapacityInput">Net Capacity</label>
                              <input type="text" class="form-control" id="netCapacityInput" name="netCapacityInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="grossWeightInput">Gross Weight (kg)</label>
                              <input type="text" class="form-control" id="grossWeightInput" name="grossWeightInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="netWeightInput">Net Weight (kg)</label>
                              <input type="text" class="form-control" id="netWeightInput" name="netWeightInput">
                              </div>
                              <div class="form-group col-sm-3">
                              <label for="shipWeightInput">Shipping Weight (kg)</label>
                              <input type="text" class="form-control" id="shipWeightInput" name="shipWeightInput">
                              </div>
                          </div>
                          <div class="form-row">
                              <label>Check all that applies</label>
                          </div>
                          <div class="form-row">
                            <div class="form-check form-check-inline">
                              <input  type="checkbox" id="withTelevision" name="withTelevision" value="True">
                              <label class="form-check-label" for="withTelevision" style="padding-left: 5px;">with Television</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input  type="checkbox" id="withAircon" name="withAircon" value="True">
                              <label class="form-check-label" for="withAircon" style="padding-left: 5px;">with Aircon</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input  type="checkbox" id="withWifi" name="withWifi" value="True">
                              <label class="form-check-label" for="withWifi" style="padding-left: 5px;">with WiFi</label>
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
              <table id="busInformationTable" class="table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Bus Number</th>
                    <th>Bus Owner</th>
                    <th>Plate Number</th>
                    <th>Date Created</th>
                    <th>Actions</th>
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
              <h5 class="modal-title" id="viewModal">View Bus Information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card-body">
              <form id="viewBusInfoForm">
                  <div class="form-row">
                      <div class="form-group col-sm-12">
                      <label for="busNumberView">Bus Number</label>
                      <input type="text" class="form-control" id="busNumberView" name="busNumberView"  >
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-sm-6">
                        <label for="busTypeView">Bus Type</label>
                        <input type="text" class="form-control" id="busTypeView" name="busTypeView"  >
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="busTemplateView">Bus Template</label>
                        <input type="text" class="form-control" id="busTemplateView" name="busTemplateView"  >
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-sm-6">
                      <label for="ownerView">Owner</label>
                      <input type="text" class="form-control" id="ownerView" name="ownerView"  >
                      </div>
                      <div class="form-group col-sm-6">
                      <label for="contactView">Contact Number</label>
                      <input type="text" class="form-control" id="contactView" name="contactView"  >
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-sm-3">
                      <label for="plateView">Plate Number</label>
                      <input type="text" class="form-control" id="plateView" name="plateView"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="engineView">Engine Number</label>
                      <input type="text" class="form-control" id="engineView" name="engineView"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="chasisView">Chasis Number</label>
                      <input type="text" class="form-control" id="chasisView" name="chasisView"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="fileNumberView">MV File Number</label>
                      <input type="text" class="form-control" id="fileNumberView" name="fileNumberView"  >
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-sm-3">
                      <label for="denominationView">Denomination</label>
                      <input type="text" class="form-control" id="denominationView" name="denominationView"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="pistonView">Piston Placement</label>
                      <input type="text" class="form-control" id="pistonView" name="pistonView"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="fuelView">Fuel</label>
                      <input type="text" class="form-control" id="fuelView" name="fuelView"  > 
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="yearView">Year Model</label>
                      <input type="text" class="form-control" id="yearView" name="yearView"  >
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-sm-3">
                      <label for="makeView">Make</label>
                      <input type="text" class="form-control" id="makeView" name="makeView"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="seriesView">Series</label>
                      <input type="text" class="form-control" id="seriesView" name="seriesView"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="bodyView">Body Type</label>
                      <input type="text" class="form-control" id="bodyView" name="bodyView"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="bodyNumberView">Body Number</label>
                      <input type="text" class="form-control" id="bodyNumberView" name="bodyNumberView"  >
                      </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-sm-3">
                      <label for="netCapacityView">Net Capacity</label>
                      <input type="text" class="form-control" id="netCapacityView" name="netCapacityView"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="grossWeightView">Gross Weight (kg)</label>
                      <input type="text" class="form-control" id="grossWeightView" name="grossWeightView"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="netWeightView">Net Weight (kg)</label>
                      <input type="text" class="form-control" id="netWeightView" name="netWeightView"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="shipWeightView">Shipping Weight (kg)</label>
                      <input type="text" class="form-control" id="shipWeightView" name="shipWeightView"  >
                      </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-sm-3">
                      <label for="shipWeightInput">Has Television</label>
                      <input type="checkbox" id="withTvView" name="withTvView"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="shipWeightInput">Has Aircon</label>
                      <input type="checkbox" id="withAirconView" name="withAirconView"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="shipWeightInput">Has WiFi</label>
                      <input type="checkbox" id="withWifiView" name="withWifiView"  >
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
              <h5 class="modal-title" id="editModal">Edit Bus Information</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card-body">
              <form id="editBusInfoForm">
                  <div class="form-row">
                      <div class="form-group col-sm-12">
                      <label for="busNumberEdit">Bus Number</label>
                      <input type="text" class="form-control" id="busNumberEdit" name="busNumberEdit"  >
                      <input hidden type="text" class="form-control" id="idBusInformationEdit" name="idBusInformationEdit"  >
                      </div>
                  </div>
                  <div class="form-row">
                              <div class="form-group col-sm-6">
                                <label for="busTypeEdit">Bus Type</label>
                                <select class="form-control" id="busTypeEdit" name="busTypeEdit">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                              <div class="form-group col-sm-6">
                                <label for="busTemplateEdit">Bus Template</label>
                                <select class="form-control" id="busTemplateEdit" name="busTemplateEdit">
                                  <option>1</option>
                                  <option>2</option>
                                  <option>3</option>
                                  <option>4</option>
                                  <option>5</option>
                                </select>
                              </div>
                          </div>
                  <div class="form-row">
                      <div class="form-group col-sm-6">
                      <label for="ownerEdit">Owner</label>
                      <input type="text" class="form-control" id="ownerEdit" name="ownerEdit"  >
                      </div>
                      <div class="form-group col-sm-6">
                      <label for="contactEdit">Contact Number</label>
                      <input type="text" class="form-control" id="contactEdit" name="contactEdit"  >
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-sm-3">
                      <label for="plateEdit">Plate Number</label>
                      <input type="text" class="form-control" id="plateEdit" name="plateEdit"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="engineEdit">Engine Number</label>
                      <input type="text" class="form-control" id="engineEdit" name="engineEdit"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="chasisEdit">Chasis Number</label>
                      <input type="text" class="form-control" id="chasisEdit" name="chasisEdit"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="fileNumberEdit">MV File Number</label>
                      <input type="text" class="form-control" id="fileNumberEdit" name="fileNumberEdit"  >
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-sm-3">
                      <label for="denominationEdit">Denomination</label>
                      <input type="text" class="form-control" id="denominationEdit" name="denominationEdit"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="pistonEdit">Piston Placement</label>
                      <input type="text" class="form-control" id="pistonEdit" name="pistonEdit"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="fuelEdit">Fuel</label>
                      <input type="text" class="form-control" id="fuelEdit" name="fuelEdit"  > 
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="yearEdit">Year Model</label>
                      <input type="text" class="form-control" id="yearEdit" name="yearEdit"  >
                      </div>
                  </div>
                  <div class="form-row">
                      <div class="form-group col-sm-3">
                      <label for="makeEdit">Make</label>
                      <input type="text" class="form-control" id="makeEdit" name="makeEdit"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="seriesEdit">Series</label>
                      <input type="text" class="form-control" id="seriesEdit" name="seriesEdit"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="bodyEdit">Body Type</label>
                      <input type="text" class="form-control" id="bodyEdit" name="bodyEdit"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="bodyNumberEdit">Body Number</label>
                      <input type="text" class="form-control" id="bodyNumberEdit" name="bodyNumberEdit"  >
                      </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-sm-3">
                      <label for="netCapacityEdit">Net Capacity</label>
                      <input type="text" class="form-control" id="netCapacityEdit" name="netCapacityEdit"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="grossWeightEdit">Gross Weight (kg)</label>
                      <input type="text" class="form-control" id="grossWeightEdit" name="grossWeightEdit"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="netWeightEdit">Net Weight (kg)</label>
                      <input type="text" class="form-control" id="netWeightEdit" name="netWeightEdit"  >
                      </div>
                      <div class="form-group col-sm-3">
                      <label for="shipWeightEdit">Shipping Weight (kg)</label>
                      <input type="text" class="form-control" id="shipWeightEdit" name="shipWeightEdit"  >
                      </div>
                  </div>
                  <div class="form-row">
                      <label>Check all that applies</label>
                  </div>
                  <div class="form-row">
                    <div class="form-check form-check-inline">
                      <input  type="checkbox" id="withTelevisionEdit" name="withTelevisionEdit" value="True">
                      <label class="form-check-label" for="withTelevisionEdit" style="padding-left: 5px;">with Television</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input  type="checkbox" id="withAirconEdit" name="withAirconEdit" value="True">
                      <label class="form-check-label" for="withAirconEdit" style="padding-left: 5px;">with Aircon</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input  type="checkbox" id="withWifiEdit" name="withWifiEdit" value="True">
                      <label class="form-check-label" for="withWifiEdit" style="padding-left: 5px;">with WiFi</label>
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
              <input hidden type="text" id="deleteBusInformationId" name="deleteBusInformationId">
              You're deactivating this Bus information
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
    busInformationData = $('#busInformationTable').DataTable({
      "ajax": "<?php echo base_url()?>busInformation/show_BusInformation",
      "columns": [
          {data: "id"},
          {data: "number"},
          {data: "owner"},
          {data: "plateNumber"},
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

      "aoColumnDefs": [{ "bVisible": false, "aTargets": [0] }],
      "order": [[4, "desc"]]

    })

};

dataTable();

function refresh(){
  var url="<?php echo base_url()?>busInformation/show_BusInformation";

  busInformationData.ajax.url(url).load();
}


$('#busInformationForm').on('submit', function(e){

    e.preventDefault();

    var form = $('#busInformationForm');

    $.ajax({
        url:'<?php echo base_url()?>busInformation/addBusInformation',
        type: "POST",
        data: form.serialize(),
        dataType: "JSON",

        success: function(data){
          document.getElementById("busInformationForm").reset();
          showNotification('create', 'Successfully added a new bus!', 'success', 'top', 'right');
          refresh();
        }
    })
});

$(document).on("click", ".btn-view", function(){
  var id = this.value;
  $("#viewModal").modal('show');
  $.ajax({
        url:'<?php echo base_url()?>busInformation/viewBusInformation',
        type: "POST",
        data: { id: id},
        dataType: "JSON",

        success: function(data){
          var userInfo = data.data;

          var busNumberView = document.getElementById('busNumberView');
          var busTypeView = document.getElementById('busTypeView');
          var busTemplateView = document.getElementById('busTemplateView');
          var ownerView = document.getElementById('ownerView');
          var contactView = document.getElementById('contactView');
          var plateView = document.getElementById('plateView');
          var engineView = document.getElementById('engineView');
          var chasisView = document.getElementById('chasisView');
          var fileNumberView = document.getElementById('fileNumberView');
          var denominationView = document.getElementById('denominationView');
          var pistonView = document.getElementById('pistonView');
          var fuelView = document.getElementById('fuelView');
          var makeView = document.getElementById('makeView');
          var seriesView = document.getElementById('seriesView');
          var bodyView = document.getElementById('bodyView');
          var bodyNumberView = document.getElementById('bodyNumberView');
          var yearView = document.getElementById('yearView');
          var grossWeightView = document.getElementById('grossWeightView');
          var netWeightView = document.getElementById('netWeightView');
          var shipWeightView = document.getElementById('shipWeightView');
          var netCapacityView = document.getElementById('netCapacityView');
          var withTvView = document.getElementById('withTvView');
          var withAirconView = document.getElementById('withAirconView');
          var withWifiView = document.getElementById('withWifiView');

          busNumberView.value = userInfo.number
          busTypeView.value = userInfo.type
          busTemplateView.value = userInfo.template
          ownerView.value = userInfo.owner
          contactView.value = userInfo.contactNumber
          plateView.value = userInfo.plateNumber
          engineView.value = userInfo.engineNumber
          chasisView.value = userInfo.chasisNumber
          fileNumberView.value = userInfo.fileNumber
          denominationView.value = userInfo.denomination
          pistonView.value = userInfo.pistonPlacement
          fuelView.value = userInfo.fuel
          makeView.value = userInfo.make
          seriesView.value = userInfo.series
          bodyView.value = userInfo.bodyType
          bodyNumberView.value = userInfo.bodyNumber
          yearView.value = userInfo.yearModel
          grossWeightView.value = userInfo.grossWeight
          netWeightView.value = userInfo.netWeight
          shipWeightView.value = userInfo.shippingWeight
          netCapacityView.value = userInfo.netCapacity

          if(userInfo.hasTelevision == "True"){ withTvView.checked = true }
          if(userInfo.hasAircon == "True"){ withAirconView.checked = true }
          if(userInfo.hasWifi == "True"){ withWifiView.value = true }
        }
    })
});

$(document).on("click", ".btn-edit", function(){
  var id = this.value;
  $("#editModal").modal('show');
  $.ajax({
        url:'<?php echo base_url()?>busInformation/viewBusInformation',
        type: "POST",
        data: { id: id},
        dataType: "JSON",

        success: function(data){
          var userInfo = data.data;

          $('#busNumberEdit').val(userInfo.number);

          var idBusInformationEdit = document.getElementById('idBusInformationEdit');
          // var busNumberEdit = document.getElementById('busNumberEdit');
          var busTypeEdit = document.getElementById('busTypeEdit');
          var busTemplateEdit = document.getElementById('busTemplateEdit');
          var ownerEdit = document.getElementById('ownerEdit');
          var contactEdit = document.getElementById('contactEdit');
          var plateEdit = document.getElementById('plateEdit');
          var engineEdit = document.getElementById('engineEdit');
          var chasisEdit = document.getElementById('chasisEdit');
          var fileNumberEdit = document.getElementById('fileNumberEdit');
          var denominationEdit = document.getElementById('denominationEdit');
          var pistonEdit = document.getElementById('pistonEdit');
          var fuelEdit = document.getElementById('fuelEdit');
          var makeEdit = document.getElementById('makeEdit');
          var seriesEdit = document.getElementById('seriesEdit');
          var bodyEdit = document.getElementById('bodyEdit');
          var bodyNumberEdit = document.getElementById('bodyNumberEdit');
          var yearEdit = document.getElementById('yearEdit');
          var grossWeightEdit = document.getElementById('grossWeightEdit');
          var netWeightEdit = document.getElementById('netWeightEdit');
          var shipWeightEdit = document.getElementById('shipWeightEdit');
          var netCapacityEdit = document.getElementById('netCapacityEdit');
          var withTvEdit = document.getElementById('withTelevisionEdit');
          var withAirconEdit = document.getElementById('withAirconEdit');
          var withWifiEdit = document.getElementById('withWifiEdit');

          idBusInformationEdit.value = userInfo.id
          // busNumberEdit.value = userInfo.number
          busTypeEdit.value = userInfo.type
          busTemplateEdit.value = userInfo.template
          ownerEdit.value = userInfo.owner
          contactEdit.value = userInfo.contactNumber
          plateEdit.value = userInfo.plateNumber
          engineEdit.value = userInfo.engineNumber
          chasisEdit.value = userInfo.chasisNumber
          fileNumberEdit.value = userInfo.fileNumber
          denominationEdit.value = userInfo.denomination
          pistonEdit.value = userInfo.pistonPlacement
          fuelEdit.value = userInfo.fuel
          makeEdit.value = userInfo.make
          seriesEdit.value = userInfo.series
          bodyEdit.value = userInfo.bodyType
          bodyNumberEdit.value = userInfo.bodyNumber
          yearEdit.value = userInfo.yearModel
          grossWeightEdit.value = userInfo.grossWeight
          netWeightEdit.value = userInfo.netWeight
          shipWeightEdit.value = userInfo.shippingWeight
          netCapacityEdit.value = userInfo.netCapacity
          if(userInfo.hasTelevision == "True"){ withTvEdit.checked = true }
          if(userInfo.hasAircon == "True"){ withAirconEdit.checked = true }
          if(userInfo.hasWifi == "True"){ withWifiEdit.value = true }
          
        }
    })
});

$('#editBusInfoForm').on('submit', function(e){

    e.preventDefault();

    var form = $('#editBusInfoForm');

    $.ajax({
        url:'<?php echo base_url()?>busInformation/editBusInformation',
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
        url:'<?php echo base_url()?>busInformation/viewBusInformation',
        type: "POST",
        data: { id: id},
        dataType: "JSON",

        success: function(data){
          var userInfo = data.data;
          var deleteBusInformationId = document.getElementById('deleteBusInformationId');
          deleteBusInformationId.value = userInfo.id
        }
    })
});

$('.delete-confirm').on('click', function(e){

    e.preventDefault();

    var form = $('#deleteForm');

    $.ajax({
        url:'<?php echo base_url()?>busInformation/deleteBusInformation',
        type: "POST",
        data: form.serialize(),
        dataType: "JSON",

        success: function(data){
          $("#deleteModal").modal('hide');
          showNotification('delete', 'Deleted a bus information!', 'danger', 'top', 'right');
          refresh();
        }
    })
});
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>