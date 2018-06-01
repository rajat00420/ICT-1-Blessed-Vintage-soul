

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="<?php echo base_url();?>" data-animate-hover="bounce">
                    <!--<img src="<?php //echo base_url();?>assets/home-css/img/logo.png" alt="Obaju logo" class="hidden-xs">-->
                    <!--<img src="<?php //echo base_url();?>assets/home-css/img/logo-small.png" alt="Obaju logo" class="visible-xs"><span class="sr-only">Obaju - go to homepage</span>-->
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                    <a class="btn btn-default navbar-toggle" href="#">
                        <i class="fa fa-shopping-cart"></i>  <span class="hidden-xs"> items in cart</span>
                    </a>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="<?php echo base_url();?>">Home</a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Sarees <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Occasion</h5>
                                            <ul>
                                                <li><a href="<?php echo base_url('saree/party_wear');?>">Party Wear</a>
                                                </li>
                                                <li><a href="<?php echo base_url('saree/bridal_wear');?>">Bridal wear</a>
                                                </li>
                                                <li><a href="<?php echo base_url('saree/festive_wear');?>">Festive Wear</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Style</h5>
                                            <ul>
                                                <li><a href="<?php echo base_url('saree/party_wear');?>">Embroidered Saree</a>
                                                </li>
                                                <li><a href="<?php echo base_url('saree/printed_wear');?>">Printed Saree</a>
                                                </li>
                                                <li><a href="<?php echo base_url('saree/party_wear');?>">South Saree</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Fabric</h5>
                                            <ul>
                                                <li><a href="<?php echo base_url('saree/party_wear');?>">Cotton Saree</a>
                                                </li>
                                                <li><a href="<?php echo base_url('saree/party_wear');?>">Silk Saree</a>
                                                </li>
                                                <li><a href="<?php echo base_url('saree/party_wear');?>">Chiffon Saree</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Jewelery <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h5>Style</h5>
                                            <ul>
                                                <li><a href="<?php echo base_url('jewelry/earrings_wear');?>">Earrings</a>
                                                </li>
                                                <li><a href="<?php echo base_url('jewelry/necklace');?>">Necklaces</a>
                                                </li>
                                                <li><a href="<?php echo base_url('jewelry/bangle');?>">Bangles and Sets</a>
                                                </li>
                                                <li><a href="<?php echo base_url('jewelry/ring');?>">Rings</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3">
                                            <h5>Work</h5>
                                            <ul>
                                                <li><a href="<?php echo base_url('jewelry/necklace');?>">American Diamonds</a>
                                                </li>
                                                <li><a href="<?php echo base_url('jewelry/necklace');?>">Stone Studded</a>
                                                </li>
                                                <li><a href="<?php echo base_url('jewelry/necklace');?>">Pearls</a>
                                                </li>
                                                <li><a href="<?php echo base_url('jewelry/necklace');?>">Kundan</a>
                                                </li>
                                             </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>
                        </ul>
                    </li>

                    
                        </ul>
                    </li>
                </ul>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="basket-overview">
                    <a href="#" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm"> items in cart</span></a>
                </div>
                <!--/.nav-collapse -->

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->