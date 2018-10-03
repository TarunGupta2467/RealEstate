
<?php
require $this->DOC_ROOT . '/includes/adminheader.php';
?>

<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">My Dashboard</li>
        </ol>
        <!-- Icon Cards-->
        <div class="row">
            <div class="col-xl-6 col-sm-6 mb-6">
                <div class="card text-white bg-primary o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-comments"></i>
                        </div>
                        <div class="mr-5"><?php echo $args[1]; ?> Properties!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="adminpropertypage">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6 mb-6">
                <div class="card text-white bg-warning o-hidden h-100">
                    <div class="card-body">
                        <div class="card-body-icon">
                            <i class="fa fa-fw fa-list"></i>
                        </div>
                        <div class="mr-5"><?php echo $args[0]; ?> Enquiries!</div>
                    </div>
                    <a class="card-footer text-white clearfix small z-1" href="adminenquirylisting">
                        <span class="float-left">View Details</span>
                        <span class="float-right">
                            <i class="fa fa-angle-right"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <!-- Area Chart Example-->





        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data Table Example
                <a href="<?php echo $this->BASE_URL . 'public/adminpropertypage/adminaddproperty'; ?>"> 
                    <button class="btn btn-primary" style="float:right;">Add New </button>
                </a></div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                        <thead>
                            <tr> 
                                <th>Property Id</th>
                                <th>Plot area</th>
                                <th>Price</th>
                                <th>Address</th>
                                <th>Modified Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($args[2] as &$value) { ?>
                                <tr>
                                    <td>
                                        <?php echo $value[0]; ?>
                                    </td>
                                    <td>
                                        <?php echo $value[1]; ?>
                                    </td>
                                    <td>
                                        <?php echo $value[2]; ?>
                                    </td>
                                    <td>
                                        <?php echo $value[3] . ' ' . $value[4] . ' ' . $value[5] .
                                        ' ' . $value[6] . ' ' . $value[7];
                                        ?>
                                    </td>
                                    <td>
                                        <?php echo $value[8]; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo $this->BASE_URL . 'public/adminpropertypage/editpropertyview?id=' . $value[0]; ?>"
                                           <button class="btn btn-primary">Edit</button>
                                        </a>
                                        <form action="<?php echo $this->BASE_URL . 'public/adminpropertypage/remove?id=' . $value[0]; ?>" method="post"> 

                                            <button class="btn btn-primary" onclick="confirmation(event);" type="submit">Remove</button>

                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->

    <?php
    require $this->DOC_ROOT . 'includes/adminfooter.php';
    ob_get_flush();
    ?>
    <script>
        function confirmation(event) {
            if (confirm("Are You Really Want to Remove")) {
            } else
                event.preventDefault();
        }
    </script>