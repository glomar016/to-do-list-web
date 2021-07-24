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
#ChartofAccountInfoModal form,
#editChartofAccountInfoModal form{
    margin-top: -15px;
}
#addChartofAccountForm .form-row{
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
                      Add Chart of Account
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <div class="card-body">
                  <form id="addChartofAccountForm">
                        <div class="form-row">
                            <div class="form-group col-sm-12">
                            <input hidden type="text" value="<?php echo($this->session->userdata['logged_in']['userId'])?>" class="form-control" id="userId" name="userId">
                            </div>
                        </div>
                          <div class="form-row">
                              <div class="form-group col-sm-6">
                              <label for="exampleInputEmail1">Chart of Account Name</label>
                              <input required type="text" class="form-control" id="ChartofAccountName" name="ChartofAccountName">
                        </div>
                          </div>
                          
                          <!-- <div class="form-row">
                              <div class="form-group col-sm-10">
                              <label for="exampleInputEmail1">Description</label>
                              <textarea style="margin-top: 10px;" rows="2" cols="50" class="form-control" name="busTypeDescription"  id="busTypeDescription"></textarea>
                        </div> -->
                          </div>
                      <div class="float-right">
                          <input type="submit" class="btn btn-primary">

                      </div>
                      </form>
                  </div>
                  </div>
              </div>
          </div>
            <div class="card">
            <h4 class="card-header card-header-info">List of Accounts</h4>
              <div class="card-body">
                <table id="ChartofaccountTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Chart of Account Name</th>
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

        <div class="modal fade" id="ChartofAccountInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="ChartofAccountInfoModal">Chart of Account Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
                <form id="ChartofAccountForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="ChartofAccountIdview" id="ChartofAccountIdview" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Chart of Account Name</label>
                        <span  class="form-control" name="ChartofAccountNameview" id="ChartofAccountNameview" aria-describedby="emailHelp"></span>
                
                        
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>

    <!-- EDIT MODAL -->

        <div class="modal fade" id="editChartofAccountInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="editChartofAccountInfoModal">Edit Chart of Account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
                <form id="editChartofAccountForm">
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                        <input hidden type="text" value="<?php echo($this->session->userdata['logged_in']['userId'])?>" class="form-control" id="editUserId" name="editUserId">
                        </div>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="editChartofAccountId" id="editChartofAccountId" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Chart of Account</label>
                        <input required type="text" class="form-control" name="editChartofAccountName" id="editChartofAccountName" aria-describedby="emailHelp">
                        
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

        <div class="modal fade" id="deleteChartofAccountInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="deleteChartofAccountForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="deleteChartofAccountId" id="deleteChartofAccountId" aria-describedby="emailHelp">
                        <p>You're deactivating this Chart of Account</p>
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
        console.log('test')
        ChartofAccountDataTable = $('#ChartofaccountTable').DataTable( {
            "ajax": "<?php echo base_url()?>ChartofAccount/show_ChartofAccount",
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
            "order": [[0, "desc"]]
        })
    }

    loadtable();
    
    function refresh(){
        var url = "<?php echo base_url()?>ChartofAccount/show_ChartofAccount/";

        ChartofAccountDataTable.ajax.url(url).load();
    }


    // CREATE BUS TYPE
    $('#addChartofAccountForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#addChartofAccountForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>ChartofAccount/add_ChartofAccount/',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();
                showNotification('create', 'Successfully added a new ChartofAccount!', 'success', 'top', 'right');
                $("#addChartofAccountForm").trigger("reset");
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
            url: '<?php echo base_url()?>ChartofAccount/get_one_ChartofAccount/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var ChartofAccountInfo = data.data;

                $('#ChartofAccountIdview').html(id);
                $('#ChartofAccountNameview').html(ChartofAccountInfo.name);
        

                $('#ChartofAccountInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $(document).on("click", ".btn_edit", function(){
        var id = this.value;
         console.log(id);

         $.ajax({
             url: '<?php echo base_url()?>ChartofAccount/get_one_ChartofAccount/',
             type: "POST",
             data: { id: id },
             dataType: "JSON",
        
             success: function(data){
                 console.log(data);
                 var ChartofAccountInfo = data.data;

                 $('#editChartofAccountId').val(id);
                 $('#editChartofAccountName').val(ChartofAccountInfo.name);

                 $('#editChartofAccountInfoModal').modal('show');
             }
         // ajax closing tag
         })
     });

    $('#editChartofAccountForm').on('submit', function(e){
         e.preventDefault();

         console.log('working');

         var form = $('#editChartofAccountForm'); 

    // ajax opening tag
        $.ajax({
             url: '<?php echo base_url()?>ChartofAccount/edit_ChartofAccount/',
             type: "POST",
             data: form.serialize(),
             dataType: "JSON",
        
             success: function(data){
                 refresh();
                 showNotification('update', 'Successfully update a ChartofAccount!', 'warning', 'top', 'right');
                 $('#editChartofAccountInfoModal').modal('hide');
             }
         // ajax closing tag
         })
     });

     // DELETE ChartofAccount
     $(document).on("click", ".btn_delete", function(){
         var id = this.value;
         // console.log(id);

         $.ajax({
             url: '<?php echo base_url()?>ChartofAccount/get_one_ChartofAccount/',
             type: "POST",
             data: { id: id },
             dataType: "JSON",
        
            success: function(data){
                 console.log(data);
                 var deleteChartofAccountInfo = data.data;

                 $('#deleteChartofAccountId').val(id);

                 $('#deleteChartofAccountInfoModal').modal('show');
             }
         // ajax closing tag
         })
     });

     $('.delete-confirm').on('click', function(e){
         e.preventDefault();

         $('#deleteChartofAccountInfoModal').modal('show');

         console.log('working');

         var form = $('#deleteChartofAccountForm'); 

         // ajax opening tag
         $.ajax({
             url: '<?php echo base_url()?>ChartofAccount/delete_ChartofAccount',
             type: "POST",
             data: form.serialize(),
             dataType: "JSON",
        
             success: function(data){
                 refresh();

                 showNotification('delete', 'Deleted a ChartofAccount!', 'danger', 'top', 'right');
                 $('#deleteChartofAccountInfoModal').modal('hide');
             }
         // ajax closing tag
         })
     });
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>