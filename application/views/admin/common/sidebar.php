<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="<?php echo base_url(); ?>Login/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">INTERFACE</div>
                <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-child"></i></div>
                    Toy
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo base_url(); ?>toy/admin_toy">Add Toy</a>
                        <!-- <a class="nav-link" href="<?php //echo base_url(); ?>Doctor/">Add Doctor</a> -->
                    </nav>
                </div>

                <!-- <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseAppointment" aria-expanded="false" aria-controls="collapseAppointment">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Appointments
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseAppointment" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?php echo base_url(); ?>Patients/">Add Patients</a>
                        <a class="nav-link" href="<?php echo base_url(); ?>Appointment/">Add Appointments</a>
                    </nav>
                </div> -->
               

                <!-- <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseReports" aria-expanded="false" aria-controls="collapseReports">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Reports
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseReports" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        
                        <a class="nav-link" href="javascript:void(0)">Appointment Report</a>
                        <a class="nav-link" href="javascript:void(0)">Doctor List Reports</a>
                        <a class="nav-link" href="javascript:void(0)">Business Reports</a>
                    </nav>
                </div> -->

                 <!-- <a class="nav-link collapsed" href="javascript:void(0)" data-toggle="collapse" data-target="#collapseMaster" aria-expanded="false" aria-controls="collapseAppointment">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Master
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseMaster" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                       
                        <a class="nav-link" href="<?php echo base_url(); ?>Qualification/">Add Qualification</a>
                         <a class="nav-link" href="<?php echo base_url(); ?>User/">Add User</a>
                    </nav>
                </div> -->

                <!-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Appointments
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a> -->
                <!-- <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div> -->
                <!-- <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a> -->
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?php echo $name=$this->session->userdata('name'); ?>
        </div>
    </nav>
</div>
