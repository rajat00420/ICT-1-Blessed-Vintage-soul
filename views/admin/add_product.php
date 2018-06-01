     <!-- <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script>


            $(document).ready(function() {

                $(".only_char").keypress(function(event){
       var inputValue = event.which;
            // allow letters and whitespaces only.
            if( inputValue !== 8 && inputValue !== 46 ){
            if (!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) {
                
                    event.preventDefault();
                }
                
            }
    });

               
                });
                </script>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add Product</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                        
                            <form id="venueform" action="" method="POST" enctype="multipart/form-data">

                    <div class="card">

                          <div class="body">

                            <h2 class="card-inside-title">Product Details</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    
                                   <div class="form-group">
                                    <div class="form-line">
                                            <input type="file" class="form-control" id="v_banner" name="file" placeholder="Product Banner" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="form-line">
                                             <input class="form-control" type="text" id="link" name="link"  placeholder="Product Name" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="form-line">
                                             <input class="form-control" id="event_date" name="product_date" placeholder="MM/DD/YYYY" type="text"/>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    <div class="form-line">
                                             <input class="form-control" id="event_date" name="product_date" placeholder="Product Description" type="text"/>
                                        </div>
                                    </div>

                                     
                                     
                                    <div class="form-group">
                                     <input type="submit" class="btn btn-primary waves-effect" value="Submit"/>
                                   </div>
                                    </div>


                                </div>
                            </div>

                            
                                    
                                

                            

            <!-- <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button> -->

                        </div>
                            </form>
                            </div>
                            </div>
                            </div>

                   
    </section>