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

<style>
#insuranceInfoModal form,
#editInsuranceInfoModal form{
    margin-top: -15px;
}
#addInsuranceForm .form-row{
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
                      Add Insurance
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <div class="card-body">
                  <form id="addInsuranceForm">
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Insurance Code</label>
                                <input type="text" class="form-control" name="insuranceCode"  id="insuranceCode" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Insurance Name</label>
                                <input type="text" class="form-control" name="insuranceName"  id="insuranceName" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Effectivity Date</label>
                                <input type="date" class="form-control" name="effectivityDate"  id="effectivityDate" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Insurance Amount</label>
                                <input type="text" class="form-control" name="insuranceAmount"  id="insuranceAmount" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Insurance Details</label>
                                <input type="text" class="form-control" name="insuranceDetails"  id="insuranceDetails" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Insurance Document</label>
                                <input type="text" class="form-control" name="insuranceDocument"  id="insuranceDocument" aria-describedby="emailHelp">
                        </div>
                    </div>
                          <input type="submit" class="btn btn-primary">
                      </form>
                  </div>
                  </div>
              </div>
          </div>
            <div class="card">
              <div class="card-body">
                <table id="insuranceTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Insurance Code</th>
                            <th>Insurance Name</th>
                            <th>Effectivity Date</th>
                            <th>Insurance Amount</th>
                            <th>Insurance Details</th>
                            <th>Insurance Document</th>
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

        <div class="modal fade" id="insuranceInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="insuranceInfoModal">View Insurance</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
                <form id="InsuranceForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="InsuranceId" id="InsuranceId" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Insurance Code</label>
                        <span  class="form-control" name="InsuranceCode" id="InsuranceCode" aria-describedby="emailHelp"></span>
                        <label for="exampleInputEmail1">Insurance Name</label>
                        <span  class="form-control" name="InsuranceName" id="InsuranceName" aria-describedby="emailHelp"></span>
                        <label for="exampleInputEmail1">Effectivity Date</label>
                        <span  class="form-control" name="EffectivityDate" id="EffectivityDate" aria-describedby="emailHelp"></span>
                        <label for="exampleInputEmail1">Insurance Amount</label>
                        <span  class="form-control" name="InsuranceAmount" id="InsuranceAmount" aria-describedby="emailHelp"></span>
                        <label for="exampleInputEmail1">Insurance Details</label>
                        <span  class="form-control" name="InsuranceDetails" id="InsuranceDetails" aria-describedby="emailHelp"></span>
                        <label for="exampleInputEmail1">Insurance Document</label>
                        <span  class="form-control" name="InsuranceDocument" id="InsuranceDocument" aria-describedby="emailHelp"></span>
                        </span>
                    </div>
                </form>
                </div>
            </div>
            </div>
        </div>
        </div>
        </div>

        <div class="modal fade" id="editInsuranceInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="editInsuranceInfoModal">Edit Insurance Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="card-body">
                <form id="editInsuranceForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="editInsuranceId" id="editInsuranceId" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Insurance Code</label>
                        <input type="text" class="form-control" name="editInsuranceCode" id="editInsuranceCode" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Insurance Name</label>
                        <input type="text" class="form-control" name="editInsuranceName" id="editInsuranceName" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Effectivity Date</label>
                        <input type="text" class="form-control" name="editEffectivityDate" id="editEffectivityDate" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Insurance Amount</label>
                        <input type="text" class="form-control" name="editInsuranceAmount" id="editInsuranceAmount" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Insurance Details</label>
                        <input type="text" class="form-control" name="editInsuranceDetails" id="editInsuranceDetails" aria-describedby="emailHelp">
                        <label for="exampleInputEmail1">Insurance Document</label>
                        <input type="text" class="form-control" name="editInsuranceDocument" id="editInsuranceDocument" aria-describedby="emailHelp">
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

        <div class="modal fade" id="deleteInsuranceInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form id="deleteInsuranceForm">
                    <div class="modal-body">
                        <input type="hidden" class="form-control" name="deleteInsuranceId" id="deleteInsuranceId" aria-describedby="emailHelp">
                        <p>You're deactivating this Insurance!</p>
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
        insuranceDataTable = $('#insuranceTable').DataTable( {
            "ajax": "<?php echo base_url()?>insurance/show_insurance",
            "columns": [
                { data: "id"},
                { data: "code"},
                { data: "name"},
                { data: "effectivityDate"},
                { data: "amount"},
                { data: "details"},
                { data: "document"},
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

            "aoColumnDefs": [{ "bVisible": false, "aTargets": [0, 8] }],
            "order": [[8, "desc"]]
        })
    }

    loadtable();
    
    function refresh(){
        var url = "<?php echo base_url()?>insurance/show_insurance/";

        insuranceDataTable.ajax.url(url).load();
    }


    // CREATE INSURANCE
    $('#addInsuranceForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#addInsuranceForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>insurance/add_insurance/',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();
                showNotification('create', 'Successfully added a new insurance!', 'success', 'top', 'right');
                $("#addInsuranceForm").trigger("reset");
                // End of Confirmation

                
            }
        // ajax closing tag
        })
    });

    // VIEW INSURANCE
    $(document).on("click", ".btn_view", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>insurance/get_one_insurance/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var insuranceInfo = data.data;

                $('#InsuranceId').html(id);
                $('#InsuranceCode').html(insuranceInfo.code);
                $('#InsuranceName').html(insuranceInfo.name);
                $('#EffectivityDate').html(insuranceInfo.effectivityDate);
                $('#InsuranceAmount').html(insuranceInfo.amount);
                $('#InsuranceDetails').html(insuranceInfo.details);
                $('#InsuranceDocument').html(insuranceInfo.document);
                $('#InsuranceStatus').html(insuranceInfo.status);

                $('#insuranceInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    // EDIT INSURANCE 
    $(document).on("click", ".btn_edit", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>insurance/get_one_insurance/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var insuranceInfo = data.data;

                $('#editInsuranceId').val(id);
                $('#editInsuranceCode').val(insuranceInfo.code);
                $('#editInsuranceName').val(insuranceInfo.name);
                $('#editEffectivityDate').val(insuranceInfo.effectivityDate);
                $('#editInsuranceAmount').val(insuranceInfo.amount);
                $('#editInsuranceDetails').val(insuranceInfo.details);
                $('#editInsuranceDocument').val(insuranceInfo.document);

                $('#editInsuranceInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $('#editInsuranceForm').on('submit', function(e){
        e.preventDefault();

        console.log('working');

        var form = $('#editInsuranceForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>insurance/edit_insurance/',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();
                showNotification('update', 'Successfully updated the Insurance!', 'warning', 'top', 'right');
                $('#editInsuranceInfoModal').modal('hide');
            }
        // ajax closing tag
        })
    });

    // DELETE INSURANCE
    $(document).on("click", ".btn_delete", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>insurance/get_one_insurance/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var deleteInsuranceInfo = data.data;

                $('#deleteInsuranceId').val(id);

                $('#deleteInsuranceInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $('.delete-confirm').on('click', function(e){
        e.preventDefault();

        $('#deleteInsuranceInfoModal').modal('show');

        console.log('working');

        var form = $('#deleteInsuranceForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>insurance/delete_insurance',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                refresh();

                showNotification('delete', 'Deleted an Insurance!', 'danger', 'top', 'right');
                $('#deleteInsuranceInfoModal').modal('hide');
            }
        // ajax closing tag
        })
    });
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>