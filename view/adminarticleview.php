
<?php
require $this->DOC_ROOT . '/includes/adminheader.php';
?>

<div class="content-wrapper">


    <!-- Area Chart Example-->





    <!-- Example DataTables Card-->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fa fa-table"></i> Data Table Example
            <a href="<?php echo $BASE_URL . 'adminarticle/addarticle'; ?>">
                <button class="btn btn-primary" style="float:right;">Add New </button>
            </a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                    <thead>
                        <tr>
                            <th>Article Id</th>
                            <th>Date</th>
                            <th>about</th>
                            <th>Description</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($args as &$value) { ?>
                            <tr>
                                <td><?php echo $value[0]; ?></td>
                                <td><?php echo $value[1]; ?></td>
                                <td><?php echo $value[2]; ?></td>
                                <td><?php echo $value[3]; ?></td>
                                <td>
                                    <form action="adminarticle/removearticle?id=<?php echo $value[0]; ?>" method="post"> 

                                        <button class="btn btn-primary" onclick="confirmation(event);" type="submit">Remove</button>

                                    </form>
                                    <a href="adminarticle/editarticle?id=<?php echo $value[0]; ?>">
                                        <button class="btn btn-primary">Edit</button>
                                    </a> 
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
<style>
    .icon{
        width:100px;
        height:80px;
    }
</style><
<script>
    function confirmation(event) {
        if (confirm("Are You Really Want to Remove")) {
        } else
            event.preventDefault();
    }
</script>