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
#busTypeInfoModal form,
#editBusTypeInfoModal form{
    margin-top: -15px;
}
#addBusTypeForm .form-row{
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
                      Add Bus Template
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <form id="addBusTemplateForm">
                          <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="templateName">Template Name</label>
                                <input type="text" class="form-control" id="templateName" name="templateName">
                            </div>
                            <div class="form-group col-sm-6">
                                <select class="form-control" id="busTypeName" name="busTypeName">

                                </select>
                            </div>
                          </div>
                          
                          <div class="form-row">
                            <div class="form-group col-sm-4">
                              <label for="seatNumber">Number of seats for passenger</label>
                              <input type="text" class="form-control" name="seatNumber"  id="seatNumber">
                            </div>
                            <div class="form-group col-sm-4">
                              <label for="templateRows">Number of Rows</label>
                              <input type="text" class="form-control" name="templateRows"  id="templateRows">
                            </div>
                            <div class="form-group col-sm-4">
                              <label for="templateColumns">Number of Columns</label>
                              <input type="text" class="form-control" name="templateColumns"  id="templateColumns">
                            </div>
                          </div>
                      
                          <input type="submit" class="btn btn-primary">
                      </form>
                  </div>
              </div>
      </div>
          <div class="card">
              <div class="card-body">
                <table id="busTemplateTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Template Name</th>
                            <th>Bus Type</th>
                            <th>No. of Seats</th>
                            <th>Rows</th>
                            <th>Columns</th>
                            <th>Created at</th>
                            <th>Action</th>
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

<script>


$('#addBusTemplateForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#addBusTemplateForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>bus_template/add_bus_template/',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
                // refresh();
                showNotification('create', 'Successfully added a new bus template!', 'success', 'top', 'right');
                $("#addBusTypeForm").trigger("reset");
                // End of Confirmation

                
            }
        // ajax closing tag
        })
    });

function get_bus_type(){
    
    $.ajax({
      url: '<?php echo base_url()?>busInformation/get_bus_type',
      type: "GET",
      dataType: "JSON",

      success: function(data){
        var busTypeInfo = data.data;

        var html = ""

        if(busTypeInfo.length == 0){
          var html = `<option> -- No bus type available -- </option>`;
        }
        else{
          var html = "<option> -- Select bus type -- </option>";
        }

        for(var i=0; i < busTypeInfo.length; i++){
          html += `<option value="${busTypeInfo[i].id}">${busTypeInfo[i].name}</option>`
        }
        
        $('#busTypeName').html(html);
        // $('#busTypeNameEdit').html(html);

      }
    })
  }

  get_bus_type();

  function loadtable(){
        busTemplateTable = $('#busTemplateTable').DataTable( {
            "ajax": "<?php echo base_url()?>bus_template/show_bus_template",
            "columns": [
                { data: "id"},
                { data: "name"},
                { data: "typeId"},
                { data: "seat"},
                { data: "column"},
                { data: "row"},
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

            "aoColumnDefs": [{ "bVisible": false, "aTargets": [0, 6] }],
            "order": [[6, "desc"]]
        })
    }
    loadtable();
</script>

</html>