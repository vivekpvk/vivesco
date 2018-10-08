<?php
if(!empty($this->session->userdata('userid'))) {
    redirect('admin/login');
    return;
}
?>
<!DOCTYPE html>
<html class="no-focus">
    <head>
        <meta charset="utf-8">

        <title>Admin Login</title>

        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <link rel="shortcut icon" href="<?php echo base_url();?>images/hjkj.png">

        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url(); ?>assets/css/oneui.css">
         <style>
            .error
            {
                color: #cc0000;
            }
        </style>
    </head>
    <body style="background: #33414e;">
       
        <div id="page-container" >

            <!-- Main Container -->
            <main id="main-container" style="background: #33414e;">
              
                <!-- Page Content -->
                <div class="content content-narrow">
                    <div class="row">
                        <div class="col-lg-12" style="margin-top: 100px;">
                            <h3 class="text-center" style="color: #06efe4; font-size: 25px;">bangaloreshopping.com</h3><br>

                        <div class="col-lg-4">
                        </div>
                        <div class="col-lg-4">
                            
                            <!-- Bootstrap Login -->
                            <div class="block block-themed" style="background: rgba(255, 255, 255, 0.1) none repeat scroll 0 0; border-radius: 10px;">
<!--                                <div class="block-header" style="background: rgba(255, 255, 255, 0.1) none repeat scroll 0 0; border-radius: 15px;">
                                   
                                    <h3 class="block-title" >Welcome, Please login</h3>
                                </div>-->

                                <div  style="padding: 15px 0px 0px 25px;">
                                    <span style="color: #ffffff; font-size: 20px; "><strong>Welcome</strong>,</span><span style="color: #ffffff; font-size: 20px; font-weight: 100;"> Please login</span>
                                </div>

 
                                <div class="block-content">
                                        <form class="form-horizontal push-5-t" id="register-form"  method="post" action="<?php echo base_url(); ?>admin/Forgotpassword/ForgotPassword" enctype="multipart/form-data">

                                        <div class="form-group">
                                            <!--<label class="col-xs-12">Email</label>-->
                                            <div class="col-xs-12">
                                                <input class="form-control" required="required" style="background: rgba(0, 0, 0, 0.2) none repeat scroll 0 0; border: none; color: #999999;" type="text" value="<?php echo set_value('email'); ?>" id="email" name="email" placeholder="Email">
                                                <div style="margin-top: 0px; color: red;"><?= form_error('email'); ?></div>
                                            </div>
                                        </div>
                                        
                                        <div id="account"></div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-info btn-block" style="width: 150px; border-radius: 5px;" name="btn-submit" id="btn-submit" type="submit"><i class="fa fa-arrow-right push-5-r"></i> Log in</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div style="color: #cccccc; margin-top: -20px; margin-left: 10px;"  >&copy; 2018 Developer</div>
                            <!-- END Bootstrap Login -->
                        </div>
                            <div class="col-lg-4"></div>
                        </div>
                        
                      
                    </div>
                </div>
            </main>
          
               
            </footer>
          
        </div>

        <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.appear.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.countTo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.placeholder.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/js.cookie.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-1.11.3-jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/validation.min.js"></script>
    </body>
</html>