<html>

<head>
    <link rel="shortcut icon" href="<?php echo base_url()?>resources/assets/users/assets/images/favicon.png"
        type="image/png">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="<?php echo base_url()?>resources/assets/demo/demo.css" rel="stylesheet" />
    <!------ Include the above in your HEAD tag ---------->

<style>
    .register { background: -webkit-linear-gradient(left, #48a261, #343a40); padding: 3%; } .register-left { text-align: center; color: #fff; margin-top: 4%; } .register-left input { border: none; border-radius: 1.5rem; padding: 2%; width: 60%; background: #f8f9fa; font-weight: bold; color: #383d41; margin-top: 30%; margin-bottom: 3%; cursor: pointer; } .register-right { background: #ffffffeb; border-top-left-radius: 10% 50%; border-bottom-left-radius: 10% 50%; } .register-left img { margin-top: 15%; margin-bottom: 5%; width: 25%; -webkit-animation: mover 2s infinite alternate; animation: mover 1s infinite alternate; } @-webkit-keyframes mover { 0% { transform: translateY(0); } 100% { transform: translateY(-20px); } } @keyframes mover { 0% { transform: translateY(0); } 100% { transform: translateY(-20px); } } .register-left p { font-weight: lighter; padding: 2%; margin-top: 0%; } .register .register-form { padding: 10%; margin-top: 10%; } .btnRegister { float: right; margin-top: 10%; border: none; border-radius: 1.5rem; padding: 2%; background: #48a261; color: #fff; font-weight: 600; width: 50%; cursor: pointer; } .register .nav-tabs { margin-top: 3%; border: none; background: #0062cc; border-radius: 1.5rem; width: 28%; float: right; } .register .nav-tabs .nav-link { padding: 2%; height: 34px; font-weight: 600; color: #fff; border-top-right-radius: 1.5rem; border-bottom-right-radius: 1.5rem; } .register .nav-tabs .nav-link:hover { border: none; } .register .nav-tabs .nav-link.active { width: 100px; color: #0062cc; border: 2px solid #0062cc; border-top-left-radius: 1.5rem; border-bottom-left-radius: 1.5rem; } .register-heading { text-align: center; margin-top: 8%; margin-bottom: -15%; color: #495057; } input, select, textarea { width: 850px; } .alert.alert-with-icon i[data-notify="icon"] { font-size: 30px; display: block; left: 15px; position: absolute; top: 50%; margin-top: -15px; } [data-notify="container"]{ background-color: #f55145; color: #fff; } [data-notify="message"]{ margin-left: 40px; } .animated { background-image: url(/css/images/logo.png); background-repeat: no-repeat; background-position: left top; -webkit-animation-duration: 0.3s; animation-duration: 0.3; -webkit-animation-fill-mode: both; animation-fill-mode: both; } @-webkit-keyframes fadeInDown { 0% { opacity: 0; -webkit-transform: translateY(-20px); } 100% { opacity: 1; -webkit-transform: translateY(0); } } @keyframes fadeInDown { 0% { opacity: 0; transform: translateY(-20px); } 100% { opacity: 1; transform: translateY(0); } } .fadeInDown { -webkit-animation-name: fadeInDown; animation-name: fadeInDown; } @-webkit-keyframes fadeOutUp { 0% { opacity: 1; -webkit-transform: translateY(0); } 100% { opacity: 0; -webkit-transform: translateY(-20px); } } @keyframes fadeOutUp { 0% { opacity: 1; transform: translateY(0); } 100% { opacity: 0; transform: translateY(-20px); } } .fadeOutUp { -webkit-animation-name: fadeOutUp; animation-name: fadeOutUp; }
</style>
</head>

<body>
    <div class="container-md register">
        <div class="row">
            <div class="col-md-2 register-left">
                <img src="<?php echo base_url()?>resources/assets/users/assets/images/slider/1.png" alt="" />
                <h3>Welcome</h3>
                <p>We blend insights and strategy to create digital products for forward-thinking organisations.</p>
                <input type="button" id="goBack" value="Go back" /><br />
            </div>
            <div class="col-md-10 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Sign Up as a Passenger</h3>
                        <div class="row register-form" style="max-width: 5000px;">
                            <form id="addUserForm" name="addUserForm" method="post" enctype='multipart/form-data'
                                oninput='confirmPassword.setCustomValidity(confirmPassword.value != password.value ? "Passwords do not match." : "")'>
                                <div class="form-row">
                                    <h5>
                                        Personal Information
                                    </h5>
                                </div>
                                <!-- <div class="col-sm-6 mb-3 frmValidate" style="padding-left: 0;">
                                    <label for="photo" class="col-form-label">Photo</label>
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-image"></i></span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" required="" accept="image/*"
                                                id="photo" name="photo">
                                            <input type="hidden" name="photoDir" id="photoDir" value="">
                                            <label class="custom-file-label" id="custom-file-label"
                                                for="inputGroupFile01">Choose
                                                file</label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label for="exampleInputEmail1">First Name</label>
                                        <input type="text" class="form-control" name="firstName" id="firstName"
                                            aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="exampleInputEmail1">Middle Name</label>
                                        <input type="text" class="form-control" name="middleName" id="middleName"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="exampleInputEmail1">Last Name</label>
                                        <input type="text" class="form-control" name="lastName" id="lastName"
                                            aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label for="birthday" class="birthday">Birthdate</label>
                                        <input type="date" class="form-control" name="birthday" id="birthday"
                                            aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputEmail1" class="gender">Gender</label>
                                        <select class="form-control form-control-md" id="gender" name="gender" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label for="exampleInputEmail1">Email Address</label>
                                        <input type="email" class="form-control" name="email" id="email"
                                            aria-describedby="emailHelp" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="exampleInputPassword1">Municipality</label>
                                        <input type="text" name="municipality" class="form-control" id="municipality"
                                            required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="exampleInputEmail1">Mobile Number</label>
                                        <input type="text" class="form-control" name="mobileNumber" id="mobileNumber"
                                            aria-describedby="emailHelp" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-12">
                                        <label for="exampleInputPassword1">Address</label>
                                        <input type="text" name="address" class="form-control" id="address" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-4">
                                        <label for="exampleInputPassword1">Province</label>
                                        <input type="text" name="province" class="form-control" id="province" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="exampleInputPassword1">Country</label>
                                        <input type="text" name="country" class="form-control" id="country" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="exampleInputPassword1">Zip Code</label>
                                        <input type="text" name="zipCode" class="form-control" id="zipCode" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <h5>
                                        User Information
                                    </h5>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-8">
                                        <label for="exampleInputPassword1">Security Question</label>
                                        <input type="text" name="securityQuestion" class="form-control"
                                            id="securityQuestion" required>
                                    </div>
                                    <div class="form-group col-sm-4">
                                        <label for="exampleInputPassword1">Answer</label>
                                        <input type="text" name="answer" class="form-control" id="answer" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="password"
                                            required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="exampleInputPassword1">Confirm Password</label>
                                        <input type="password" name="confirmPassword" class="form-control"
                                            id="confirmPassword" required>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-success" value="Register">
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Apply as a Hirer</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="10" minlength="10" class="form-control"
                                        placeholder="Phone *" value="" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" value="" />
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Confirm Password *"
                                        value="" />
                                </div>
                                <div class="form-group">
                                    <select class="form-control">
                                        <option class="hidden" selected disabled>Please select your Sequrity Question
                                        </option>
                                        <option>What is your Birthdate?</option>
                                        <option>What is Your old Phone Number</option>
                                        <option>What is your Pet Name?</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php $this->load->view('includes/core_js_files.php')?>
</body>

<?php $this->load->view('includes/fixed_scripts.php')?>

<script>
$("#goBack").click(function() {
    window.location.href = "<?php echo base_url()?>";
});


$('#addUserForm').on('submit', function(e) {
    e.preventDefault();


    var email = document.getElementById('email').value;
    var emailChecker;

    var form = $('#addUserForm');
    // ajax opening tag
    $.ajax({
        url: '<?php echo base_url()?>user/show_user',
        type: "GET",
        dataType: "JSON",

        success: function(data) {
            userInfo = data.data;
            $.ajax({
                url: '<?php echo base_url()?>users/register/register_user',
                type: "POST",
                data: form.serialize(),
                dataType: "JSON",

                success: function(data) {
                    console.log(data.data);

                    if(data.error == true){
                        showNotification('create', data.message[0], 'danger', 'top', 'right');
                    }
                    else{
                        $("#addUserForm").trigger("reset");
                        Swal.fire(
                            'Success!',
                            'Account registered successfully!',
                            'success'
                        )

                        setInterval(function(){
                            window.location.href = "<?php echo base_url()?>"
                        }, 3000)
                        End of Confirmation
                    }

                }
                    // ajax closing tag
            })
        }
        // ajax closing tag
    })
});
</script>

</html>