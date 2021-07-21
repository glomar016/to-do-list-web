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
#typeInput{
    margin-top: 0px;
}
#busDriverFormView,
#editBusDriverForm{
    margin-top: -15px;
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
                      Add Bus Person
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <div class="card-body">
                  <form id="addBusDriverForm">
                          <div class="form-row">
                              <div class="form-group col-sm-6">
                              <label for="exampleInputEmail1">Bus Number</label>
                              <select class="form-control" id="busNumberInput" name="busNumberInput">
                                  
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                              <label for="exampleInputEmail1">Name</label>
                              <select class="form-control" id="nameInput" name="nameInput">
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="expirationDateLabel" for="exampleInputPassword1">Type</label>
                                <select class="form-control" id="typeInput" name="typeInput">
                                    <option value="Driver">Driver</option>
                                    <option value="Conductor">Conductor</option>
                                </select>
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
                <table id="busDriverTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Type</th>
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

        <div class="modal fade" id="busDriverInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="busDriverInfoModal">View Bus Driver</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
                <form id="busDriverFormView">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="busDriverId" id="busDriverId" aria-describedby="emailHelp">
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">Bus Number</label>
                                <span  class="form-control" name="busNumberView" id="busNumberView" aria-describedby="emailHelp"></span>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">Name</label>
                                <span  class="form-control" name="nameView" id="nameView" aria-describedby="emailHelp"></span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">Type</label>
                                <span  class="form-control" name="typeView" id="typeView" aria-describedby="emailHelp"></span>
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

        <div class="modal fade" id="editBusDriverInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="editBusDriverInfoModal">Edit Bus Driver</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
                <form id="editBusDriverForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="editBusDriverId" id="editBusDriverId" aria-describedby="emailHelp">
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="exampleInputEmail1">Bus Number</label>
                                <select class="form-control" id="busNumberEdit" name="busNumberEdit">
                                        
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                              <label for="exampleInputEmail1">Name</label>
                              <select class="form-control" disabled="disabled" id="nameEdit" name="nameEdit">
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="expirationDateLabel" for="exampleInputPassword1">Type</label>
                                <select class="form-control" id="typeEdit" name="typeEdit">
                                    <option value="Driver">Driver</option>
                                    <option value="Conductor">Conductor</option>
                                </select>
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

        <div class="modal fade" id="deleteBusDriverInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="deleteBusDriverForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="deleteBusDriverId" id="deleteBusDriverId" aria-describedby="emailHelp">
                        <p>You're deactivating this bus driver</p>
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
        busDriverDataTable = $('#busDriverTable').DataTable( {
            "ajax": "<?php echo base_url()?>bus_driver/show_bus_driver",
            "columns": [
                { data: "id"},
                { data: null, render: function (data, type, row) {
                    var name = row.busDriver.firstName + " " + row.busDriver.lastName;
                    return name;
                }},
                { data: "type"},
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

            "aoColumnDefs": [{ "bVisible": false, "aTargets": [0, 3] }],
            "order": [[3, "desc"]]
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
            var html = `<option> -- Select a Bus -- </option>`;
        }
        else{
            var html = `<option> -- No Bus -- </option>`;
        }

        for(var i=0; i < busInfo.length; i++){
          html += `<option value="${busInfo[i].id}">${busInfo[i].number + '  |  ' + busInfo[i].plateNumber + '  |  '+ busInfo[i].busTypeId.name}</option>`
        }
        
        $('#busNumberInput').html(html);
        $('#busNumberEdit').html(html);

      }
    })
  }

  function get_name(){
    
    $.ajax({
      url: '<?php echo base_url()?>user/show_user',
      type: "GET",
      dataType: "JSON",

      success: function(data){
        var busDriverInfo = data.data;

        var html= ""

        if(busDriverInfo.length){
            var html = `<option> -- Select a Person -- </option>`;
        }
        else{
            var html = `<option> -- No available -- </option>`;
        }

        for(var i=0; i < busDriverInfo.length; i++){
          html += `<option value="${busDriverInfo[i].id}">${busDriverInfo[i].firstName + ' ' + busDriverInfo[i].lastName}</option>`
        }
        
        $('#nameInput').html(html);
        $('#nameEdit').html(html);

      }
    })
  }

    get_bus();
    get_name();
    loadtable();
    
    function refresh(){
        var url = "<?php echo base_url()?>bus_driver/show_bus_driver/";

        busDriverDataTable.ajax.url(url).load();
    }


    // CREATE BUS REGISTRATION
    $('#addBusDriverForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#addBusDriverForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>bus_driver/show_bus_driver',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                var busDriverCheck;
                var nameInput = document.getElementById("nameInput").value;
                var busDriverId = data.data
                console.log(busDriverId.length);
                if(busDriverId.length){
                    for(var i=0; i < busDriverId.length; i++){
                        console.log(busDriverId[i].id);
                        console.log(nameInput);
                        if(busDriverId[i].driverUserId == nameInput){
                            showNotification('error', 'Sorry, this person has already been assigned!', 'danger', 'top', 'right');
                            busDriverCheck = 1;
                        }
                    }
                    async function processArray(array) {
                        // map array to promises
                        const promises = array.map(delayedLog);
                        // wait until all promises are resolved
                        await Promise.all(promises);
                    }
                    if(busDriverCheck != 1){
                        $.ajax({
                            url: '<?php echo base_url()?>bus_driver/add_bus_driver',
                            type: "POST",
                            data: form.serialize(),
                            dataType: "JSON",
                        
                            success: function(data){
                                refresh();
                                showNotification('create', 'Successfully added a new bus driver!', 'success', 'top', 'right');
                                $("#addBusDriverForm").trigger("reset");
                                // End of Confirmation               
                            }
                        // ajax closing tag
                        })
                    }
                }
                else{
                    $.ajax({
                        url: '<?php echo base_url()?>bus_driver/add_bus_driver',
                        type: "POST",
                        data: form.serialize(),
                        dataType: "JSON",
                    
                        success: function(data){
                            refresh();
                            showNotification('create', 'Successfully added a new bus driver!', 'success', 'top', 'right');
                            $("#addBusDriverForm").trigger("reset");
                            // End of Confirmation        
                        }
                    // ajax closing tag
                    })
                }
                
            }
        // ajax closing tag
        })
    });

    // VIEW BUS REGISTRATION
    $(document).on("click", ".btn_view", function(){
        var id = this.value;
        $('#busDriverInfoModal').modal('show');
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>bus_driver/viewBusDriver',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var busDriverInfo = data.data;

                $('#busDriverId').val(id);
                $('#nameView').html(busDriverInfo.busDriver.firstName + ' ' + busDriverInfo.busDriver.lastName);
                $('#typeView').html(busDriverInfo.type);

                $.ajax({
                    url: '<?php echo base_url()?>busInformation/viewBusInformation',
                    type: "POST",
                    data: { id: busDriverInfo.busInformationId},
                    dataType: "JSON",
                
                    success: function(data){
                        console.log(data);
                        var busInfo = data.data;

                        $('#busNumberView').html(busInfo.number + '  |  ' + busInfo.plateNumber + '  |  '+ busInfo.busTypeId.name);

                    }
                // ajax closing tag
                })
            }
        // ajax closing tag
        })
    });

    // EDIT BUS REGISTRATION
    $(document).on("click", ".btn_edit", function(){
        var id = this.value;
        $('#editBusDriverInfoModal').modal('show');
        $(this).parents().find("#nameEdit").prop("disabled", true);

        $.ajax({
            url: '<?php echo base_url()?>bus_driver/viewBusDriver',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                var busDriverInfo = data.data;

                console.log(busDriverInfo.busDriver.firstName);

                $('#editBusDriverId').val(busDriverInfo.id);
                $('#nameEdit').val(busDriverInfo.busDriver.id);
                $('#typeEdit').val(busDriverInfo.type);

                $.ajax({
                    url: '<?php echo base_url()?>busInformation/viewBusInformation',
                    type: "POST",
                    data: { id: busDriverInfo.busInformationId},
                    dataType: "JSON",
                
                    success: function(data){
                        var busInfo = data.data;

                        $('#busNumberEdit').val(busInfo.id);
                    }
                // ajax closing tag
                })
            }
        // ajax closing tag
        })
    });

    $('#editBusDriverForm').on('submit', function(e){
        e.preventDefault();

        $(this).find('#nameEdit').prop('disabled', false);

        var form = $('#editBusDriverForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>bus_driver/edit_bus_driver/',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();
                showNotification('update', 'Successfully updated a bus driver!', 'warning', 'top', 'right');
                $('#editBusDriverInfoModal').modal('hide');
            }
        // ajax closing tag
        })
    });

    // DELETE BUS REGISTRATION
    $(document).on("click", ".btn_delete", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>bus_driver/get_bus_driver',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var deleteBusDriverInfo = data.data;

                $('#deleteBusDriverId').val(id);

                $('#deleteBusDriverInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $('.delete-confirm').on('click', function(e){
        e.preventDefault();

        $('#deleteBusDriverInfoModal').modal('show');

        console.log('working');

        var form = $('#deleteBusDriverForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>bus_driver/delete_bus_driver',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();

                showNotification('delete', 'Deleted a bus driver!', 'danger', 'top', 'right');
                $('#deleteBusDriverInfoModal').modal('hide');
            }
        // ajax closing tag
        })
    });
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>