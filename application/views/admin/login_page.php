
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Toy Shop :: <?php echo $title; ?></title>
        <link href="<?php echo ADMIN_CSS; ?>styles.css" rel="stylesheet" />
        <script src="<?php echo ADMIN_JAVASCRIPT; ?>all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <?php  
                                    if($this->session->flashdata('item')) {
                                        $message = $this->session->flashdata('item');
                                        echo '<br><div class="'.$message['class'].'">'.$message['message'].'</div>';
                                    } 
                                ?>
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="<?php echo base_url() ?>Login/auth" name="basic_validate" id="basic_validate" novalidate autocomplete="off">
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="email" name="email" type="text" placeholder="Enter Username" autocomplete="off" />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" id="pwd" name="pwd" type="password" placeholder="Enter password" autocomplete="off"/>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <!-- <a class="small" href="password.html">Forgot Password?</a> -->
                                                <button type="submit" class="btn btn-primary" name="Login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center">
                                        <div class="small"><a href="<?php //echo base_url(); ?>Login/registration">Need an account? Sign up!</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; cosmo infotech <?php echo date('Y');  ?></div>
                            <div>
                                <a href="javascript:void(0)">Privacy Policy</a>
                                &middot;
                                <a href="javascript:void(0)">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?php echo ADMIN_JAVASCRIPT; ?>jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo ADMIN_JAVASCRIPT; ?>bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo ADMIN_JAVASCRIPT; ?>scripts.js"></script>
        <script>
            setTimeout(function(){ $('.alert').hide(); }, 4000);
        </script>
    </body>
</html>
