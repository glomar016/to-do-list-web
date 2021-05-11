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
                    Create User  
                </div>
                <div class="card-body">
                    <form id="addUserForm" name="addUserForm">
                        <div class="form-group">
                            <label for="exampleInputEmail1">First Name</label>
                            <input type="text" class="form-control" name="firstName" id="firstName" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input type="text" class="form-control" name="lastName"  id="lastName" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email"  id="email" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password"  class="form-control" id="password" >
                        </div>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <div class="card">
              <div class="card-body">
                <table id="userTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
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

      <div id="userInfoModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editUserForm">
                    <div class="modal-body">
                        <input hidden type="text" class="form-control" name="editUserId" id="editUserId" aria-describedby="emailHelp">
                        <input type="text" class="form-control" name="editFirstName" id="editFirstName" aria-describedby="emailHelp">
                        <input type="text" class="form-control" name="editLastName" id="editLastName" aria-describedby="emailHelp">
                        <input type="email" class="form-control" name="editEmail" id="editEmail" aria-describedby="emailHelp">
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
        userDataTable = $('#userTable').DataTable( {
            "ajax": "<?php echo base_url()?>user/show_user",
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

    loadtable();
    
    function refresh(){
        var url = "<?php echo base_url()?>user/show_user";

        userDataTable.ajax.url(url).load();
    }

    // CREATE USER 
    $('#addUserForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#addUserForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>user/add_user',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();

                $("#addUserForm").trigger("reset");
                // End of Confirmation

                
            }
        // ajax closing tag
        })
    });

    // VIEW USER 
    $(document).on("click", ".btn_view", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>user/get_one_user',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var userInfo = data.data;

                $('#editUserId').val(id);
                $('#editFirstName').val(userInfo.firstName);
                $('#editLastName').val(userInfo.lastName);
                $('#editEmail').val(userInfo.email);

                $('#userInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    // EDIT USER 
    $('#editUserForm').on('submit', function(e){
        e.preventDefault();

        console.log('working');

        var form = $('#editUserForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>user/edit_user',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();

                $("#addUserForm").trigger("reset");
                // End of Confirmation
                $('#userInfoModal').modal('hide');
                
                alert(data.message);
            }
        // ajax closing tag
        })
    });
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>


