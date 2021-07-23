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
#addPromoForm,
#editPromoForm,
#viewPromoForm .form-row{
  margin-top: -15px;
}
#addPromoForm .form-row,
#editPromoForm .form-row{
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
                      Add Promo
                  </a>
              </h5>
              <div id="collapse-collapsed" class="collapse" aria-labelledby="heading-collapsed">
                  <div class="card-body">
                  <div class="card-body">
                  <form id="addPromoForm" name="addPromoForm">
                      <div class="form-row">
                          <div class="form-group col-sm-12">
                          <input hidden type="text" value="<?php echo($this->session->userdata['logged_in']['userId'])?>" class="form-control" id="userId" name="userId">
                          </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label for="exampleInputEmail1">Bus Type</label>
                            <select class="form-control" id="busTypeInput" name="busTypeInput">           
                                        
                            </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Code</label>
                            <input type="text" class="form-control" name="codeInput"  id="codeInput" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Minimum Seat Reservation</label>
                            <input type="number" class="form-control" name="minimumSeatReservationInput"  id="minimumSeatReservationInput" aria-describedby="emailHelp">
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-3">
                              <label for="exampleInputPassword1">Booking Date From</label>
                              <input type="date" class="form-control" name="bookingDateFromInput" id="bookingDateFromInput">
                          </div>
                          <div class="form-group col-sm-3">
                              <label for="exampleInputPassword1">Booking Date To</label>
                              <input type="date" class="form-control" name="bookingDateToInput" id="bookingDateToInput" >
                          </div>
                          <div class="form-group col-sm-3">
                              <label for="exampleInputPassword1">Travel Date From</label>
                              <input type="date" class="form-control" name="travelDateFromInput" id="travelDateFromInput">
                          </div>
                          <div class="form-group col-sm-3">
                              <label for="exampleInputPassword1">Travel Date To</label>
                              <input type="date" class="form-control" name="travelDateToInput" id="travelDateToInput">
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-4">
                              <label for="exampleInputPassword1">Minimum Amount</label>
                              <input type="number" class="form-control" name="minimumAmountInput" id="minimumAmountInput">
                          </div>
                          <div class="form-group col-sm-4">
                              <label for="exampleInputPassword1">Fixed Discount</label>
                              <input type="number" class="form-control" name="fixedDiscountInput" id="fixedDiscountInput">
                          </div>
                          <div class="form-group col-sm-4">
                              <label for="exampleInputPassword1">Percentage Discount</label>
                              <input type="number" class="form-control" name="percentageDiscountInput" id="percentageDiscountInput">
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-6">
                              <label for="exampleInputPassword1">Effectivity Date</label>
                              <input type="date" class="form-control" name="effectivityDateInput" id="effectivityDateInput">
                          </div>
                          <div class="form-group col-sm-6">
                              <label for="exampleInputPassword1">Deactivation Date</label>
                              <input type="date" class="form-control" name="deactivationDateInput" id="deactivationDateInput">
                          </div>
                      </div>
                        <input type="submit" class="btn btn-primary">
                    </form>
                  </div>
                  </div>
              </div>
          </div>
            <div class="card">
            <h4 class="card-header card-header-info">List of Promos</h4>
              <div class="card-body">
                <table id="promoTable" class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Promo Code</th>
                            <th>Effectivity Date</th>
                            <th>Deactivation Date</th>
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

      <!-- END OF CLOSING TAG OF CONTENT -->

      <!-- VIEW PROMO MODAL -->
      <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="viewModal">View Promo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card-body">
            <form id="viewPromoForm">
                <div class="modal-body">
                <div class="form-row">
                        <div class="form-group col-sm-4">
                            <label for="exampleInputEmail1">Bus Type</label>
                            <span class="form-control" name="busTypeView" id="busTypeView" aria-describedby="emailHelp">
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Code</label>
                            <span class="form-control" name="codeView"  id="codeView" aria-describedby="emailHelp"></span>
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Minimum Seat Reservation</label>
                            <span class="form-control" name="minimumSeatReservationView"  id="minimumSeatReservationView" aria-describedby="emailHelp"></span>
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-3">
                              <label for="exampleInputPassword1">Booking Date From</label>
                              <span class="form-control" name="bookingDateFromView" id="bookingDateFromView"></span>
                          </div>
                          <div class="form-group col-sm-3">
                              <label for="exampleInputPassword1">Booking Date To</label>
                              <span class="form-control" name="bookingDateToView" id="bookingDateToView" ></span>
                          </div>
                          <div class="form-group col-sm-3">
                              <label for="exampleInputPassword1">Travel Date From</label>
                              <span class="form-control" name="travelDateFromView" id="travelDateFromView"></span>
                          </div>
                          <div class="form-group col-sm-3">
                              <label for="exampleInputPassword1">Travel Date To</label>
                              <span class="form-control" name="travelDateToView" id="travelDateToView"></span>
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-4">
                              <label for="exampleInputPassword1">Minimum Amount</label>
                              <span class="form-control" name="minimumAmountView" id="minimumAmountView"></span>
                          </div>
                          <div class="form-group col-sm-4">
                              <label for="exampleInputPassword1">Fixed Discount</label>
                              <span class="form-control" name="fixedDiscountView" id="fixedDiscountView"></span>
                          </div>
                          <div class="form-group col-sm-4">
                              <label for="exampleInputPassword1">Percentage Discount</label>
                              <span class="form-control" name="percentageDiscountView" id="percentageDiscountView"></span>
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-6">
                              <label for="exampleInputPassword1">Effectivity Date</label>
                              <span class="form-control" name="effectivityDateView" id="effectivityDateView"></span>
                          </div>
                          <div class="form-group col-sm-6">
                              <label for="exampleInputPassword1">Deactivation Date</label>
                              <span class="form-control" name="deactivationDateView" id="deactivationDateView"></span>
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

      <!-- EDIT PROMO MODAL -->
      <div class="modal fade" id="editPromoInfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="editPromoInfoModal">Edit Promo</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card-body">
            <form id="editPromoForm">
                <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-sm-12">
                    <input hidden type="text" value="<?php echo($this->session->userdata['logged_in']['userId'])?>" class="form-control" id="editUserId" name="editUserId">
                    </div>
                </div>
                <div class="form-row">
                        <div class="form-group col-sm-4">
                            <input hidden type="text" class="form-control" id="promoIdEdit" name="promoIdEdit">
                            <label for="exampleInputEmail1">Bus Type</label>
                            <select class="form-control" id="busTypeEdit" name="busTypeEdit">           
                            
                            </select>
                        </div>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Code</label>
                            <input type="text" class="form-control" name="codeEdit"  id="codeEdit" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="exampleInputEmail1">Minimum Seat Reservation</label>
                            <input type="text" class="form-control" name="minimumSeatReservationEdit"  id="minimumSeatReservationEdit" aria-describedby="emailHelp">
                        </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-3">
                              <label for="exampleInputPassword1">Booking Date From</label>
                              <input type="date" class="form-control" name="bookingDateFromEdit" id="bookingDateFromEdit">
                          </div>
                          <div class="form-group col-sm-3">
                              <label for="exampleInputPassword1">Booking Date To</label>
                              <input type="date" class="form-control" name="bookingDateToEdit" id="bookingDateToEdit" >
                          </div>
                          <div class="form-group col-sm-3">
                              <label for="exampleInputPassword1">Travel Date From</label>
                              <input type="date" class="form-control" name="travelDateFromEdit" id="travelDateFromEdit">
                          </div>
                          <div class="form-group col-sm-3">
                              <label for="exampleInputPassword1">Travel Date To</label>
                              <input type="date" class="form-control" name="travelDateToEdit" id="travelDateToEdit">
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-4">
                              <label for="exampleInputPassword1">Minimum Amount</label>
                              <input type="text" class="form-control" name="minimumAmountEdit" id="minimumAmountEdit">
                          </div>
                          <div class="form-group col-sm-4">
                              <label for="exampleInputPassword1">Fixed Discount</label>
                              <input type="text" class="form-control" name="fixedDiscountEdit" id="fixedDiscountEdit">
                          </div>
                          <div class="form-group col-sm-4">
                              <label for="exampleInputPassword1">Percentage Discount</label>
                              <input type="text" class="form-control" name="percentageDiscountEdit" id="percentageDiscountEdit">
                          </div>
                      </div>
                      <div class="form-row">
                          <div class="form-group col-sm-6">
                              <label for="exampleInputPassword1">Effectivity Date</label>
                              <input type="date" class="form-control" name="effectivityDateEdit" id="effectivityDateEdit">
                          </div>
                          <div class="form-group col-sm-6">
                              <label for="exampleInputPassword1">Deactivation Date</label>
                              <input type="date" class="form-control" name="deactivationDateEdit" id="deactivationDateEdit">
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

      <!-- DELETE PROMO MODAL -->
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
              <input hidden type="text" id="deletePromoId" name="deletePromoId">
              You're deactivating this promo
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
        promoDataTable = $('#promoTable').DataTable( {
            "ajax": "<?php echo base_url()?>promo/show_promo",
            "columns": [
                { data: "id"},
                { data: "code"},
                { data: "effectivityDate", render: function(data, type, row){
                  return moment(data).format('LL');
                }},
                { data: "deactivationDate", render: function(data, type, row){
                  return moment(data).format('LL');
                }},
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

            "aoColumnDefs": [{ "bVisible": false, "aTargets": [0, 4] }],
            "order": [[4, "desc"]]
        })
    }

    // CHOOSING FIXED DISCOUNT OR PERCENTAGE DISCOUNT PROMO
    var fixedDiscountInput = document.getElementById('fixedDiscountInput');
    var percentageDiscountInput = document.getElementById('percentageDiscountInput');
    var fixedDiscountEdit = document.getElementById('fixedDiscountEdit');
    var percentageDiscountEdit = document.getElementById('percentageDiscountEdit');

    var checker1 = setInterval(function() {
        if(fixedDiscountInput.value !== '') {
          percentageDiscountInput.disabled = true;
        } else {
          //when its clear, it enabled again
          percentageDiscountInput.disabled = false;
        }
        if(percentageDiscountInput.value !== '') {
          fixedDiscountInput.disabled = true
        } else {
          //when its clear, it enabled again
          fixedDiscountInput.disabled = false;
        }
    }, 30);

    var checker2 = setInterval(function() {
        if(fixedDiscountEdit.value !== '') {
          percentageDiscountEdit.disabled = true;
        } else {
          //when its clear, it enabled again
          percentageDiscountEdit.disabled = false;
        }
        if(percentageDiscountEdit.value !== '') {
          fixedDiscountEdit.disabled = true
        } else {
          //when its clear, it enabled again
          fixedDiscountEdit.disabled = false;
        }
    }, 30);

    // GET BUS TYPE
    function getBusType(){
    
    $.ajax({
      url: '<?php echo base_url()?>promo/getBusType',
      type: "GET",
      dataType: "JSON",

      success: function(data){
        var busTypeInfo = data.data;

        var html = "";

        for(var i=0; i < busTypeInfo.length; i++){
          html += `<option value="${busTypeInfo[i].id}">${busTypeInfo[i].name}</option>`
        }
        
        $('#busTypeInput').html(html);
        $('#busTypeEdit').html(html);

      }
    })
  }
  
  getBusType();
  loadtable();
    
    function refresh(){
        var url = "<?php echo base_url()?>promo/show_promo";

        promoDataTable.ajax.url(url).load();
    }

    // CREATE PROMO 
    $('#addPromoForm').on('submit', function(e){
        e.preventDefault();

        var form = $('#addPromoForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>promo/add_promo',
            type: "POST",
            data: form.serialize(),
        
            success: function(data){
              document.getElementById("addPromoForm").reset();
              showNotification('create', 'Successfully added a new promo!', 'success', 'top', 'right');
              refresh();

            }
        // ajax closing tag
        })
    });

    // VIEW PROMO 
    $(document).on("click", ".btn_view", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>promo/get_one_promo',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var promoInfo = data.data;

                $('#viewPromoId').val(id);
                $('#codeView').html(promoInfo.code);
                $('#busTypeView').html(promoInfo.busType.name);
                $('#fixedDiscountView').html(promoInfo.fixedDiscount);
                $('#percentageDiscountView').html(promoInfo.percentageDiscount);
                $('#minimumAmountView').html(promoInfo.minimumAmount);
                $('#minimumSeatReservationView').html(promoInfo.minimumSeatReservation);
                $('#bookingDateToView').html(moment(promoInfo.bookingDateTo).format('LL'));
                $('#bookingDateFromView').html(moment(promoInfo.bookingDateFrom).format('LL'));
                $('#travelDateToView').html(moment(promoInfo.tavelDateTo).format('LL'));
                $('#travelDateFromView').html(moment(promoInfo.travelDateFrom).format('LL'));
                $('#effectivityDateView').html(moment(promoInfo.effectivityDate).format('LL'));
                $('#deactivationDateView').html(moment(promoInfo.deactivationDate).format('LL'));

                $('#viewModal').modal('show');
            }
        // ajax closing tag
        })
    });

    // EDIT PROMO
    $(document).on("click", ".btn_edit", function(){
        var id = this.value;
        // console.log(id);

        $.ajax({
            url: '<?php echo base_url()?>promo/get_one_promo',
            type: "POST",
            data: { id: id },
            dataType: "JSON",
        
            success: function(data){
                console.log(data);
                var promoInfo = data.data;

                $('#promoIdEdit').val(id);
                $('#codeEdit').val(promoInfo.code);
                $('#busTypeEdit').val(promoInfo.busTypeId);
                $('#fixedDiscountEdit').val(promoInfo.fixedDiscount);
                $('#percentageDiscountEdit').val(promoInfo.percentageDiscount);
                $('#minimumAmountEdit').val(promoInfo.minimumAmount);
                $('#minimumSeatReservationEdit').val(promoInfo.minimumSeatReservation);
                $('#bookingDateToEdit').val(moment(promoInfo.bookingDateTo).format('YYYY-MM-DD'));
                $('#bookingDateFromEdit').val(moment(promoInfo.bookingDateFrom).format('YYYY-MM-DD'));
                $('#travelDateToEdit').val(moment(promoInfo.tavelDateTo).format('YYYY-MM-DD'));
                $('#travelDateFromEdit').val(moment(promoInfo.travelDateFrom).format('YYYY-MM-DD'));
                $('#effectivityDateEdit').val(moment(promoInfo.effectivityDate).format('YYYY-MM-DD'));
                $('#deactivationDateEdit').val(moment(promoInfo.deactivationDate).format('YYYY-MM-DD'));

                $('#editPromoInfoModal').modal('show');
            }
        // ajax closing tag
        })
    });

    $('#editPromoForm').on('submit', function(e){
        e.preventDefault();

        console.log('working');

        var form = $('#editPromoForm'); 

        // ajax opening tag
        $.ajax({
            url: '<?php echo base_url()?>promo/edit_promo',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",
        
            success: function(data){
              $("#editPromoInfoModal").modal('hide');
                showNotification('update', 'Successfully updated a promo!', 'warning', 'top', 'right');
                refresh();

            }
        // ajax closing tag
        })
    });

  // DELETE PROMO
$(document).on("click", ".btn_delete", function(){
  var id = this.value;
  $("#deleteModal").modal('show');
  $.ajax({
        url:'<?php echo base_url()?>promo/get_one_promo',
        type: "POST",
        data: { id: id},
        dataType: "JSON",

        success: function(data){
          var promoInfo = data.data;
          var deletePromoId = document.getElementById('deletePromoId');
          deletePromoId.value = promoInfo.id
        }
    })
});

$('.delete-confirm').on('click', function(e){

    e.preventDefault();

    var form = $('#deleteForm');

    $.ajax({
        url:'<?php echo base_url()?>promo/delete_promo',
        type: "POST",
        data: form.serialize(),
        dataType: "JSON",

        success: function(data){
          $("#deleteModal").modal('hide');
          showNotification('delete', 'Deactivated a promo!', 'danger', 'top', 'right');
          refresh();
        }
    })
});

</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>


