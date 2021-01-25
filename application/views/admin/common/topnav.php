<?php 
$userdata=$this->session->userdata;	

// echo $owner_name=$this->session->userdata('owner_name');
// echo $hospital_name=$this->session->userdata('hospital_name'); 
?>
<style>
.bg-dark {
  background-color:teal !important;
}
.kundan-modal{
    background-color: red;
    color: #fff;
}
.error{color:#FF0000; font-size:10px;}
</style>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="<?php echo base_url(); ?>login/dashboard">Toy Shopping</a>
    <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars" style="color:#fff !important"></i></button>
    <!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:#fff;"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Manage Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?php echo base_url(); ?>login/logout">Logout</a>
            </div>
        </li>
    </ul>
</nav>