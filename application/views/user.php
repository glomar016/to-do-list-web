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
#editUserForm .form-row,
#addUserForm .form-row{
  margin-top: 15px;
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
                      Add User
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <div class="card-body">
                  <form id="addUserForm" name="addUserForm">
                      <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">First Name</label>
                            <input required type="text" class="form-control" name="firstName" id="firstName" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Last Name</label>
                            <input required type="text" class="form-control" name="lastName"  id="lastName" aria-describedby="emailHelp">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-sm-12">
                            <label for="exampleInputEmail1">Email address</label>
                            <input required type="email" class="form-control" name="email"  id="email" aria-describedby="emailHelp">
                        </div>
                      </div>
                      <div class="form-row">
                            <div class="form-group col-sm-12">
                                <label for="exampleInputPassword1">Password</label>
                                <input required type="password" name="password"  class="form-control" id="password" >
                            </div>
                        </div>
                      <div class="form-row">
                          <div class="form-group col-sm-12">
                              <label for="userType">User Type:</label>
                              <select required name="userType"  class="form-control" id="userType" >
                                <option value="">--Select User Type--</option>
                                <option value="Admin">Administrator</option>
                                <option value="Passenger">Passenger</option>
                                <option value="Employee">Employee</option>
                              </select>
                          </div>
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
              <h4 class="card-header card-header-info">List of Users</h4>
              <div class="card-body">
                <table id="userTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Date Created</th>
                            <th>User Type</th>
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

      <!-- VIEW USER MODAL -->
      <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="viewModal">View User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card-body">
            <form id="viewUserForm">
                <div class="modal-body">
                    <div class="form-row">
                      <div class="form-group col-sm-6">
                        <!-- <input hidden type="text" class="form-control" name="viewUserId" id="viewUserId" aria-describedby="emailHelp"> -->
                        <label for="viewFirstName">First Name</label>
                        <span class="form-control" name="viewFirstName" id="viewFirstName" aria-describedby="emailHelp"></span>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="viewLastName">Last Name</label>
                        <span class="form-control" name="viewLastName" id="viewLastName" aria-describedby="emailHelp"></span>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-sm-12">
                        <label for="viewEmail">Email</label>
                        <span class="form-control" name="viewEmail" id="viewEmail" aria-describedby="emailHelp"></span>
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-sm-12">
                        <label for="viewUserType">User Type:</label>
                        <span class="form-control" name="viewUserType" id="viewUserType" aria-describedby="emailHelp"></span>
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

      <!-- EDIT USER MODAL -->
      <div class="modal fade" id="editUserInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editUserInfoModal">Edit User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card-body">
            <form id="editUserForm">
                <div class="modal-body">
                <div class="form-row">
                      <div class="form-group col-sm-6">
                        <input hidden type="text" class="form-control" name="editUserId" id="editUserId" aria-describedby="emailHelp">
                        <label for="editFirstName">First Name</label>
                        <input required type="text" class="form-control" name="editFirstName" id="editFirstName" aria-describedby="emailHelp">
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="editLastName">Last Name</label>
                        <input required type="text" class="form-control" name="editLastName" id="editLastName" aria-describedby="emailHelp">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-sm-12">
                        <label for="editEmail">Email</label>
                        <input required type="text" class="form-control" name="editEmail" id="editEmail" aria-describedby="emailHelp">
                      </div>
                    </div>
                    <div class="form-row">
                          <div class="form-group col-sm-12">
                              <label for="editUserType">User Type:</label>
                              <select required name="editUserType"  class="form-control" id="editUserType" >
                                <option value="">--Select User Type--</option>
                                <option value="Admin">Administrator</option>
                                <option value="Passenger">Passenger</option>
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

      <!-- DELETE USER MODAL -->
      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="deleteForm">
              <input hidden type="text" id="deleteUserId" name="deleteUserId">
              You're deactivating this user
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-danger delete-confirm" >Deactivate</button>
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
                { data: "userType" },
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
              console.log(data)
              if (data.error == true){
                var msg = data.message;
                showNotification('create', msg, 'danger', 'top', 'right');
                refresh();
              }

              else{
                  document.getElementById("addUserForm").reset();
                  showNotification('create', 'Successfully added a new user!', 'success', 'top', 'right');
                  refresh();
                }
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

                $('#viewUserId').val(id);
                $('#viewFirstName').html(userInfo.firstName);
                $('#viewLastName').html(userInfo.lastName);
                $('#viewEmail').html(userInfo.email);
                $('#viewUserType').html(userInfo.userType);

                $('#viewModal').modal('show');
            }
        // ajax closing tag
        })
    });

    // EDIT USER 
    $(document).on("click", ".btn_edit", function(){
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
                $('#editUserType').val(userInfo.userType);

                $('#editUserInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

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
              $("#editUserInfoModal").modal('hide');
                showNotification('update', 'Successfully update user!', 'warning', 'top', 'right');
                refresh();

            }
        // ajax closing tag
        })
    });

  // DELETE USER
$(document).on("click", ".btn_delete", function(){
  var id = this.value;
  $("#deleteModal").modal('show');
  $.ajax({
        url:'<?php echo base_url()?>user/get_one_user',
        type: "POST",
        data: { id: id},
        dataType: "JSON",

        success: function(data){
          var userInfo = data.data;
          var deleteUserId = document.getElementById('deleteUserId');
          deleteUserId.value = userInfo.id
        }
    })
});

$('.delete-confirm').on('click', function(e){

    e.preventDefault();

    var form = $('#deleteForm');

    $.ajax({
        url:'<?php echo base_url()?>user/delete_user',
        type: "POST",
        data: form.serialize(),
        dataType: "JSON",

        success: function(data){
          $("#deleteModal").modal('hide');
          showNotification('delete', 'Deleted a user!', 'danger', 'top', 'right');
          refresh();
        }
    })
});

</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>


