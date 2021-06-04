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
            <div class="card">
                <div class="card-body">
                    <span hidden name="routeIdView" id="routeIdView" > </span>
                    <div>
                        <label for="originIdView">Origin</label><br>
                        <span name="originIdView" id="originIdView" > </span>
                    </div>
                    <div>
                        <label for="destinationIdView">Destination</label><br>
                        <span  name="destinationIdView" id="destinationIdView" > </span>
                    </div>
                    <div>
                        <label for="kmDistanceView">Km Distance</label><br>
                        <span name="kmDistanceView" id="kmDistanceView" > </span> 
                    </div>
                    <div>
                        <label class="label-control">Effectivity Date</label> <br>
                        <span id="effectivityDateView" name="effectivityDateView"> </span>
                    </div>
                </div>
            </div>

            <div class="card card-nav-tabs" style="width: 100rem;">
                    <div class="card-header card-header-danger">
                        Create Landmark 
                    </div>
                    <div class="card-body">
                        <form id="addLandmarkForm" name="addLandmarkForm">
                            <div class="form-group">
                                <input hidden type="text" id="routeId" name="routeId">
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

                <!-- TABLE  -->
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

                <div id="viewLandmarkInfoModal" class="modal" tabindex="-1" role="dialog">
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
                            <input hidden type="text" class="form-control" name="viewLandmarkId" id="viewLandmarkId" aria-describedby="emailHelp">
                            <label for="exampleInputEmail1">Landmark Name</label>
                                <input type="text" class="form-control" name="viewLandmarkName" id="viewLandmarkName" aria-describedby="emailHelp">
                            <label for="exampleInputEmail1">Kilometer From Origin</label>
                                <input type="text" class="form-control" name="viewKmFromOrigin" id="viewKmFromOrigin" aria-describedby="emailHelp">
                            <label for="exampleInputEmail1">Effectivity Date</label>
                                <input type="text" class="form-control" name="viewEffectivityDate" id="viewEffectivityDate" aria-describedby="">
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
                                <input type="text" class="form-control" name="editLandmarkName" id="editLandmarkName" aria-describedby="emailHelp">
                            <label for="exampleInputEmail1">Kilometer From Origin</label>
                                <input type="text" class="form-control" name="editKmFromOrigin" id="editKmFromOrigin" aria-describedby="emailHelp">
                            <label for="exampleInputEmail1">Effectivity Date</label>
                                <input type="date" class="form-control" name="editEffectivityDate" id="editEffectivityDate" aria-describedby="">
                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="update" class="btn btn-warning">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
                <!-- END OF TABLE -->
              
            <!-- CLOSING TAG OF CONTENT -->
          </div>
        </div>
      </div>
      <!-- END OF CLOSING TAG OF CONTENT -->
      
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

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>

<script>

function view(){
    var id = "<?php echo $id?>"
    
    $.ajax({
            url: '<?php echo base_url()?>Route/get_one_route/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                var routeInfo = data.data;
                console.log(routeInfo);

                $('#routeId').val(id);
                $('#originIdView').html(routeInfo.origin.name);
                $('#destinationIdView').html(routeInfo.destination.name);
                $('#kmDistanceView').html(routeInfo.kmDistance);
                $('#effectivityDateView').html(moment(routeInfo.effectivityDate).format('YYYY-MM-DD'));

                
            }
        // ajax closing tag
        })
    }

    function refresh(){
        var routeId = "<?php echo $id ?>"

        var url = "<?php echo base_url()?>RouteView/show_landmark/" + routeId;

        landmarkDataTable.ajax.url(url).load();
    }

    view();

    // CREATE LANDMARK
    $('#addLandmarkForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#addLandmarkForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>RouteView/add_landmark',
            type: "POST",
            data: form.serialize(),
        
            success: function(data){              
                refresh();
                $("#name").val("");
                $("#kmFromOrigin").val("");
                $("#effectivityDate").val("");
                showNotification('create', 'Successfully created a landmark!', 'success', 'top', 'right');
            }
        // ajax closing tag
        })
    });

    //DATA TABLES
    function loadtable(){
        var routeId = "<?php echo $id ?>"
        
        landmarkDataTable = $('#landmarkTable').DataTable({
            "ajax": "<?php echo base_url()?>RouteView/show_landmark/" + routeId,
            "columns": [
                { data: "id"},
                { data: "name"},
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
                                return '<button class="btn btn-secondary btn-sm">Activate</button>';
                            }
                        }
                },
            ],

                "aoColumnDefs": [{ "bVisible": false, "aTargets": [0] }],
                "order": [[4, "desc"]]
        })
        
    }
    loadtable();

    

    // VIEW ONE LANDMARK 
    $(document).on("click", ".btn_view", function(){
        var id = this.value;

        $.ajax({
            url: '<?php echo base_url()?>RouteView/get_one_landmark/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                var landmarkInfo = data.data;

                $('#viewLandmarkId').val(id);
                $('#viewLandmarkName').val(landmarkInfo.name);
                $('#viewKmFromOrigin').val(landmarkInfo.kmFromOrigin);
                $('#viewEffectivityDate').val(moment(landmarkInfo.effectivityDate).format('MM-DD-YYYY'));

                $('#viewLandmarkInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

        

    // EDIT landmark 
    $(document).on("click", ".btn_edit", function(){
        var id = this.value;

        $.ajax({
            url: '<?php echo base_url()?>RouteView/get_one_landmark/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var landmarkInfo = data.data;
                console.log(moment(landmarkInfo.effectivityDate).format('MM-DD-YYYY'))

                $('#editLandmarkId').val(id);
                $('#editLandmarkName').val(landmarkInfo.name);
                $('#editKmFromOrigin').val(landmarkInfo.kmFromOrigin);
                $('#editEffectivityDate').val(moment(landmarkInfo.effectivityDate).format('YYYY-MM-DD'));

                $('#editLandmarkInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $('#editLandmarkForm').on('submit', function(e){
        e.preventDefault();
        var form = $('#editLandmarkForm'); 

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, update it!',
            confirmButtonColor: '#ff9800',
        }).then((result) => {
            if (result.isConfirmed) {
                // ajax opening tag
                $.ajax({
                    url: '<?php echo base_url()?>RouteView/edit_landmark',
                    type: "POST",
                    data: form.serialize(),
                
                    success: function(data){
                        refresh();
                        showNotification('update', 'Successfully updated a landmark.', 'warning', 'top', 'right');
                        $('#editLandmarkInfoModal').modal('hide');
                    }
                })
                // ajax closing tag
            }
        })

        
    });

    // DELETE landmark 
    $(document).on("click", ".btn_delete", function(){
        var id = this.value;


        // Confirmation
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            confirmButtonColor: '#d33',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '<?php echo base_url()?>RouteView/delete_landmark/',
                    type: "POST",
                    data: { id: id },
                
                    success: function(data){
                        refresh()
                        showNotification('delete', 'Successfully deleted a landmark.', 'danger', 'top', 'right');
                    }
                // ajax closing tag
                })
            }
        })
        // End of Confirmation

        
    });
</script>