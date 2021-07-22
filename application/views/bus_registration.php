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
.expirationDateLabel{
    margin-top: 15px;
}
.expirationDate{
    margin-top: 29px;
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
                      Add Bus Registration
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <div class="card-body">
                  <form id="addBusRegistrationForm">
                          <div class="form-row">
                              <div class="form-group col-sm-6">
                              <label for="exampleInputEmail1">Plate Number</label>
                              <select class="form-control" id="plateNumberInput" name="plateNumberInput">
                                  
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                              <label for="exampleInputEmail1">Registration Status</label>
                              <select class="form-control" id="registrationStatusInput" name="registrationStatusInput">
                                  <option value="Registered">Registered</option>
                                  <option value="Expired">Expired</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="expirationDateLabel" for="exampleInputPassword1">Expiration Date</label>
                                <input type="date" class="form-control expirationDate" name="expirationDateInput" id="expirationDateInput">
                            </div>
                        </div>
                      
                          <input type="submit" class="btn btn-primary">
                      </form>
                  </div>
                  </div>
              </div>
          </div>
            <div class="card">
            <h4 class="card-header card-header-info">List of Bus Registration</h4>
              <div class="card-body">
                <table id="busRegistrationTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Plate Number</th>
                            <th>Registration Status</th>
                            <th>Expiration Date</th>
                            <th>Date Created</th>
                            <th width="10%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    </tbody>
                </table>
              </div>
            </div>
    </div>
            

            <!-- CLOSING TAG OF CONTENT -->
          </div>
        </div>
      </div>

      <!-- END OF CLOSING TAG OF CONTENT -->

        <div class="modal fade" id="busRegistrationInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="busRegistrationInfoModal">View Bus Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
                <form id="busRegistrationFormView">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="busRegistrationId" id="busRegistrationId" aria-describedby="emailHelp">
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">Plate Number</label>
                                <span  class="form-control" name="plateNumberView" id="plateNumberView" aria-describedby="emailHelp"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">Registration Status</label>
                                <span  class="form-control" name="registrationStatusView" id="registrationStatusView" aria-describedby="emailHelp"></span></span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">Expiration Date</label>
                                <span  class="form-control" name="expirationDateView" id="expirationDateView" aria-describedby="emailHelp"></span></span>
                            </div>
                        </div>                    
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>

        <div class="modal fade" id="editBusRegistrationInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="editBusRegistrationInfoModal">Edit Bus Registration</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
                <form id="editBusRegistrationForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="editBusRegistrationId" id="editBusRegistrationId" aria-describedby="emailHelp">
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">Plate Number</label>
                                <select class="form-control" id="plateNumberEdit" name="plateNumberEdit">
                                        
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                              <label for="exampleInputEmail1">Registration Status</label>
                              <select class="form-control" id="registrationStatusEdit" name="registrationStatusEdit">
                                  <option value="Registered">Registered</option>
                                  <option value="Expired">Expired</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="expirationDateLabel" for="exampleInputPassword1">Expiration Date</label>
                                <input type="date" class="form-control expirationDate" name="expirationDateEdit" id="expirationDateEdit">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>

        <div class="modal fade" id="deleteBusRegistrationInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="deleteBusRegistrationForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="deleteBusRegistrationId" id="deleteBusRegistrationId" aria-describedby="emailHelp">
                        <p>You're deactivating this bus registration</p>
                        </span>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger delete-confirm" >Deactivate</button>
                    </div>
                </form>
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
    // DATA TABLES
    function loadtable(){
        busRegistrationDataTable = $('#busRegistrationTable').DataTable( {
            "ajax": "<?php echo base_url()?>bus_registration/show_bus_registration",
            "columns": [
                { data: "id"},
                { data: "busInformation.plateNumber"},
                { data: "registrationStatus"},
                { data: "expirationDate", render: function(data, type, row){
                  return moment(data).format('LL');
                }},
                { data: "created_at" },
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

            "aoColumnDefs": [{ "bVisible": false, "aTargets": [0, 4] }],
            "order": [[4, "desc"]]
        })
    }

    function get_bus(){
    
    $.ajax({
      url: '<?php echo base_url()?>busInformation/show_busInformation',
      type: "GET",
      dataType: "JSON",

      success: function(data){
        var busInfo = data.data;

        var html = ""

        if(busInfo.length){
            var html = `<option> -- Select Bus -- </option>`;
        }
        else{
            var html = `<option> -- No Bus -- </option>`;
        }

        for(var i=0; i < busInfo.length; i++){
          html += `<option value="${busInfo[i].id}">${busInfo[i].plateNumber}</option>`
        }
        
        $('#plateNumberInput').html(html);
        $('#plateNumberEdit').html(html);

      }
    })
  }

  $(document).ready(function(){
    var ajaxRequest, registrationStatus;
    var today = new Date();
    var value = $(this).val();
    clearTimeout(ajaxRequest);
    ajaxRequest = setTimeout(function(e) {
        $.ajax({
            url: '<?php echo base_url()?>bus_registration/show_bus_registration',
            type: "GET",
            dataType: "JSON",
            async: false,

            success: function(data){
                var busInfo = data.data;

                for(var i=0; i < busInfo.length; i++){
                    if(today >= new Date(busInfo[i].expirationDate).getTime()){
                        registrationStatus = "Expired";
                        $.ajax({
                            url: '<?php echo base_url()?>bus_registration/auto_update_expiration_date',
                            type: "POST",
                            data: { 
                                id: busInfo[i].id,
                                registrationStatus: registrationStatus
                            },
                            dataType: "JSON",
                        
                            success: function(data){
                                console.log(data);
                                var busInfo = data.data;
                                console.log('expired');
                                refresh();
                            }
                        // ajax closing tag
                        })
                    }
                    else{
                        registrationStatus = "Registered";
                        $.ajax({
                            url: '<?php echo base_url()?>bus_registration/auto_update_expiration_date',
                            type: "POST",
                            data: { 
                                id: busInfo[i].id,
                                registrationStatus: registrationStatus
                            },
                            dataType: "JSON",
                        
                            success: function(data){
                                console.log(data);
                                var busInfo = data.data;
                                console.log('not expired');
                                refresh();
                            }
                        // ajax closing tag
                        })
                    }
                }
            }
        });
    }, 1000, value);
});

    get_bus();
    loadtable();
    
    function refresh(){
        var url = "<?php echo base_url()?>bus_registration/show_bus_registration/";

        busRegistrationDataTable.ajax.url(url).load();
    }


    // CREATE BUS REGISTRATION
    $('#addBusRegistrationForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#addBusRegistrationForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>bus_registration/add_bus_registration/',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();
                showNotification('create', 'Successfully added a new bus registration!', 'success', 'top', 'right');
                $("#addBusRegistrationForm").trigger("reset");
                // End of Confirmation

                
            }
        // ajax closing tag
        })
    });

    // VIEW BUS REGISTRATION
    $(document).on("click", ".btn_view", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>bus_registration/get_one_bus_registration/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var busInfo = data.data;

                $('#busRegistrationId').html(id);
                $('#plateNumberView').html(busInfo.busInformation.plateNumber);
                $('#registrationStatusView').html(busInfo.registrationStatus);
                $('#expirationDateView').html(moment(busInfo.expirationDate).format('LL'));

                $('#busRegistrationInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    // EDIT BUS REGISTRATION
    $(document).on("click", ".btn_edit", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>bus_registration/get_one_bus_registration/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var busInfo = data.data;

                $('#editBusRegistrationId').val(id);
                $('#plateNumberEdit').val(busInfo.informationId);
                $('#registrationStatusEdit').val(busInfo.registrationStatus);
                $('#expirationDateEdit').val(moment(busInfo.expirationDate).format('YYYY-MM-DD'));

                $('#editBusRegistrationInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $('#editBusRegistrationForm').on('submit', function(e){
        e.preventDefault();

        console.log('working');

        var form = $('#editBusRegistrationForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>bus_registration/edit_bus_registration/',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();
                showNotification('update', 'Successfully update a bus registration!', 'warning', 'top', 'right');
                $('#editBusRegistrationInfoModal').modal('hide');
            }
        // ajax closing tag
        })
    });

    // DELETE BUS REGISTRATION
    $(document).on("click", ".btn_delete", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>bus_registration/get_one_bus_registration',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var deleteBusInfo = data.data;

                $('#deleteBusRegistrationId').val(id);

                $('#deleteBusRegistrationInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $('.delete-confirm').on('click', function(e){
        e.preventDefault();

        $('#deleteBusRegistrationInfoModal').modal('show');

        console.log('working');

        var form = $('#deleteBusRegistrationForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>bus_registration/delete_bus_registration',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();

                showNotification('delete', 'Deleted a bus registration!', 'danger', 'top', 'right');
                $('#deleteBusRegistrationInfoModal').modal('hide');
            }
        // ajax closing tag
        })
    });
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>