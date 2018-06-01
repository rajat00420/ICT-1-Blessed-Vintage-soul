<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="robots" content="all,follow">
        <meta name="googlebot" content="index,follow,snippet,archive">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Obaju e-commerce template">
        <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
        <meta name="keywords" content="">

        <title>
            Blessed Vintage Soul
        </title>

        <meta name="keywords" content="">

        <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

        <!-- styles -->
        <link href="<?php echo base_url(); ?>assets/home-css/css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/home-css/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/home-css/css/animate.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/home-css/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/home-css/css/owl.theme.css" rel="stylesheet">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		

        <!-- theme stylesheet -->
        <link href="<?php echo base_url(); ?>assets/home-css/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

        <!-- your stylesheet with modifications -->
        <link href="<?php echo base_url(); ?>assets/home-css/css/custom.css" rel="stylesheet">

        <script src="<?php echo base_url(); ?>assets/home-css/js/respond.min.js"></script>

        <link rel="shortcut icon" href="favicon.png">



    </head>

    <body>

        <!-- *** TOPBAR ***
     _________________________________________________________ -->
        <div id="top">
            <div class="container">
                <div class="col-md-6 offer" data-animate="fadeInDown">
                   
                </div>
                <div class="col-md-6" >
                    <ul class="menu">
                        <li><a href="#" data-toggle="modal" data-target="#login-modal">Login</a>
                        </li>
                        <li><a href="<?php echo base_url('home/signup');?>">Register</a>
                        </li>
                        <li><a href="<?php echo base_url('home/contact');?>">Contact</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true">
                <div class="modal-dialog modal-sm">

                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" id="close-form" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title" id="Login">Customer login</h4>
                        </div>
                        <div class="modal-body">
                            <div id="login-alert" class="alert alert-success col-sm-12 login_alert"></div>
                            <div id="login-alert-danger" class="alert alert-danger col-sm-12 login_alert_danger"></div>
                            <span class="alert alert-success col-sm-12 login_alert"><?php echo $this->session->flashdata('msg') ?></span>
                            <form id="loginform" action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="password">
                                </div>

                                <p class="text-center">
                                    <input type="submit" class="btn btn-primary" value="Login"><i class="fa fa-sign-in"></i> 
                                </p>

                            </form>

                            <p class="text-center text-muted">Not registered yet?</p>
                            <p class="text-center text-muted"><a href="<?php echo base_url('home/signup');?>"><strong>Register now</strong></a>! It is easy and done in 1&nbsp;minute and gives you access to special discounts and much more!</p>

                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- *** TOP BAR END *** -->