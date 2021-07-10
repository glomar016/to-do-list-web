<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================

Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2525 Creative Tim (https://www.creative-tim.com)
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
            <div class="row">
              <div class="col-sm-12">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="available">
                  <label class="custom-file-label" id="lbl_available" for="available">Select Available Icon</label>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="unavailable">
                  <label class="custom-file-label" id="lbl_unavailable" for="unavailable">Select Unavailable Icon</label>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="selected">
                  <label class="custom-file-label" id="lbl_selected" for="selected">Select Selected Icon</label>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="taken">
                  <label class="custom-file-label" id="lbl_taken" for="selected">Select Taken Icon</label>
                </div>
              </div>
            </div>

              
              
          </div>
        </div>
        
        
            <div id="templateDiv" class="card" hidden>
              <div class="card-body">
                <div class="col-sm-12">
                  <div class="d-flex justify-content-center">
                      <body>
                        <table id="templateTable">
                         
                        </table>
                      </body>
                  </div>
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

      <!-- END OF MODALS -->

      <!-- END OF CLOSING TAG OF CONTENT -->

      <!-- FOOTER -->

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
$(document).ready(function(){

  $('#available').on('change', function(e){
    e.preventDefault();

    console.log(this.value);
    $('#lbl_available').html(this.value);
    let available = this.value;

    var Extension = available.substring(
            available.lastIndexOf('.') + 1).toLowerCase();

    console.log(Extension);
  })
  $('#unavailable').on('change', function(e){
    e.preventDefault();

    console.log(this.value);
    $('#lbl_unavailable').html(this.value);
  })
  $('#selected').on('change', function(e){
    e.preventDefault();

    console.log(this.value);
    $('#lbl_selected').html(this.value);
  })
  $('#taken').on('change', function(e){
    e.preventDefault();

    console.log(this.value);
    $('#lbl_taken').html(this.value);
  })


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
                { data: "busType.name"},
                { data: "seat"},
                { data: "row"},
                { data: "column"},
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

function refresh(){
        var url = "<?php echo base_url()?>bus_template/show_bus_template/";

        busTemplateTable.ajax.url(url).load();
}

$(document).on("click", ".btn_view", function(e){
  e.preventDefault();
  var id = this.value;

  $('#templateDiv').attr('hidden', false);

    $.ajax({
        url: '<?php echo base_url()?>bus_template/show_bus_seats/',
        type: 'POST',
        data: { id, id },
        dataType: "JSON",

        success: function(response){
          let data = response.data;
          let html;
          for(let tr=1; tr <= + data[0].template.row; tr++){
            html += `<tr id=tr${tr}> </tr>`
          }

          $('#templateTable').html(html);
          console.log(data);

          let i = 0;
          for(let col=1; col <= data[0].template.column; col++){
              for(let row=1; row <= data[0].template.row; row++){
                if(col == 1){
                  if(row == 1){
                    console.log('i =' + i);
                    console.log('this is entrance' + data[i].code)
                    $('#tr'+row).append(`<td style="padding: 15px; padding-left: 50px;"><p style="text-align:center">Entrance</p></td>`)
                  
                    i++;
                  }
                  else if(row == data[0].template.row){
                    console.log('i =' + i);
                    $('#tr'+row).append(`<td style="padding: 15px; padding-left: 50px;"><img src="/brs-web/resources/images/seats_driver.png" length="20" width="20"><p style="text-align:center">Driver</p></td>`)
                    console.log('this is driver seat' + data[i].code)
                  
                    i++;
                  }
                  else{
                    console.log('i =' + i);
                    $('#tr'+row).append(`<td style="padding: 15px; padding-left: 50px;"></td>`)
                    console.log('this is disabled seat' + data[i].code)
                  
                    i++;
                  }
                }
                else if(row == 3){
                  if(col == data[0].template.column){
                    console.log('i =' + i);
                    $('#tr'+row).append(`<td  style="padding: 15px; padding-left: 50px;"><img src="/brs-web/resources/images/seats_available.png" length="20" width="20"><p style="text-align:center">${data[i].code}</p></td>`)
                    console.log('this is passenger seat - ' + data[i].code)
                  
                    i++;
                  }
                  else{
                    console.log('i =' + i);
                    $('#tr'+row).append(`<td style="padding: 15px; padding-left: 50px;"></td>`)
                    console.log('this is disabled seat' + data[i].code)
                  
                    i++;
                  }
                }
                else{
                  console.log('i =' + i);
                  console.log('this is passenger seat' + data[i].code)
                  $('#tr'+row).append(`<td  style="padding: 15px; padding-left: 50px;"><img src="/brs-web/resources/images/seats_available.png" length="20" width="20"><p style="text-align:center">${data[i].code}</p></td>`)
                
                  i++;
                }
              }
          }
        }
    })
});


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
                let responseData = data.data;

                let templateRows = responseData[0].row;
                let templateColumns = responseData[0].column;
                let templateId = responseData[0].id;

                $.ajax({
                  url: '<?php echo base_url()?>bus_template/add_bus_seat/',
                  type: "POST",
                  data: { templateRows: templateRows, templateColumns: templateColumns, templateId: templateId},
                  dataType: "JSON",

                   success: function(data){
                      // End of Confirmation
                   }
                })
              
                refresh();
                showNotification('create', 'Successfully added a new bus template!', 'success', 'top', 'right');
                $("#addBusTemplateForm").trigger("reset");
            }
        // ajax closing tag
        })
    });

        
    $(document).on("click", ".btn_delete", function(e){
      var id = this.value;

      Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          $.ajax({
          url: '<?php echo base_url() ?>bus_template/delete_bus_template',
          type: 'POST',
          data: { id: id },
          dataType: "JSON",

          success: function(data){
            refresh();
            showNotification('delete', 'Deleted a bus template!', 'danger', 'top', 'right');
          }
        })
        }
      })
    });

    $(document).on("click", ".btn_edit", function(e){
      var id = this.value;
      let templateData;

      // ADD FORM FOR UPDATE

          $.ajax({
            url: '<?php echo base_url() ?>bus_template/find_one_bus_template',
            type: 'POST',
            data: { id: id },
            dataType: "JSON",

            success: function(data){
              templateData = data.data;
              $.ajax({
                url: '<?php echo base_url() ?>bus_template/delete_seats',
                type: 'POST',
                data: { id: id },
                dataType: "JSON",

                success: function(data){
                  console.log(templateData)
                  let templateRows = templateData[0].row;
                  let templateColumns = templateData[0].column;
                  let templateId = templateData[0].id;

                  $.ajax({
                    url: '<?php echo base_url()?>bus_template/add_bus_seat/',
                    type: "POST",
                    data: { templateRows: templateRows, templateColumns: templateColumns, templateId: templateId},
                    dataType: "JSON",

                    success: function(data){
                        // End of Confirmation
                    }
                  })
                }
              })

            }
          })

          
    });


// END OF DOCUMENT READY FUNCTION
});
</script>

</html>