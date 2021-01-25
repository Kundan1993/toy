<!DOCTYPE html>
<html lang="en">
<?php include('common/style.php'); ?>

<body class="sb-nav-fixed">
    <?php include('common/topnav.php');?>
    <div id="layoutSidenav">
        <?php include('common/sidebar.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4"><?php echo $title; ?></h1>
                    <?php  
                        if($this->session->flashdata('item')) {
                            $message = $this->session->flashdata('item');
                            echo '<div class="'.$message['class'].'">
                            <button class="close" data-dismiss="alert">x</button>'.$message['message'].'</div>';
                        }
                    ?>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>Login/dashboard">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Toy</li>
                        <li class="breadcrumb-item active"><?php echo $title; ?></li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table mr-1"></i>
                            <?php echo $title; ?>
                            <button class="btn btn-primary btn-sm float-right" data-toggle="modal"
                                data-target="#addDepartment"><b><i class="fa fa-plus"></i> Department</b></button>
                        </div>
                        
                        <div class="card-body">
                           
                        </div>
                        </div>
                    </div>
                </div>
            </main>
                                            
            <!-- Department update and view  -->
            <div id="VU_department" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
                class="modal fade text-left">
                <div role="document" class="modal-dialog  modal-md">
                    <div class="modal-content " style=" border-radius: 7px !important; ">
                        <div id="mod-content"></div>

                    </div>
                </div>
            </div>
            <!-- Update and view Department -->
            <!-- Delete Confirm popup -->
            <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            Are you sure want to delete this record?
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary btn-sm btn-ok">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Delete Confirm popup end -->
            <?php include("common/footer.php"); ?>
        </div>
    </div>
    <?php include("common/script.php"); ?>
    <script>
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });

    </script>
</body>

</html>