
<!DOCTYPE html>
<html lang="en">
<?php 
// $userdata=$this->session->userdata;	

// echo $owner_name=$this->session->userdata('owner_name');
// echo $hospital_name=$this->session->userdata('hospital_name'); 
?>
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
                            } ?>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"><?php echo $title; ?></li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Doctor <span class="float-right"><?php  if(!empty($totalDoctor)) { echo count($totalDoctor); } else { echo "0"; } ?></span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url(); ?>Doctor/">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Department <span class="float-right"><?php  if(!empty($totalDept)) { echo count($totalDept); } else { echo "0"; } ?></span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url(); ?>Department/">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Patients <span class="float-right"><?php  if(!empty($totalPatient)) { echo count($totalPatient); } else { echo "0"; } ?></span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url(); ?>Patients/">View Details </a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Total Appointment <span class="float-right"><?php  if(!empty($totalAppoint)) { echo count($totalAppoint); } else { echo "0"; } ?></span></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="<?php echo base_url(); ?>Appointment/">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php //echo "<pre>"; print_r($userdata); ?>
                </main>
                <?php include("common/footer.php"); ?>
            </div>
        </div>
        <?php include("common/script.php"); ?>
    </body>
</html>
