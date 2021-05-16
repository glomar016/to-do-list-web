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
                <table id="terminalTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Terminal</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Date Created</th>
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
                <form id="editTerminalForm">
                    <div class="modal-body">
                        <input hidden type="text" class="form-control" name="editTerminalId" id="editTerminalId" aria-describedby="emailHelp">
                        <input type="text" class="form-control" name="editTerminalName" id="editTerminalName" aria-describedby="emailHelp">
                        <input type="text" class="form-control" name="editTerminalAddress" id="editTerminalAddress" aria-describedby="emailHelp">
                        <input type="email" class="form-control" name="editTerminalEmail" id="editTerminalEmail" aria-describedby="emailHelp">
                        <input type="text" class="form-control" name="editTerminalStatus" id="editTerminalStatus" aria-describedby="emailHelp">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success">
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
        terminalDataTable = $('#terminalTable').DataTable( {
            "ajax": "<?php echo base_url()?>terminal/show_terminal",
            "columns": [
                { data: "id"},
                { data: "name"},
                { data: "address"},
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

                $('#editTerminalId').val(id);
                $('#editTerminalName').val(terminalInfo.name);
                $('#editTerminalAddress').val(terminalInfo.address);
                $('#editTerminalEmail').val(terminalInfo.email);
                $('#editTerminalStatus').val(terminalInfo.status);

                $('#terminalInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    // EDIT TERMINAL
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
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>


