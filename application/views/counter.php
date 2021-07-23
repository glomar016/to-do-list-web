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

<style>
#counterInfoModal form,
#editCounterInfoModal form{
    margin-top: -15px;
}
#addCounterForm .form-row{
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
                      Add Counter
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <div class="card-body">
                  <form id="addCounterForm">
                        <div class="form-row">
                            <div class="form-group col-sm-12">
                            <input hidden type="text" value="<?php echo($this->session->userdata['logged_in']['userId'])?>" class="form-control" id="userId" name="userId">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Counter Name</label>
                            <input type="text" class="form-control" id="counterName" name="counterName">
                        </div>
                          </div>
                          
                          <!-- <div class="form-row">
                              <div class="form-group col-sm-10">
                              <label for="exampleInputEmail1">Description</label>
                              <textarea style="margin-top: 10px;" rows="2" cols="50" class="form-control" name="busTypeDescription"  id="busTypeDescription"></textarea>
                        </div> -->
                          </div>
                      
                          <input type="submit" class="btn btn-primary">
                      </form>
                  </div>
                  </div>
              </div>
          </div>
            <div class="card">
            <h4 class="card-header card-header-info">List of Counter</h4>
              <div class="card-body">
                <table id="counterTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Counter Name</th>
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

        <div class="modal fade" id="counterInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="counterInfoModal">Counter Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
                <form id="CounterForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="CounterId" id="CounterId" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Counter Name</label>
                        <span  class="form-control" name="CounterName" id="CounterName" aria-describedby="emailHelp"></span>
                
                        
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>

    <!-- EDIT MODAL -->

        <div class="modal fade" id="editCounterInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="editCounterInfoModal">Edit Counter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
                <form id="editCounterForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="editCounterId" id="editCounterId" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Counter</label>
                        <input type="text" class="form-control" name="editCounterName" id="editCounterName" aria-describedby="emailHelp">
                        
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

        <div class="modal fade" id="deleteCounterInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="deleteCounterForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="deleteCounterId" id="deleteCounterId" aria-describedby="emailHelp">
                        <p>You're deactivating this Counter</p>
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
        counterDataTable = $('#counterTable').DataTable( {
            "ajax": "<?php echo base_url()?>counter/show_counter",
            "columns": [
                { data: "id"},
                { data: "name"},
                { data: "created_at", render: function(data, type, row){
                    return moment (data).format("LL");
                        }
                },
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

            "aoColumnDefs": [{ "bVisible": false, "aTargets": [0] }],
            "order": [[3, "desc"]]
        })
    }

    loadtable();
    
    function refresh(){
        var url = "<?php echo base_url()?>counter/show_counter/";

        counterDataTable.ajax.url(url).load();
    }


    // CREATE BUS TYPE
    $('#addCounterForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#addCounterForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>counter/add_counter/',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();
                showNotification('create', 'Successfully added a new counter!', 'success', 'top', 'right');
                $("#addCounterForm").trigger("reset");
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
            url: '<?php echo base_url()?>counter/get_one_counter/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var counterInfo = data.data;

                $('#CounterId').html(id);
                $('#CounterName').html(counterInfo.name);
        

                $('#counterInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $(document).on("click", ".btn_edit", function(){
        var id = this.value;
         console.log(id);

         $.ajax({
             url: '<?php echo base_url()?>counter/get_one_counter/',
             type: "POST",
             data: { id: id },
             dataType: "JSON",
        
             success: function(data){
                 console.log(data);
                 var CounterInfo = data.data;

                 $('#editCounterId').val(id);
                 $('#editCounterName').val(CounterInfo.name);
                 $('#editCounterDescription').val(CounterInfo.description);

                 $('#editCounterInfoModal').modal('show');
             }
         // ajax closing tag
         })
     });

    $('#editCounterForm').on('submit', function(e){
         e.preventDefault();

         console.log('working');

         var form = $('#editCounterForm'); 

    // ajax opening tag
        $.ajax({
             url: '<?php echo base_url()?>counter/edit_counter/',
             type: "POST",
             data: form.serialize(),
             dataType: "JSON",
        
             success: function(data){
                 refresh();
                 showNotification('update', 'Successfully update a Counter!', 'warning', 'top', 'right');
                 $('#editCounterInfoModal').modal('hide');
             }
         // ajax closing tag
         })
     });

     // DELETE Counter
     $(document).on("click", ".btn_delete", function(){
         var id = this.value;
         // console.log(id);

         $.ajax({
             url: '<?php echo base_url()?>counter/get_one_counter/',
             type: "POST",
             data: { id: id },
             dataType: "JSON",
        
            success: function(data){
                 console.log(data);
                 var deleteCounterInfo = data.data;

                 $('#deleteCounterId').val(id);

                 $('#deleteCounterInfoModal').modal('show');
             }
         // ajax closing tag
         })
     });

     $('.delete-confirm').on('click', function(e){
         e.preventDefault();

         $('#deleteCounterInfoModal').modal('show');

         console.log('working');

         var form = $('#deleteCounterForm'); 

         // ajax opening tag
         $.ajax({
             url: '<?php echo base_url()?>counter/delete_counter',
             type: "POST",
             data: form.serialize(),
             dataType: "JSON",
        
             success: function(data){
                 refresh();

                 showNotification('delete', 'Deleted a Counter!', 'danger', 'top', 'right');
                 $('#deleteCounterInfoModal').modal('hide');
             }
         // ajax closing tag
         })
     });
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>