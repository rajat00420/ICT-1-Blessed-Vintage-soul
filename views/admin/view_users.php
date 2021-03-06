<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" />
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>View Users</h2>
        </div>
        <!-- Basic Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            
                            User Details
                        </h2></br>
                       <!--  <ul class="header-dropdown m-r--5">
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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Added On</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Raj</td>
                                            <td>test@gmail.com</td>
                                             <td>Enable</td>
                                            <td>10-12-2018</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Raj</td>
                                            <td>test1@gmail.com</td>
                                             <td>Enable</td>
                                            <td>10-12-2018</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Raj</td>
                                            <td>test1@gmail.com</td>
                                             <td>Enable</td>
                                            <td>10-12-2018</td>
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