<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load
?><div class="container">  

    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <?php 
            if(isset($success)){?>
                <div class="alert alert-success messages" role="alert">
                    <strong>Successful!</strong> <?php echo $success; ?> .
            </div>
            <?php }
            if(isset($error)){?>
                <div class="alert alert-success messages" role="alert">
                    <strong>Failed !</strong> <?php echo $error; ?> .
            </div>
            <?php } ?>
          
            <div class="panel-heading">
                <div class="panel-title">Sign In</div>
            </div>     

            <div style="padding-top:30px" class="panel-body" >

                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                <!--<form id="loginform" class="form-horizontal" role="form">-->
                <?php echo form_open(base_url().'Welcome/add_user', ' id="user_form"', 'class="form-horizontal"'); ?>

                <div class="input-group marginBottom25 form-div">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <?php
                    $data = array('name' => 'user_name', 'value' => set_value('user_name', $user_name), 'class' => 'form-control', 'placeholder' => 'User Name');
                    echo form_input($data);
                    ?>
                </div>

                <div class="input-group marginBottom25 form-div">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                    <?php
                    $data = array('name' => 'user_email', 'value' => set_value('user_email', $user_email), 'class' => 'form-control', 'placeholder' => 'Email');
                    echo form_input($data);
                    ?>
                </div>

                <div class="input-group marginBottom25 form-div">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                    <?php
                    $data = array('name' => 'user_dob', 'value' => set_value('user_dob', $user_name), 'class' => 'form-control datetime', 'placeholder' => 'Date of birth');
                    echo form_input($data);
                    ?>
                </div>

                <div class="input-group marginBottom25 form-div">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
                    <?php
                    $data = array('name' => 'favourite_color', 'value' => set_value('favourite_color', $favourite_color), 'class' => 'form-control', 'placeholder' => 'Favourite color');
                    echo form_input($data);
                    ?>
                </div>

                <div class="form-group marginTop10">
                    <!-- Button -->

                    <div class="col-sm-12 controls">
                        <button id="btn-submit" class="btn btn-success" type="submit">Submit  </button>

                    </div>
                </div>

                </form>     

            </div>                     
        </div>  
    </div>

</div>
<script src="<?php echo STATIC_URL; ?>assets/js/global.js"></script>