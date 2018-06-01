 <!-- *** FOOTER ***
 _________________________________________________________ -->
        <div id="footer" data-animate="fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <h4>Pages</h4>

                        <ul>
                            <li><a href="#">About us</a>
                            </li>
                            <li><a href="#">Terms and conditions</a>
                            </li>
                            <li><a href="#">FAQ</a>
                            </li>
                            <li><a href="#">Contact us</a>
                            </li>
                        </ul>

                        <hr>

                        <h4>User section</h4>

                        <ul>
                            <li><a href="<?php echo base_url('home/login'); ?>" data-toggle="modal" data-target="#login-modal">Login</a>
                            </li>
                            <li><a href="<?php echo base_url('home/signup'); ?>">Register</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg hidden-sm">

                    </div>
                    <!-- /.col-md-3 -->

                    <div class="col-md-3 col-sm-6">

                        <h4>Top categories</h4>

                        

                        <h5>Ladies</h5>
                        <ul>
                            
                            
                            <li><a href="#">sarees</a>
                            </li>
                            <li><a href="#">Accessories</a>
                            </li>
                        </ul>

                        <hr class="hidden-md hidden-lg">

                    </div>
                    <!-- /.col-md-3 -->

                    

                    <div class="col-md-3 col-sm-6">

                        <h4>Get the news</h4>

                        

                        <form>
                            <div class="input-group">

                                <input type="text" class="form-control">

                                <span class="input-group-btn">

			    <button class="btn btn-default" type="button">Subscribe!</button>

			</span>

                            </div>
                            <!-- /input-group -->
                        </form>

                        <hr>

                        

                        <!--***p class="social">
                            <a href="#" class="facebook external" data-animate-hover="shake"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter external" data-animate-hover="shake"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="instagram external" data-animate-hover="shake"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="gplus external" data-animate-hover="shake"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="email external" data-animate-hover="shake"><i class="fa fa-envelope"></i></a>
                        </p>


                    </div>
                    <!-- /.col-md-3 -->

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->
        </div>
        <!-- /#footer -->

        <!-- *** FOOTER END *** -->




        <!-- *** COPYRIGHT ***
 _________________________________________________________ -->
       
	   <!-- ***div id="copyright">
            <div class="container">
                <div class="col-md-6">
                    <p class="pull-left">© 2015 Your name goes here.</p>

                </div>
                <div class="col-md-6">
                    <p class="pull-right">Template by <a href="https://bootstrapious.com/e-commerce-templates">Bootstrapious</a> & <a href="https://fity.cz">Fity</a>
                         <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
                    </p>
                </div>
            </div>
        </div ***-->
        <!-- *** COPYRIGHT END *** -->



    </div>
    <!-- /#all -->


    

    <!-- *** SCRIPTS TO INCLUDE ***
 _________________________________________________________ -->
    <script src="<?php echo base_url();?>assets/home-css/js/jquery-1.11.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/home-css/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/home-css/js/jquery.cookie.js"></script>
    <script src="<?php echo base_url();?>assets/home-css/js/waypoints.min.js"></script>
    <script src="<?php echo base_url();?>assets/home-css/js/modernizr.js"></script>
    <script src="<?php echo base_url();?>assets/home-css/js/bootstrap-hover-dropdown.js"></script>
    <script src="<?php echo base_url();?>assets/home-css/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/home-css/js/front.js"></script>
            <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>


<script>
            $(document).ready(function() {

                jQuery('#success-msg').hide();
                jQuery('.login_alert').hide();
                jQuery('.login_alert_danger').hide();
                jQuery('#signup-alert').hide();
                jQuery('.signup_alert_danger').hide();


                $("#loginform").validate({
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

                    var redirecturl = "<?php echo base_url('home/login_user'); ?>";
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
                                window.location.href = baseurl + "home/index";
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
                
                $("#signup-form").validate({
                    rules: {
                     'user_name': {
                            required: true,
                        },
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
                    'user_name': {
                            required: "User Name is required.",
                        },
                        'email': {
                            required: "Email ID is required.",
                            email: "Please enter a valid email address.",
                        },
                        'password': {
                            required: "Password is required.",
                            minlength: "Password atleast 5 characters long.",
                        },
                       
                    },
                    submitHandler: submitForm1,
                });
                
                function submitForm1() {
//                    

                    var redirecturl = "<?php echo base_url('home/save_user'); ?>";
                    var data = $("#signup-form").serialize();

                    $.ajax({
                        type: 'POST',
                        url: redirecturl,
                        data: data,
                        success: function(response) {
//                            
                            var obj = jQuery.parseJSON(response);
                            if (obj.status == "true")
                            {
                                $("#signup-alert").show();
                                jQuery('#signup-alert').html('<span style="color:green;">You have registered successfully.</span>');
                            }
//                            else if(obj.status == 'false')  {
//                               $(".signup_alert_danger").show();
//                                jQuery('#signup_alert_danger').html(obj.');
//                            }
                            else{
                                 $(".signup_alert_danger").show();
                                jQuery('.signup_alert_danger').html('<span style="color:red;">Email ID already exist.</span>');
                            }
                        }
                    });
                    return false;


                }
                });
                </script>
                <script>
        
        jQuery(document).on('click', '#close-form', function(e) {
            jQuery('#login_alert_danger').hide();
            $('#loginform')[0].reset();
            
        });
        
//        jQuery(document).on('click', '#close_button', function(e) {
//            jQuery('#forgotpwd').hide();
//            $('#resetPassword')[0].reset();
//            
//        });
        </script>
</body>

</html>