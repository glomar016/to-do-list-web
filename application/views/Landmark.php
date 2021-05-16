
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

      <div id="LandmarkInfoModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Landmark Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editLandmarkForm">
                    <div class="modal-body">
                        <input hidden type="text" class="form-control" name="editLandmarkId" id="editLandmarkId" aria-describedby="emailHelp">
                        <input type="text" class="form-control" name="editName" id="editName" aria-describedby="emailHelp">
                        <input type="text" class="form-control" name="editkmFromOrigin" id="editkmFromOrigin" aria-describedby="emailHelp">
                        <input type="date" class="form-control" name="editeffectivityDate" id="editeffectivityDate" aria-describedby="">
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
                </div>
            </div>
        </div>


         <div id="LandmarkInfoModalView" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Landmark Info</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editLandmarkForm">
                    <div class="modal-body">
                        <input hidden type="text" class="form-control" name="editLandmarkId" id="editLandmarkId" aria-describedby="emailHelp">
                        <input type="text" class="form-control" name="editName" id="editName" aria-describedby="emailHelp">
                        <input type="text" class="form-control" name="editkmFromOrigin" id="editkmFromOrigin" aria-describedby="emailHelp">
                        <input type="date" class="form-control" name="editeffectivityDate" id="editeffectivityDate" aria-describedby="">
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
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
    //DATA TABLES
   

    // CREATE LANDMARK
    


    // VIEW ONE LANDMARK 
    $(document).on("click", ".btn_view", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>Landmark/get_one_landmark',
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

                $('#LandmarkInfoModalView').modal('show');
            }
        // ajax closing tag
        })
    });

    // EDIT landmark 
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
