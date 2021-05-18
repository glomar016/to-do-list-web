---------------------------

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
                    Create Landmark 
                </div>
                <div class="card-body">
                    <form id="addLandmarkForm" name="addLandmarkForm">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Landmark Name</label>
                            <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Kilometer From Origin</label>
                            <input type="text" class="form-control" name="kmFromOrigin"  id="kmFromOrigin" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label class="label-control">Effectivity Date</label> <br>
                            <input type="date" class="form-control" id="effectivityDate" name="effectivityDate">
                        </div>
                                               
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
            <div class="card">
              <div class="card-body">
                <table id="landmarkTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Landmark Name</th>
                            <th>Kilometer from Origin </th>
                            <th>Effectivity Date</th>
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

      <!-- VIEW MODAL -->
      <div id="LandmarkInfoModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Landmark Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="LandmarkForm">
                    <div class="modal-body">
                        <input hidden type="text" class="form-control" name="LandmarkIdmodal" id="LandmarkIdmodal" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Landmark Name</label>
                             <input type="text" class="form-control" name="namemodal" id="namemodal" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Kilometer From Origin</label>
                            <input type="text" class="form-control" name="kmFromOriginmodal" id="kmFromOriginmodal" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Effectivity Date</label>
                            <input type="text" class="form-control" name="effectivityDatemodal" id="effectivityDatemodal" aria-describedby="">
                    </div>
                    <div class="modal-footer">
                        <!-- <input type="submit" class="btn btn-success"> -->
                    </div>
                </form>
                </div>
            </div>
        </div>

<!-- EDIT MODAL -->
        <div id="editLandmarkInfoModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Landmark Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editLandmarkForm">
                    <div class="modal-body">
                          <input hidden type="text" class="form-control" name="editLandmarkId" id="editLandmarkId" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Landmark Name</label>
                            <input type="text" class="form-control" name="editName" id="editName" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Kilometer From Origin</label>
                            <input type="text" class="form-control" name="editkmFromOrigin" id="editkmFromOrigin" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Effectivity Date</label>
                            <input type="date" class="form-control" name="editeffectivityDate" id="editeffectivityDate" aria-describedby="">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
                </div>
            </div>
        
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Landmark Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>

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
              <input hidden type="text" id="deleteLandmark" name="deleteLandmark">
              You're deleting this Landmark
              </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-danger delete-confirm" >Delete</button>
            </div>
          </div>
        </div>
      </div> 

        
    <!-- END OF MAIN CONTENT -->

  </div>
  <!-- END OF WRAPPER -->

  <!-- FIXED PLUGINS -->
  
  <!-- FIXED PLUGINS -->
  <?php $this->load->view('includes/core_js_files.php')?>
  
</body>
<script>

 //DATA TABLES
   function loadtable(){
       landmarkDataTable = $('#landmarkTable').DataTable( {
           "ajax": "<?php echo base_url()?>Landmark/show_landmark",
           "columns": [
               { data: "id"},
               { data: "name", render: function(data, type, row){
                        return `${row.name}`
                    }
                },
               { data: "kmFromOrigin"},
               { data: "effectivityDate", render: function(data, type, row){
                   return moment (data).format("LL");
                    }
               },
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

            "aoColumnDefs": [{ "bVisible": false, "aTargets": [0, ] }],
            "order": [[4, "desc"]]
        })
    }

   loadtable();

   function refresh(){
       var url = "<?php echo base_url()?>Landmark/show_landmark";

       landmarkDataTable.ajax.url(url).load();
   }

    // CREATE LANDMARK
    $('#addLandmarkForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#addLandmarkForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>Landmark/add_landmark',
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


    // VIEW ONE LANDMARK 
    $(document).on("click", ".btn_view", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>Landmark/get_one_landmark/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var LandmarkInfo = data.data;

                $('#LandmarkIdmodal').val(id);
                $('#namemodal').val(LandmarkInfo.name);
                $('#kmFromOriginmodal').val(LandmarkInfo.kmFromOrigin);
                $('#effectivityDatemodal').val(LandmarkInfo.effectivityDate);

                $('#LandmarkInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    

    // EDIT landmark 
    $(document).on("click", ".btn_edit", function(){
        var id = this.value;

        $.ajax({
            url: '<?php echo base_url()?>Landmark/get_one_landmark/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var LandmarkInfo = data.data;

                $('#editLandmarkId').val(id);
                $('#editName').val(LandmarkInfo.name);
                $('#editkmFromOrigin').val(LandmarkInfo.kmFromOrigin);
                $('#editeffectivityDate').val(LandmarkInfo.effectivityDate);

                $('#editLandmarkInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $('#editLandmarkForm').on('submit', function(e){
        e.preventDefault();

        console.log('working');

        var form = $('#editLandmarkForm'); 



        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>landmark/edit_landmark',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();

                $("#addLandmarkForm").trigger("reset");
                // End of Confirmation
                $('#LandmarkInfoModal').modal('hide');
                
                alert(data.message);
            }
        

 // ajax closing tag
})


    });
// DELETE Landmark
      <!-- FOOTER -->
      <?php $this->load->view('includes/footer.php')?>
    }
})
});
$(document).on("click", ".btn-delete", function(){
  var id = this.value;
  $("#deleteModal").modal('show');
  $.ajax({
        url:'<?php echo base_url()?>landmark/viewLandmark',
        type: "POST",
        data: { id: id},
        dataType: "JSON",

        success: function(data){
          var userInfo = data.data;
          var deleteLandmarkId = document.getElementById('deleteLandmarkId');
          deleteLandmarkId.value = userInfo.id
        }
    })
});

$('.delete-confirm').on('click', function(e){

e.preventDefault();

var form = $('#deleteForm');

$.ajax({
    url:'<?php echo base_url()?>Landmark/deleteLandmark',
    type: "POST",
    data: form.serialize(),
    dataType: "JSON",

    success: function(data){
      $("#deleteModal").modal('hide');
      refresh();
    }
})
});
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>
<!--- SCRIPTS -->
<!-- <script>
$('.datetimepicker').datetimepicker({
    icons: {
        time: "fa fa-clock-o",
        date: "fa fa-calendar",
        up: "fa fa-chevron-up",
        down: "fa fa-chevron-down",
        previous: 'fa fa-chevron-left',
        next: 'fa fa-chevron-right',
        today: 'fa fa-screenshot',
        clear: 'fa fa-trash',
        close: 'fa fa-remove'
    }
});</script> -->
</html>



	// }
}
