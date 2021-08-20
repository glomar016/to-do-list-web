<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<?php $this->load->view('user/includes/head.php') ?>

<body>
    <div id="wrapper">

        <!-- Navbar -->
        <?php $this->load->view('user/includes/navbar.php')?>

		<!-- Dropdown Structure -->
        <?php $this->load->view('user/includes/dropdown.php')?>

        <!--/. Sidebar  -->
        <?php $this->load->view('user/includes/sidebar.php')?>
        <!-- /. NAV SIDE  -->

        <div id="page-wrapper">

		    <div class="header"> 
                <h1 class="page-header">
                    Task <small></small>
                </h1>
                    <ol class="breadcrumb">
                        <li class="active">Task</li>
                        <li><a href="<?php echo base_url()?>home">Home</a></li>
                    </ol> 				
		    </div>
            <div id="page-inner">
                
                <!-- Add form -->
                <div class="card">
                    <div class="card-action" id="card-action">
                        Add New Task
                    </div>
                    <div class="card-content">
                        <form class="col s12" id="task_form_create">

                            <div class="row" hidden>
                                <div class="form-group col s6">
                                    <label for="title_create">ID</label>
                                    <input id="id_create" name="id_create" type="text" class="form-control" hidden>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col s6">
                                    <label for="title_create">Title</label>
                                    <input id="title_create" name="title_create" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col s12">
                                    <label for="description_create">Description</label>
                                    <textarea class="form-control" id="description_create" name="description_create" rows="6"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col s6">
                                    <label for="start_date_create">Start Date</label>
                                    <input id="start_date_create" name="start_date_create" type="datetime-local" class="form-control ">
                                </div>
                                <div class="form-group col s6">
                                    <label for="end_date_create">Due Date</label>
                                    <input id="end_date_create" name="end_date_create" type="datetime-local" class="form-control ">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col s12">
                                    <div class="pull-right" id="btn_create">
                                        <input type="submit" id="btn_form_create" class="btn btn-primary" value="Submit">
                                        
                                        <!-- <input type="submit" id="btn_delete" class="btn btn-primary" value="Submit"> -->
                                    </div>
                                    <div class="pull-right" id="btn_edit" hidden>
                                        <input type="submit" id="btn_form_cancel" class="btn btn-secondary" value="Cancel">
                                        <input type="submit" id="btn_form_edit" class="btn btn-warning" value="Update">

                                        <!-- <input type="submit" id="btn_delete" class="btn btn-primary" value="Submit"> -->
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Card Table -->
                <div class="card">
                        <div class="card-action">
                            List of Task
                        </div>
                        <div class="card-content">
                            <div class="table">
                                <table class="table" id="taskTable">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Date Created</th>
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Start Date</th>
                                            <th>Due Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        <!-- pagewrapper -->
        </div>
    <!-- Wrapper -->
    </div>

    <!-- JS Scripts-->
    <?php $this->load->view('user/includes/script.php')?>

    <script>
    function loadtable(){
        taskDataTable = $('#taskTable').DataTable( {
            "ajax": "<?php echo base_url()?>user/task/show_task/",
            "columns": [
                { data: "id"},
                { data: "created_at"},
                { data: "title"},
                { data: "description" },
                { data: "start_date", render: function(data, type, row){
                    return moment(data).format('LLL');
                }},
                { data: "end_date", render: function(data, type, row){
                    return moment(data).format('LLL');
                }},
                { data: "status", render: function(data, type, row){
                        if(data == "Active"){
                            return '<div class="btn-group">'+
                                    '<button class="btn btn-warning btn-sm btn_edit" id="'+row.id+'" title="Edit" type="button" ><i class="material-icons dp48">system_update_alt</i> Edit</button>'+
                                    '<button class="btn btn-danger btn-sm btn_delete" id="'+row.id+'" title="Delete" type="button"> <i class="material-icons dp48">delete</i> Delete</button></div>';
                        }   
                        else{
                            return '<button>Activate</button>';
                        }
                    }
                    
                },

            ],

            "aoColumnDefs": [{ "bVisible": false, "aTargets": [0, 1] }],
            "order": [[1, "desc"]]
        })
    }

    loadtable();
    
    function refresh(){
        var url = "<?php echo base_url()?>user/task/show_task/";

        taskDataTable.ajax.url(url).load();
    }

    $('#btn_form_create').on('click', function(e){
        e.preventDefault()

        let form = $('#task_form_create')

        $.ajax({
            url: '<?php echo base_url()?>user/task/add_task/',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",

            success: function(data){
                refresh()
                $('#task_form_create').trigger('reset')
                $('#description_create').html("")
            }
        })
    })

    $(document).on('click', ".btn_edit", function(){
        let id = this.id

        $.ajax({
            url: '<?php echo base_url()?>user/task/get_task/',
            type: "POST",
            data: {id: id},
            dataType: "JSON",

            success: function(data){
                $('#id_create').val(data.data.id)
                $('#title_create').val(data.data.title)
                $('#description_create').html(data.data.description)
                $('#start_date_create').val(data.data.start_date)
                $('#end_date_create').val(data.data.end_date)

                $('#card-action').html('Edit Task')
                $('#btn_create').attr('hidden', true)
                $('#btn_edit').attr('hidden', false)
            }
        })
    })

    $(document).on('click', ".btn_delete", function(){
        let id = this.id

        $.ajax({
            url: '<?php echo base_url()?>user/task/delete_task/',
            type: "POST",
            data: {id: id},
            dataType: "JSON",

            success: function(data){
                refresh()
            }
        })
    })

    $('#btn_form_cancel').on('click', function(e){
        e.preventDefault()

        $('#task_form_create').trigger('reset')
        $('#description_create').html("")
        $('#card-action').html('Add Task')
        $('#btn_create').attr('hidden', false)
        $('#btn_edit').attr('hidden', true)
    })

    $('#btn_form_edit').on('click', function(e){
        e.preventDefault()

        let form = $('#task_form_create')

        $.ajax({
            url: '<?php echo base_url()?>user/task/update_task/',
            type: "POST",
            data: form.serialize(),
            dataType: "JSON",

            success: function(data){
                refresh()
                console.log(data)
                $('#task_form_create').trigger('reset')
                $('#description_create').html("")
                $('#card-action').html('Add Task')
                $('#btn_create').attr('hidden', false)
                $('#btn_edit').attr('hidden', true)
            }
        })
    })

    </script>
	

</body>

</html>
