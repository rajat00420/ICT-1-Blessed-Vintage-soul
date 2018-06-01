<script src="http://salentro.quicquik.com/ci/darek/assets/plugins/jquery/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script>


            $(document).ready(function() {

                jQuery('.login_alert').hide();
                jQuery('.login_alert_danger').hide();


                $("#sign_in").validate({
                    rules: {
                        'email': {
                            required: true,
                            email: true,
                        },
                        'password': {
                            required: true,
                            minlength: 5
                        }
                       
                    },
                    messages: {
                        'email': {
                            required: "Email ID is required.",
                            email: "Please enter a valid email address.",
                        },
                        'password': {
                            required: "Password is required.",
                            minlength: "Password atleast 5 characters long.",
                        },
                      
                    },
                    submitHandler: submitForm,
                });

                function submitForm() {

                    var redirecturl = "<?php echo base_url('admin/login_user'); ?>";
                    var email = $("#email").val();
                    var password = $("#password").val();
                    $.ajax({
                        type: 'POST',
                        url: redirecturl,
                        data: {email: email, password: password},
                        dataType: "json",
                        success: function(response) {
                            if (response.status == 'true')
                            {
                                var baseurl = "<?php echo base_url(); ?>";
                                window.location.href = baseurl + "admin/dashboard";
                            }
                           else if(response.status == 'false1') {
                               jQuery('.login_alert_danger').show();
                               jQuery('.login_alert_danger').html(response.result);
                               }else{
                                jQuery('.login_alert_danger').show();
                               jQuery('.login_alert_danger').html(response.result);
                               }
                           
                        }
                    });
                    return false;


                }

            });



        </script>
        <script>
            $(function() {

                if (localStorage.chkbx && localStorage.chkbx != '') {
                    $('#rememberme').attr('checked', 'checked');
                    $('#email').val(localStorage.InputEmail);
                    $('#password').val(localStorage.InputPassword1);
                } else {
                    $('#rememberme').removeAttr('checked');
                    $('#email').val('');
                    $('#password').val('');
                }

                $('#rememberme').click(function() {

                    if ($('#rememberme').is(':checked')) {
                        // save username and password
                        localStorage.InputEmail = $('#email').val();
                        localStorage.InputPassword1 = $('#password').val();
                        localStorage.chkbx = $('#rememberme').val();
                    } else {
                        localStorage.InputEmail = '';
                        localStorage.InputPassword1 = '';
                        localStorage.chkbx = '';
                    }
                });
            });

        </script>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin<b>Login</b></a>
            <!-- <small>Admin BootStrap Based - Material Design</small> -->
        </div>
        <div id="login-alert" class="alert alert-success col-sm-12 login_alert"></div>
        <div id="login-alert-danger" class="alert alert-danger col-sm-12 login_alert_danger"></div>
        <span class="alert alert-success col-sm-12 login_alert"><?php echo $this->session->flashdata('msg')?></span>
        <div class="card">
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">SIGN IN</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>