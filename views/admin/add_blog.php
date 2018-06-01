     <!-- <script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<script>


            $(document).ready(function() {

    //             $(".only_char").keypress(function(event){
    //    var inputValue = event.which;
    //         // allow letters and whitespaces only.
    //         if( inputValue !== 8 && inputValue !== 46 ){
    //         if (!(inputValue >= 65 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)) {
                
    //                 event.preventDefault();
    //             }
                
    //         }
    // });

                $("#venueform").validate({
                    rules: {
                        'venue_name': {
                            required: true,
                        },
                        'city_name': {
                           required: true,
                       },
                       'file': {
                           required: true,
                       },
                       'venue_lat': {
                           required: true,
                       },
                       'venue_long': {
                           required: true,
                       },
                       'venue_address': {
                           required: true,
                       },
                       'owner_name': {
                           required: true,
                       },
                       'owner_email': {
                           required: true,
                            email: true,
                       },
                       'owner_pwd': {
                           required: true,
                           minlength: 5
                       },
                        'venue_ph': {
                            required: true,
                            minlength: 10,
                            maxlength: 10,
                            number: true
                        }
                    },
                    messages: {

                       'venue_name': {
                           required: "Venue Name is required.",
                       },
                       'city_name': {
                           required: "City Name is required.",
                       },
                        'owner_email': {
                            required: "Owner Email ID is required.",
                            email: "Please enter a valid email address.",
                        },
                        'owner_pwd': {
                            required: "Owner Password is required.",
                            minlength: "Password atleast 5 characters long.",
                        },
                      
                       'owner_name': {
                           required: "Owner Name is required.",
                       },
                        'venue_ph': {
                            required: "Mobile Number is required.",
                            minlength: "Enter at least 10 digits.",
                            maxlength: "Mobile Number must have 10 digits",
                            number: "Mobile Number must only have numbers.",
                        },
                       'file': {
                           required: "File is required.",
                       },
                       'venue_lat': {
                           required: "Venue Latitude is required.",
                       },
                       'venue_long': {
                           required: "Venue Longitude is required.",
                       },
                       'venue_address': {
                           required: "Venue Address is required.",
                       },

                    },
                    // submitHandler: submitForm,
                });
                });
                </script>

<section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Add Venue</h2>
            </div>
            <!-- Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">


                            <form id="venueform" action="#" method="POST" enctype="multipart/form-data">

                    <div class="card">

                          <div class="body">

                            <h2 class="card-inside-title">Blog Details</h2>
                            <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                    <div class="form-line">
                                            <input type="text" class="form-control only_char" placeholder="Blog Name" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                        <input type="text"  class="form-control only_char" placeholder="Title"/>
                                    </div>
                                    </div>

                                    <div class="form-group">
                                    <div class="form-line">
                                            <input type="file" class="form-control" id="v_banner" name="file" placeholder="Blog Banner" />
                                        </div>
                                    </div>

                                    
                                        

                                 
                                    
                                    

                                    
                                    </div>


                                </div>
                            </div>

                            <div class="col-sm-12">
                            
                            <!-- <div class="row clearfix"> -->
                                <div class="col-sm-12">
                                    
                                    <div class="form-group">
                                     <input type="submit" class="btn btn-primary waves-effect" value="Submit"/>
                                   </div>
                                </div>
                               
                            </div>

                            

            <!-- <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button> -->

                        </div>
                            </form>

                    </div>
                </div>

            </div>

        </div>
    </section>