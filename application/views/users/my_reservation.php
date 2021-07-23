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
<?php $this->load->view('includes/users/head.php'); ?>

<body class="">

  <!-- WRAPPER -->
  <div class="wrapper ">

    <!-- SIDEBAR -->
    <?php $this->load->view('includes/users/sidebar.php'); ?>
    
    <!-- MAIN CONTENT -->
    <div class="main-panel">

      <!-- NAVBAR -->
      <?php $this->load->view('includes/users/navbar.php'); ?>

      <!-- OPENING TAG OF CONTENT -->
      <div class="content" style="padding-top: 0px;">
        <div class="container-fluid">
          <div class="row">
            <!-- END OF OPENING TAG OF CONTENT -->

            <!-- SESSION CHECK -->
            <?php 
                if (isset($this->session->userdata['logged_in'])) {
                    $userType = ($this->session->userdata['logged_in']['userType']);
                    $userId = ($this->session->userdata['logged_in']['userId']);

                if($userType == ""){
                    // header("location: ".base_url()."user/forbidden");
                    echo "Logged In";
                }

                } 
                else {
                    header("location: ".base_url()."login");
                }
            ?>

        
        <!-- END OF SESSION CHECK -->

        <div class="card">
          <div class="card-header card-header-tabs card-header-primary">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <span>List of Reservation</span>
              </div>
            </div>
          </div>
              <div class="card-body">
                <table id="userTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Date and Time</th>
                            <th>Reservation Number</th>
                            <th>Bus Number</th>
                            <th>Route</th>
                            <th>Total Amount</th>
                            <th>Status</th>
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

      <!-- VIEW USER MODAL -->
      <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="viewModal">View Reservation</h5>
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
                Are you sure you want to cancel?
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
              <button type="button" class="btn btn-danger delete-confirm" >Yes</button>
            </div>
          </div>
        </div>
      </div> 

      <!-- END OF CLOSING TAG OF CONTENT -->
      
      <!-- FOOTER -->
      <?php $this->load->view('includes/users/footer.php')?>

    </div>
    <!-- END OF MAIN CONTENT -->

  </div>
  <!-- END OF WRAPPER -->

  <!-- FIXED PLUGINS -->
  
  <!-- FIXED PLUGINS -->
  <?php $this->load->view('includes/users/core_js_files.php')?>
  
</body>
<script>
    // DATA TABLES
    var userId = "<?php echo $userId ?>";

    function loadtable(){
        userDataTable = $('#userTable').DataTable( {
          "ajax": "<?php echo base_url()?>users/my_reservation/show_reservations/"+userId,
          "columns": [
              {data: "id"},
              {data: "referenceNumber"},
              {data: "name"},
              // {data: "name"},
              {data: "scheduleId", render: function(data, type, row){
                  return row.schedule.route.origin.name + ' - ' + row.schedule.route.destination.name + ' - ' + moment(row.reservationDate).format('ll') + ' - ' 
                        + moment(row.schedule.hourFrom).format('LT') + ' - ' + moment(row.schedule.hourTo).format('LT');;
              }},
              {data: "totalAmount", render: function(data, type, row){
                  return "P" + parseFloat(data).toFixed(2);
              }},
              {data: "currentStatus"},
              {data: "created_at"},
              {data: "currentStatus", render: function(data, type, row){
                    if (data == "Paid"){
                      return '<div class="btn-group">' +
                              '<button class="btn btn-primary btn-sm btn-print-reservation" value="' + row.id + '"title = "Edit" type="button"> <i class="zmdi zmdi-edit"> </i> Print </button>&nbsp'+
                              '<button class="btn btn-danger btn-sm btn-refund-reservation" value="' + row.id + '"title = "Refund" type="button"> <i class="zmdi zmdi-edit"> </i> Refund </button>'+
                              '</div>';
                    }
                    else if(data == "Pending"){
                      return '<div class="btn-group">' +
                              '<button class="btn btn-info btn-sm btn-view-reservation" value="' + row.id + '"title = "View" type="button"> <i class="zmdi zmdi-view"> </i> View </button>&nbsp'+
                              '<button class="btn btn-default btn-sm btn-cancel-reservation" value="' + row.id + '"title = "Cancel" type="button"> <i class="zmdi zmdi-view"> </i> Cancel </button>'+
                              '</div>';
                    }
                  }
              }
            ],

          "aoColumnDefs": [{ "bVisible": false, "aTargets": [0, 6] }],
          "order": [[6, "desc"]]
        })
    };

    

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
        
            success: function(data){
              document.getElementById("addUserForm").reset();
              showNotification('create', 'Successfully added a new user!', 'success', 'top', 'right');
              refresh();

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
          showNotification('delete', 'Cancelled a reservation!', 'danger', 'top', 'right');
          refresh();
        }
    })
});

</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>


