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

            <div class="card card-nav-tabs" style="width: 100rem;">
                <div class="card-header card-header-danger">
                    Create Terminal 
                </div>
                <div class="card-body">
                    <form id="addTerminalForm" name="addTerminalForm">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Terminal</label>
                            <input type="text" class="form-control" name="terminalName" id="terminalName" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <input type="text" class="form-control" name="terminalAddress"  id="terminalAddress" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" name="terminalEmail"  id="terminalEmail" aria-describedby="emailHelp">
                        </div>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <div class="card">
              <div class="card-body">
                <table id="terminalDataTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Terminal</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Contact Person</th>
                            <th>Actions</th>
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
                    <div class="modal-body">
                        <input hidden type="text" class="form-control" name="editTerminalId" id="editTerminalId" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Terminal</label>
                        <input type="text" class="form-control" name="editTerminalName" id="editTerminalName" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control" name="editTerminalAddress" id="editTerminalAddress" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="editTerminalEmail" id="editTerminalEmail" aria-describedby="emailHelp">
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
                        <label for="exampleInputEmail1">Terminal</label>
                        <input disabled type="text" class="form-control" name="deleteTerminalName" id="deleteTerminalName" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Address</label>
                        <input disabled type="text" class="form-control" name="deleteTerminalAddress" id="deleteTerminalAddress" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Email</label>
                        <input disabled type="email" class="form-control" name="deleteTerminalEmail" id="deleteTerminalEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-danger">
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
    function datatable(){
        terminalDataTable = $('#terminalDataTable').DataTable( {
            "ajax": "<?php echo base_url()?>terminal/terminalDataTable",
            "columns": [
                { data: "id"},
                { data: "firstName", render: function(data, type, row){
                        return `${row.firstName} ${row.lastName}`
                    }
                },
                { data: "lastName"},
                { data: "email"},
                { data: "created_at" },
                { data: "status", render: function(data, type, row){
                        if(data == "Active"){
                            return '<div class="btn-group">'+
                                    '<button class="btn btn-primary btn-sm btn_view" value="'+row.id+'" title="View" type="button" ><i class="zmdi zmdi-eye"></i>View</button>'+
                                    '<button class="btn btn-warning btn-sm btn_view" value="'+row.id+'" title="Edit" type="button" ><i class="zmdi zmdi-edit"></i>Edit</button>'+
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

    datatable();
    
    function refresh(){
        var url = "<?php echo base_url()?>terminal/terminalDataTable";

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

                $("#addTerminalForm").trigger("reset");
                // End of Confirmation
                $('#terminalInfoModal').modal('hide');
                
                alert(data.message);
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

                $("#addTerminalForm").trigger("reset");
                // End of Confirmation
                $('#deleteTerminalInfoModal').modal('hide');
                
                alert(data.message);
            }
        // ajax closing tag
        })
    });
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>
