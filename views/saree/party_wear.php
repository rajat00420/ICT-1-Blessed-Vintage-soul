

<body>
    <!-- *** TOPBAR ***
 _________________________________________________________ -->
    

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    
    <!-- /#navbar -->

    <!-- *** NAVBAR END *** -->

    <div id="all">

        <div id="content">
            <div class="container">

                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>Sarees</li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <!-- *** MENUS AND FILTERS ***
 _________________________________________________________ -->
                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Categories</h3>
                        </div>

                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked category-menu">
                                <li>
                                    <a href="<?php echo base_url('saree/party_wear')?>">Ocassion <span class="badge pull-right"></span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url('saree/party_wear');?>">Party Wear</a>
                                        </li>
                                        <li><a href="<?php echo base_url('saree/bridal_wear');?>">Bridal</a>
                                        </li>
                                        <li><a href="<?php echo base_url('saree/festive_wear');?>">Festive</a>
                                        </li>
                                        </li>
                                    </ul>
                                </li>
                                <li class="active">
                                    <a href="<?php echo base_url('saree/party_wear')?>">Style<span class="badge pull-right"></span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url('saree/party_wear')?>">Printed</a>
                                        </li>
                                        <li><a href="<?php echo base_url('saree/party_wear')?>">Embroidered</a>
                                        </li>
                                        <li><a href="<?php echo base_url('saree/party_wear')?>">South</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('saree/party_wear')?>">Fabric  <span class="badge pull-right"></span></a>
                                    <ul>
                                        <li><a href="<?php echo base_url('saree/party_wear')?>">Silk</a>
                                        </li>
                                        <li><a href="<?php echo base_url('saree/party_wear')?>">Cotton</a>
                                        </li>
                                        <li><a href="<?php echo base_url('saree/party_wear')?>">Shiffon</a>
                                        </li>
                                        </li>
                                    </ul>
                                </li>

                            </ul>

                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu">

                        <div class="panel-heading">
                            <h3 class="panel-title">Colours <a class="btn btn-xs btn-danger pull-right" href="#"><i class="fa fa-times-circle"></i> Clear</a></h3>
                        </div>

                        <div class="panel-body">

                            <form>
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour white"></span> White (14)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour blue"></span> Blue (10)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour green"></span> Green (20)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour yellow"></span> Yellow (13)
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> <span class="colour red"></span> Red (10)
                                        </label>
                                    </div>
                                </div>

                                <button class="btn btn-default btn-sm btn-primary"><i class="fa fa-pencil"></i> Apply</button>

                            </form>

                        </div>
                    </div>

                    <!-- *** MENUS AND FILTERS END *** -->

                    <div class="banner">
                        <a href="#">
                            <img src="img/banner.jpg" alt="sales 2018" class="img-responsive">
                        </a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="box">
                        <h1>Ladies</h1>
                        <p>In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
                    </div>

                    <div class="box info-bar">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 products-showing">
                                Showing <strong>12</strong> of <strong>25</strong> products
                            </div>

                            <div class="col-sm-12 col-md-8  products-number-sort">
                                <div class="row">
                                    <form class="form-inline">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-number">
                                                <strong>Show</strong>  <a href="#" class="btn btn-default btn-sm btn-primary">12</a>  <a href="#" class="btn btn-default btn-sm">24</a>  <a href="#" class="btn btn-default btn-sm">All</a> products
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="products-sort-by">
                                                <strong>Sort by</strong>
                                                <select name="sort-by" class="form-control">
                                                    <option>Price</option>
                                                    <option>Name</option>
                                                    <option>Sales first</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row products">

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url('saree/detail');?>">
                                                <img src="<?php echo base_url();?>assets/home-css/img/party1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url('saree/detail');?>">
                                                <img src="<?php echo base_url();?>assets/home-css/img/party1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('saree/detail');?>" class="invisible">
                                    <img src="<?php echo base_url();?>assets/home-css/img/party1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo base_url('saree/detail');?>">Fur coat with very but very very long name</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="<?php echo base_url('saree/detail');?>" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url('saree/detail');?>">
                                                <img src="<?php echo base_url();?>assets/home-css/img/party3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url('saree/detail');?>">
                                                <img src="<?php echo base_url();?>assets/home-css/img/party3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('saree/detail');?>" class="invisible">
                                    <img src="<?php echo base_url();?>assets/home-css/img/party2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo base_url('saree/detail');?>">White Blouse Armani</a></h3>
                                    <p class="price"><del>$280</del> $143.00</p>
                                    <p class="buttons">
                                        <a href="<?php echo base_url('saree/detail');?>" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>
                                </div>
                                <!-- /.text -->

                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url('saree/detail');?>">
                                                <img src="<?php echo base_url();?>assets/home-css/img/party5.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url('saree/detail');?>">
                                                <img src="<?php echo base_url();?>assets/home-css/img/party5.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('saree/detail');?>" class="invisible">
                                    <img src="<?php echo base_url();?>assets/home-css/img/party3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo base_url('saree/detail');?>">Black Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="<?php echo base_url('saree/detail');?>" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url('saree/detail');?>">
                                                <img src="<?php echo base_url();?>assets/home-css/img/party4.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url('saree/detail');?>">
                                                <img src="<?php echo base_url();?>assets/home-css/img/party4.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('saree/detail');?>" class="invisible">
                                    <img src="<?php echo base_url();?>assets/home-css/img/party1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo base_url('saree/detail');?>">Black Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="<?php echo base_url('saree/detail');?>" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url('saree/detail');?>">
                                                <img src="<?php echo base_url();?>assets/home-css/img/party5.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url('saree/detail');?>">
                                                <img src="<?php echo base_url();?>assets/home-css/img/party5.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('saree/detail');?>" class="invisible">
                                    <img src="<?php echo base_url();?>assets/home-css/img/party3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo base_url('saree/detail');?>">White Blouse Versace</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="<?php echo base_url('saree/detail');?>" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->

                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->
                            </div>
                            <!-- /.product -->
                        </div>

                        <div class="col-md-4 col-sm-6">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="<?php echo base_url('saree/detail');?>">
                                                <img src="<?php echo base_url();?>assets/home-css/img/party2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="<?php echo base_url('saree/detail');?>">
                                                <img src="<?php echo base_url();?>assets/home-css/img/party2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="<?php echo base_url('saree/detail');?>" class="invisible">
                                    <img src="<?php echo base_url();?>assets/home-css/img/party2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><a href="<?php echo base_url('saree/detail');?>">Fur coat</a></h3>
                                    <p class="price">$143.00</p>
                                    <p class="buttons">
                                        <a href="<?php echo base_url('saree/detail');?>" class="btn btn-default">View detail</a>
                                        <a href="basket.html" class="btn btn-primary"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </p>

                                </div>
                                <!-- /.text -->

                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <!-- /.ribbon -->

                            </div>
                            <!-- /.product -->
                        </div>
                        <!-- /.col-md-4 -->
                    </div>
                    <!-- /.products -->

                    <div class="pages">

                        <p class="loadMore">
                            <a href="#" class="btn btn-primary btn-lg"><i class="fa fa-chevron-down"></i> Load more</a>
                        </p>

                        <ul class="pagination">
                            <li><a href="#">&laquo;</a>
                            </li>
                            <li class="active"><a href="#">1</a>
                            </li>
                            <li><a href="#">2</a>
                            </li>
                            <li><a href="#">3</a>
                            </li>
                            <li><a href="#">4</a>
                            </li>
                            <li><a href="#">5</a>
                            </li>
                            <li><a href="#">&raquo;</a>
                            </li>
                        </ul>
                    </div>


                </div>
                <!-- /.col-md-9 -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /#content -->

