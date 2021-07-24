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
                <div class="content" style="padding-top: 0px;">
                    <div class="container-fluid">
                        <!-- TABLE -->
                        <div class="card">
                            <h4 class="card-header card-header-info">List of Online Payment</h4>
                            <div class="card-body">
                                <table id="onlinePaymentDataTable" class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Reference Number</th>
                                            <th>Schedule Date</th>
                                            <th>Passenger Name</th>
                                            <th>Total Amount</th>
                                            <th>Date Created</th>
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
<script>
// DATA TABLES
function loadtable() {
    onlinePaymentDataTable = $('#onlinePaymentDataTable').DataTable({
        "ajax": "<?php echo base_url()?>view_online_payment/show_online_payment",
        "columns": [{
                data: "id"
            },
            {
                data: "reservation.referenceNumber"
            },
            {
                data: "reservation.scheduleName"
            },
            {
                data: "reservation.name"
            },
            {
                data: "reservation.totalAmount"
            },
            {
                data: "created_at"
            }

        ],

        "aoColumnDefs": [{
            "bVisible": false,
            "aTargets": [0, 5]
        }],
        "order": [
            [5, "desc"]
        ]
    })
}

loadtable();

function refresh() {
    var url = "<?php echo base_url()?>terminal/show_terminal";

    terminalDataTable.ajax.url(url).load();
}
</script>

<!-- FIXED SCRIPTS -->
<?php $this->load->view('includes/fixed_scripts.php')?>

</html>