<!DOCTYPE html>
<html lang="en">

<head>
    <title><?=$this->db->get('tblsettings')->row()->system;?> | <?=$page_title;?></title>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url();?>assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url();?>assets/global/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>assets/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>assets/global/css/components-md.css" id="style_components" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url();?>assets/global/css/plugins-md.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>assets/admin/layout/css/layout.css" rel="stylesheet" type="text/css" />
    <link id="style_color" href="<?=base_url();?>assets/admin/layout/css/themes/default.css" rel="stylesheet"
        type="text/css" />
    <link href="<?=base_url();?>assets/admin/layout/css/custom.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="favicon.ico" />
</head>

<body class="page-md login">
<div class="logo">
	<h1 class="text-primary"><?=$this->db->get('tblsettings')->row()->system;?></h1>
</div> <br /> 
    <div class="menu-toggler sidebar-toggler">
    </div>
    <div class="content">
        <!-- BEGIN LOGIN FORM -->
        <form class="login-form" action="<?=base_url();?>Login/authenticate" method="post">
            <h3 class="form-title text-center">Please Login</h3>

            <div class="form-group">
                <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                <label class="control-label visible-ie8 visible-ie9">Username</label>
                <div class="input-icon"> <b style="color:white;">Username</b>
                    <i class="fa fa-user"></i>
                    <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username"
                        name="username" required />
                </div>
            </div>
            <div class="form-group">
                <label class="control-label visible-ie8 visible-ie9">Password</label>
                <div class="input-icon"> <b style="color:white;">Password</b>
                    <i class="fa fa-lock"></i>
                    <input class="form-control placeholder-no-fix" type="password" autocomplete="off"
                        placeholder="Password" name="password"  required/>
                </div>
            </div>
            <div class="form-actions">
                <label class="checkbox">
                    <button type="submit" class="btn blue pull-right" name="login">
                        Login <i class="m-icon-swapright m-icon-white"></i>
                    </button>
            </div>
            <p>
                <?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-danger fade in">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <center><?php echo $this->session->flashdata('message'); ?> </center>
            </div>
            <?php } ?>
        </form>
        <!-- END LOGIN FORM -->
    </div>
    <br />


    <div class="copyright">
        <?=date("Y");?> &copy; Powered by <strong style="colorQQ:blue;">Infocus Malawi</strong>
    </div>
    <script src="<?=base_url();?>assets/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/global/plugins/jquery-validation/js/jquery.validate.min.js"
        type="text/javascript"></script>
    <script src="<?=base_url();?>assets/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript">
    </script>
    <script type="text/javascript" src="<?=base_url();?>assets/global/plugins/select2/select2.min.js"></script>
    <script src="<?=base_url();?>assets/global/scripts/metronic.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/admin/layout/scripts/layout.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/admin/layout/scripts/demo.js" type="text/javascript"></script>
    <script src="<?=base_url();?>assets/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
    <script>
    jQuery(document).ready(function() {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();
        Demo.init();
        // init background slide images
        $.backstretch([
            "<?=base_url();?>assets/admin/pages/media/bg/1.jpg",
            "<?=base_url();?>assets/admin/pages/media/bg/2.jpg",
            "<?=base_url();?>assets/admin/pages/media/bg/3.jpg",
            "<?=base_url();?>assets/admin/pages/media/bg/4.jpg"
        ], {
            fade: 1000,
            duration: 8000
        });
    });
    </script>
</body>

</html>