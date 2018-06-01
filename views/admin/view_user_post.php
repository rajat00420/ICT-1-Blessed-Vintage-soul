<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>View Post</h2>
        </div>
        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            
                            Post Details
                        </h2></br>
                        <!-- <ul class="header-dropdown m-r--5">
                            <li class="dropdown">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="material-icons">more_vert</i>
                                </a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else here</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    </div>
                    <div class="body table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th>Sr.Number</th>
                                    <th>Post Title</th>
                                    <th>Post Video</th>
                                    <th>Post Image</th>
                                    <th>Posted By</th>
                                    <th>Date & Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>ffhfgh</td>
                                            <td>fgdfg</td>
                                            <td>gfh</td>
                                            <td>gfh</td>
                                            <td>12-10-2018</td>
                                            <td>
                                                 <a href="#" class="btn btn-danger">Remove</a>
                                            </td>
                                        </tr>
                                         <tr>
                                            <th scope="row">2</th>
                                            <td>ffhfgh</td>
                                            <td>fgdfg</td>
                                            <td>gfh</td>
                                            <td>gfh</td>
                                            <td>12-10-2018</td>
                                            <td>
                                                 <a href="#" class="btn btn-danger">Remove</a>
                                            </td>
                                        </tr>
                                         <tr>
                                            <th scope="row">3</th>
                                            <td>ffhfgh</td>
                                            <td>fgdfg</td>
                                            <td>gfh</td>
                                            <td>gfh</td>
                                            <td>12-10-2018</td>
                                            <td>
                                                 <a href="#" class="btn btn-danger">Remove</a>
                                            </td>
                                        </tr>
       
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script language="JavaScript" type="text/javascript">
    function checkDelete() {
        return confirm('Are you sure?');
    }
</script>
<script>
$(document).ready(function() {
	
    $('#myTable').DataTable( {
       "pagingType": "full_numbers",
   "paging": true,
   "lengthMenu": [10, 25, 50, 75, 100],
    } );
} );
</script>