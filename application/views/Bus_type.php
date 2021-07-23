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
#busTypeInfoModal form,
#editBusTypeInfoModal form{
    margin-top: -15px;
}
#addBusTypeForm .form-row{
    margin-top: 10px;
}
textarea::-webkit-scrollbar{
    width: 0 !important
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
                      Add Bus Type
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <div class="card-body">
                  <form id="addBusTypeForm">
                          <div class="form-row">
                              <div class="form-group col-sm-6">
                              <label for="exampleInputEmail1">Bus Type</label>
                              <input type="text" class="form-control" id="busTypeName" name="busTypeName">
                        </div>
                          </div>
                          
                          <div class="form-row">
                              <div class="form-group col-sm-10">
                              <label for="exampleInputEmail1">Description</label>
                              <textarea style="margin-top: 10px;" rows="2" cols="50" class="form-control" name="busTypeDescription"  id="busTypeDescription"></textarea>
                        </div>
                          </div>
                      
                          <input type="submit" class="btn btn-primary">
                      </form>
                  </div>
                  </div>
              </div>
          </div>
            <div class="card">
            <h4 class="card-header card-header-info">List of Bus Types</h4>
              <div class="card-body">
                <table id="busTypeTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Bus Type</th>
                            <th>Description</th>
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

        <div class="modal fade" id="busTypeInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="busTypeInfoModal">View Bus Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
                <form id="BusTypeForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="BusTypeId" id="BusTypeId" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Bus Type</label>
                        <span  class="form-control" name="BusTypeName" id="BusTypeName" aria-describedby="emailHelp"></span>
                        <label for="exampleInputEmail1">Description</label>
                        <span  class="form-control" name="BusTypeDescription" id="BusTypeDescription" aria-describedby="emailHelp"></span>
                        <!-- <label for="exampleInputEmail1">Status</label>
                        <span  class="form-control" name="BusTypeStatus" id="BusTypeStatus" aria-describedby="emailHelp"></span> -->
                        </span>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>

        <div class="modal fade" id="editBusTypeInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="editBusTypeInfoModal">Edit Bus Type</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
                <form id="editBusTypeForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="editBusTypeId" id="editBusTypeId" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Bus Type</label>
                        <input type="text" class="form-control" name="editBusTypeName" id="editBusTypeName" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Description</label>
                        <textarea rows="2" cols="50" class="form-control" name="editBusTypeDescription" id="editBusTypeDescription" aria-describedby="emailHelp"></textarea>
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

        <div class="modal fade" id="deleteBusTypeInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="deleteBusTypeForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="deleteBusTypeId" id="deleteBusTypeId" aria-describedby="emailHelp">
                        <p>You're deactivating this bus type</p>
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

                $('#editBusTypeId').val(id);
                $('#editBusTypeName').val(busTypeInfo.name);
                $('#editBusTypeDescription').val(busTypeInfo.description);

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

                $('#deleteBusTypeId').val(id);

                $('#deleteBusTypeInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $('.delete-confirm').on('click', function(e){
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