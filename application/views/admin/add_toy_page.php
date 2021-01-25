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
            </main>
                                            
           
            <?php include("common/footer.php"); ?>
        </div>
    </div>
    <?php include("common/script.php"); ?>
    
</body>

</html>