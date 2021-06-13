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
                      Create Bus Type
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <div class="card-body">
                  <form id="addBusTypeForm">
                          <div class="form-row">
                              <div class="form-group col-sm-12">
                              <label for="exampleInputEmail1">Bus Type</label>
                              <input type="text" class="form-control" id="busTypeName" name="busTypeName">
                        </div>

                          </div>
                          <div class="form-row">
                              <div class="form-group col-sm-6">

                              <label for="exampleInputEmail1">Description</label>
                              <textarea type="text" class="form-control" name="busTypeDescription"  id="busTypeDescription">
                              </textarea>
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
                <table id="busTypeTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Bus Type</th>
                            <th>Description</th>
                            <th>Date Created</th>
                            <th>Actions</th>
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

      <div id="busTypeInfoModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bus Type Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="BusTypeForm">
                    <div class="modal-body">
                        <span  class="form-control" name="BusTypeId" id="BusTypeId" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Bus Type</label>
                        <span  class="form-control" name="BusTypeName" id="BusTypeName" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Description</label>
                        <span  class="form-control" name="BusTypeDescription" id="BusTypeDescription" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Status</label>
                        <span  class="form-control" name="BusTypeStatus" id="BusTypeStatus" aria-describedby="emailHelp">
                        </span>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <div id="editBusTypeInfoModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bus Type Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;
                    </span>
                    </button>
                </div>
                <form id="editBusTypeForm">
                    <div class="modal-body">
                        <span hidden type="text" class="form-control" name="editBusTypeId" id="editBusTypeId" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Bus Type</label>
                        <span type="text" class="form-control" name="editBusTypeName" id="editBusTypeName" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Description</label>
                        <span type="text" class="form-control" name="editBusTypeDescription" id="editBusTypeDescription" aria-describedby="emailHelp">
                    </div>
                    <div class="modal-footer">
                        <span type="submit" class="btn btn-success">
                        </span>
                    </div>
                </form>
                </div>
            </div>
        </div>

        <div id="deleteBusTypeInfoModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Bus Type Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;
                    </span>
                    </button>
                </div>
                <form id="deleteBusTypeForm">
                    <div class="modal-body">
                        <span hidden type="text" class="form-control" name="deleteBusTypeId" id="deleteBusTypeId" aria-describedby="emailHelp">
                        <p>Are you sure you want to delete this?</p>
                        </span>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger">Yes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    </div>
                </form>
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
        busTypeDataTable = $('#busTypeTable').DataTable( {
            "ajax": "<?php echo base_url()?>bus_type/show_bus_type",
            "columns": [
                { data: "id"},
                { data: "name"},
                { data: "description"},
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

    loadtable();
    
    function refresh(){
        var url = "<?php echo base_url()?>bus_type/show_bus_type/";

        busTypeDataTable.ajax.url(url).load();
    }


    // CREATE BUS TYPE
    $('#addBusTypeForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#addBusTypeForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>bus_type/add_bus_type/',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();
                showNotification('create', 'Successfully added a new bus type!', 'success', 'top', 'right');
                $("#addBusTypeForm").trigger("reset");
                // End of Confirmation

                
            }
        // ajax closing tag
        })
    });

    // VIEW BUS TYPE
    $(document).on("click", ".btn_view", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>bus_type/get_one_bus_type/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var busTypeInfo = data.data;

                $('#BusTypeId').html(id);
                $('#BusTypeName').html(busTypeInfo.name);
                $('#BusTypeDescription').html(busTypeInfo.description);
                $('#BusTypeStatus').html(busTypeInfo.status);

                $('#busTypeInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    // EDIT BUS TYPE 
    $(document).on("click", ".btn_edit", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>bus_type/get_one_bus_type/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var busTypeInfo = data.data;

                $('#editBusTypeId').html(id);
                $('#editBusTypeName').html(busTypeInfo.name);
                $('#editBusTypeDescription').html(busTypeInfo.description);

                $('#editBusTypeInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $('#editBusTypeForm').on('submit', function(e){
        e.preventDefault();

        console.log('working');

        var form = $('#editBusTypeForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>bus_type/edit_bus_type/',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();
                showNotification('update', 'Successfully update a bus type!', 'warning', 'top', 'right');
                $('#editBusTypeInfoModal').modal('hide');
            }
        // ajax closing tag
        })
    });

    // DELETE BUS TYPE
    $(document).on("click", ".btn_delete", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>bus_type/get_one_bus_type/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var deleteBusTypeInfo = data.data;

                $('#deleteBusTypeId').html(id);
                $('#deleteBusTypeName').html(deleteBusTypeInfo.name);
                $('#deleteBusTypeDescription').html(deleteBusTypeInfo.description);

                $('#deleteBusTypeInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $('#deleteBusTypeForm').on('submit', function(e){
        e.preventDefault();

        $('#deleteBusTypeInfoModal').modal('show');

        console.log('working');

        var form = $('#deleteBusTypeForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>bus_type/delete_bus_type',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();

                showNotification('delete', 'Deleted a bus type!', 'danger', 'top', 'right');
                $('#deleteBusTypeInfoModal').modal('hide');
            }
        // ajax closing tag
        })
    });
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>