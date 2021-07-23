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
      <div class="content" style="padding-top: 0px;">
        <div class="container-fluid">
          <div class="row">
            <!-- END OF OPENING TAG OF CONTENT -->
            <div class="card">
              <h5 class="card-header">
                  <a class="collapsed d-block" data-toggle="collapse" href="#collapse-collapsed" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                      <i class="fa fa-chevron-down pull-right"></i>
                      Add Terminal
                  </a>
              </h5>

            <!-- CREATE CARD -->
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <div class="card-body">
                    <form id="addTerminalForm" name="addTerminalForm">
                        <div class="form-row">
                            <div class="form-group col-sm-12">
                            <input hidden type="text" value="<?php echo($this->session->userdata['logged_in']['userId'])?>" class="form-control" id="userId" name="userId">
                            </div>
                        </div>
                        <div class="form-group col-sm12">
                            <div class="form-row">
                                <label for="exampleInputEmail1">Terminal</label>
                                <input type="text" class="form-control" name="terminalName" id="terminalName" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <label for="exampleInputEmail1">Address</label>
                                <input type="text" class="form-control" name="terminalAddress"  id="terminalAddress" aria-describedby="emailHelp">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" name="terminalEmail"  id="terminalEmail" aria-describedby="emailHelp">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="exampleInputEmail1">Contact Person</label>
                                    <input type="text" class="form-control" name="terminalContactPerson"  id="terminalContactPerson" aria-describedby="emailHelp">
                                </div>
                        </div>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
     </div></div>

     <!-- TABLE -->
            <div class="card">
            <h4 class="card-header card-header-info">List of Terminals</h4>
              <div class="card-body">
                <table id="terminalDataTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Terminal</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Contact Person</th>
                            <th>Date Created</th>
                            <th width="10%">Actions</th>
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

      <div id="terminalInfoModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terminal Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="TerminalForm">
                    <div class="modal-body">
                        <input disabled hidden type="text" class="form-control" name="TerminalId" id="TerminalId" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Terminal</label>
                        <input disabled type="text" class="form-control" name="TerminalName" id="TerminalName" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Address</label>
                        <input disabled type="text" class="form-control" name="TerminalAddress" id="TerminalAddress" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Email</label>
                        <input disabled type="email" class="form-control" name="TerminalEmail" id="TerminalEmail" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Contact Person</label>
                        <input disabled type="email" class="form-control" name="TerminalContactPerson" id="TerminalContactPerson" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Status</label>
                        <input disabled type="email" class="form-control" name="TerminalStatus" id="TerminalStatus" aria-describedby="emailHelp">
                    </div>
                </form>
                </div>
            </div>
        </div>

        <div id="editTerminalInfoModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terminal Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editTerminalForm">
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                        <input hidden type="text" value="<?php echo($this->session->userdata['logged_in']['userId'])?>" class="form-control" id="editUserId" name="editUserId">
                        </div>
                    </div>
                    <div class="modal-body">
                        <input hidden type="text" class="form-control" name="editTerminalId" id="editTerminalId" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Terminal</label>
                        <input type="text" class="form-control" name="editTerminalName" id="editTerminalName" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" name="editTerminalAddress" id="editTerminalAddress" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="editTerminalEmail" id="editTerminalEmail" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Contact Person</label>
                        <input type="text" class="form-control" name="editTerminalContactPerson" id="editTerminalContactPerson" aria-describedby="emailHelp">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
                </div>
            </div>
        </div>

        <div id="deleteTerminalInfoModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Terminal Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="deleteTerminalForm">
                    <div class="modal-body">
                        <input hidden type="text" class="form-control" name="deleteTerminalId" id="deleteTerminalId" aria-describedby="emailHelp">
                        <p>Are you sure you want to delete this?</p>
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
        terminalDataTable = $('#terminalDataTable').DataTable( {
            "ajax": "<?php echo base_url()?>terminal/show_terminal",
            "columns": [
                { data: "id"},
                { data: "name"},
                { data: "address"},
                { data: "email"},
                { data: "contactPersonUserId" },
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

            "aoColumnDefs": [{ "bVisible": false, "aTargets": [0, 5] }],
            "order": [[5, "desc"]]
        })
    }

    loadtable();
    
    function refresh(){
        var url = "<?php echo base_url()?>terminal/show_terminal";

        terminalDataTable.ajax.url(url).load();
    }

    // CREATE TERMINAL
    $('#addTerminalForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#addTerminalForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>terminal/add_terminal',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();
                showNotification('create', 'Successfully added a new terminal!', 'success', 'top', 'right');
                $("#addTerminalForm").trigger("reset");
                // End of Confirmation

                
            }
        // ajax closing tag
        })
    });

    // VIEW TERMINAL
    $(document).on("click", ".btn_view", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>terminal/get_one_terminal',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var terminalInfo = data.data;

                $('#TerminalId').val(id);
                $('#TerminalName').val(terminalInfo.name);
                $('#TerminalAddress').val(terminalInfo.address);
                $('#TerminalEmail').val(terminalInfo.email);
                $('#TerminalEmail').val(terminalInfo.email);
                $('#TerminalStatus').val(terminalInfo.status);

                $('#terminalInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    // EDIT TERMINAL
    $(document).on("click", ".btn_edit", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>terminal/get_one_terminal',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var terminalInfo = data.data;

                $('#editTerminalId').val(id);
                $('#editTerminalName').val(terminalInfo.name);
                $('#editTerminalAddress').val(terminalInfo.address);
                $('#editTerminalEmail').val(terminalInfo.email);

                $('#editTerminalInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $('#editTerminalForm').on('submit', function(e){
        e.preventDefault();

        console.log('working');

        var form = $('#editTerminalForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>terminal/edit_terminal',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();
                showNotification('update', 'Successfully update a terminal!', 'warning', 'top', 'right');
                $('#editTerminalInfoModal').modal('hide');
            
            }
        // ajax closing tag
        })
    });

    // DELETE TERMINAL
    $(document).on("click", ".btn_delete", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>terminal/get_one_terminal',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var deleteTerminalInfo = data.data;

                $('#deleteTerminalId').val(id);
                $('#deleteTerminalName').val(deleteTerminalInfo.name);
                $('#deleteTerminalEmail').val(deleteTerminalInfo.email);
                $('#deleteTerminalAddress').val(deleteTerminalInfo.address);

                $('#deleteTerminalInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });
    
    $('#deleteTerminalForm').on('submit', function(e){
        e.preventDefault();

        $('#deleteTerminalInfoModal').modal('show');

        console.log('working');

        var form = $('#deleteTerminalForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>terminal/delete_terminal',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();
                showNotification('delete', 'Deleted a terminal!', 'danger', 'top', 'right');
                $('#deleteTerminalInfoModal').modal('hide');
            
            }
        // ajax closing tag
        })
    });
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>
