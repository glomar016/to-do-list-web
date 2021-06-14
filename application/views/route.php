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
              <h5 class="card-header">
                  <a class="collapsed d-block" data-toggle="collapse" href="#collapse-collapsed" aria-expanded="true" aria-controls="collapse-collapsed" id="heading-collapsed">
                      <i class="fa fa-chevron-down pull-right"></i>
                      Add Route
                  </a>
              </h5>
                        
                <!-- CREATE CARD -->
            <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">              
                    <div class="card-body">     
                    <div class="card-body">             
                        <form id="addrouteForm" name="addrouteForm">
                            <div class="form-group col-sm-12">
                                <label for="originId">Origin</label>
                                <select id="originId" name="originId" class="form-control" data-style="btn btn-primary btn-sm">
                                 
                                </select>
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="destinationId">Destination</label>
                                <select id="destinationId" name="destinationId" class="form-control" data-style="btn btn-primary btn-sm">
                              
                                </select>
                            </div>
                            <div class="card-body">
                            <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="kmDistance">Km Distance</label>
                                <input type="text" class="form-control" name="kmDistance" id="kmDistance" >
                            </div>
                            <div class="form-group col-sm-3">
                                <label class="label-control">Effectivity Date</label> 
                                <input type="date" class="form-control" id="effectivityDate" name="effectivityDate">
                            </div>
                            
                            </div>
                            <input type="submit" class="btn btn-primary">
                        </div>           
                        
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
                <!-- END OF CREATE CARD -->

                
                <!-- TABLE  -->
                <div class="card">
                <div class="card-body">
                    <table id="routeTable" class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Origin</th>
                                <th>Destination</th>
                                <th>Km Distance</th>
                                <th>Effectivity Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                </div>
                <!-- END OF TABLE -->
              
            <!-- CLOSING TAG OF CONTENT -->
          </div>
        </div>
      </div>
      <!-- END OF CLOSING TAG OF CONTENT -->

     
    <!-- VIEW MODAL -->
    <div id="viewrouteInfoModal" class="modal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Route Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="routeForm">
                    <div class="modal-body">
                        <div class="modal-body">
                        <div class="form-group">
                            <input hidden type="text" class="form-control" name="routeIdView" id="routeIdView" >
                            <div class="form-group col-sm-6">
                                <label for="originIdView">Origin</label>
                                <input type="text" class="form-control" name="originIdView" id="originIdView" >
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="destinationIdView">Destination</label>
                                <input type="text" class="form-control" name="destinationIdView" id="destinationIdView" >
                            </div>
                        </div>
                         

                        <div class="form-row">
                            <div class="form-group col-sm-6">
                                <label for="kmDistanceView">Km Distance</label>
                                <input type="text" class="form-control" name="kmDistanceView" id="kmDistanceView" >
                            </div>
                            <div class="form-group col-sm-6">
                                <label class="label-control">Effectivity Date</label> <br>
                                <input type="date" class="form-control" id="effectivityDateView" name="effectivityDateView">
                            </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <input type="submit" class="btn btn-success"> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div id="editrouteInfoModal" class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Route Information</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="editrouteForm">
                        <div class="modal-body">
                            <div class="form-group col-sm-6">
                                <label for="originIdEdit">Origin</label>
                                <input hidden type="text" class="form-control" name="routeIdEdit" id="routeIdEdit" >
                                <select id="originIdEdit" name="originIdEdit" class="form-control" data-style="btn btn-primary btn-sm">
 
                                </select>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="destinationIdEdit">Destination</label>
                                    <select id="destinationIdEdit" name="destinationIdEdit" class="form-control" data-style="btn btn-primary btn-sm">

                                    </select>
                                </div>
                                <div class="form-row">
                                <div class="form-group col-sm-6">
                                    <label for="kmDistanceEdit">Km Distance</label>
                                    <input type="text" class="form-control" name="kmDistanceEdit" id="kmDistanceEdit" >
                                </div>
                                <div class="form-group col-sm-6">
                                    <label class="label-control">Effectivity Date</label> <br>
                                    <input type="date" class="form-control" id="effectivityDateEdit" name="effectivityDateEdit">
                                </div>
                                </select>
                            </div>
                        <div class="modal-footer">
                            <input type="submit" value="update" class="btn btn-warning">
                        </div>
                    </form>
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

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>


<script>
$(document).ready(function(){
    //DATA TABLES
    function loadtable(){
        routeDataTable = $('#routeTable').DataTable({
            "ajax": "<?php echo base_url()?>route/show_route",
            "columns": [
                { data: "id"},
                { data: "origin.name"},
                { data: "destination.name"},
                { data: "kmDistance"},
                { data: "effectivityDate", render: function (data, type, row){
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

    // Get terminals
    // function get_bus_type(){
        
    //     $.ajax({
    //     url: '<?php echo base_url()?>busInformation/get_bus_type',
    //     type: "GET",
    //     dataType: "JSON",

    //     success: function(data){
    //         var busTypeInfo = data.data;
    //         console.log(busTypeInfo);

    //         var html = ""

    //         for(var i=0; i < busTypeInfo.length; i++){
    //         html += `<option value="${busTypeInfo[i].id}">${busTypeInfo[i].name}</option>`
    //         }
            
    //         $('#busTypeId').html(html);
    //         $('#busTypeIdView').html(html);
    //         $('#busTypeIdEdit').html(html);

    //     }
    //     })
    // }

    
    function get_terminal(){
        
        $.ajax({
            url: '<?php echo base_url() ?>route/get_terminal',
            type: "GET",
            dataType: "JSON",

            success: function(data){
                console.log(data);

                var terminalInfo = data.data;
                console.log(terminalInfo);
                var html = ""
                
                for(var i=0; i < terminalInfo.length; i++){
                    html += `<option value="${terminalInfo[i].id}">${terminalInfo[i].name}</option>`
                }

                $('#originId').html(html);
                $('#destinationId').html(html);
                $('#originIdEdit').html(html);
                $('#destinationIdEdit').html(html);
            }

            
        })
    }

    get_terminal();
    loadtable();

    function refresh(){
        var url = "<?php echo base_url()?>route/show_route";

        routeDataTable.ajax.url(url).load();
    }



    // CREATE route
    $('#addrouteForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#addrouteForm').serializeArray(); 

        var routeName = $('#originId option:selected').text() + " - " + $('#destinationId option:selected').text();
        form.push({name: "routeName", value: routeName});
        // console.log(form);
        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>route/add_route',
            type: "POST",
            data: form,
        
            success: function(data){
                refresh();
                $("#addrouteForm").trigger("reset");
                showNotification('create', 'Successfully created a route!', 'success', 'top', 'right');
            }
        // ajax closing tag
        })
    });


    // VIEW ONE route 
    $(document).on("click", ".btn_view", function(){
        var id = this.value;

        window.location.href = "<?php echo base_url()?>RouteView/redirectView/" + id;
        
        // $.ajax({
        //     url: '<?php echo base_url()?>route/get_one_route/',
        //     type: "POST",
        //     data: { id: id },
        //     dataType: "JSON",
        
        //     success: function(data){
        //         var routeInfo = data.data;
        //         console.log(routeInfo);

        //         $('#routeIdView').val(id);
        //         $('#originIdView').val(routeInfo.origin.name);
        //         $('#destinationIdView').val(routeInfo.destination.name);
        //         $('#kmDistanceView').val(routeInfo.kmDistance);
        //         $('#effectivityDateView').val(moment(routeInfo.effectivityDate).format('YYYY-MM-DD'));

        //         $('#viewrouteInfoModal').modal('show');
        //     }
        // // ajax closing tag
        // })
    });

    // EDIT route 
    $(document).on("click", ".btn_edit", function(){
        var id = this.value;

        $.ajax({
            url: '<?php echo base_url()?>route/get_one_route/',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var routeInfo = data.data;
                console.log(moment(routeInfo.effectivityDate).format('MM-DD-YYYY'))

                $('#routeIdEdit').val(id);
                $('#originIdEdit').val(routeInfo.origin.id);
                $('#destinationIdEdit').val(routeInfo.destination.id);
                $('#kmDistanceEdit').val(routeInfo.kmDistance);
                $('#effectivityDateEdit').val(moment(routeInfo.effectivityDate).format('YYYY-MM-DD'));

                $('#editrouteInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $('#editrouteForm').on('submit', function(e){
        e.preventDefault();
        var form = $('#editrouteForm'); 

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
                    url: '<?php echo base_url()?>route/edit_route',
                    type: "POST",
                    data: form.serialize(),
                
                    success: function(data){
                        refresh();
                        showNotification('update', 'Successfully updated a route.', 'warning', 'top', 'right');
                        $('#editrouteInfoModal').modal('hide');
                    }
                })
                // ajax closing tag
            }
        })

        
    });

    // DELETE route 
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
                    url: '<?php echo base_url()?>route/delete_route/',
                    type: "POST",
                    data: { id: id },
                
                    success: function(data){
                        refresh()
                        showNotification('delete', 'Successfully deleted a route.', 'danger', 'top', 'right');
                    }
                // ajax closing tag
                })
            }
        })
        // End of Confirmation

        
    });
    // CLOSING TAG
});
</script>
