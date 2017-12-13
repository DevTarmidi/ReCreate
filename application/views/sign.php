<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
		</div>

        <div class="col-lg-4 col-sm-4 well mt-5" style="background-color:rgba(255,255,255,0.7); border-radius:10px;">
            <?php 
            $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
            echo form_open("home", $attributes);?>
            <fieldset style="padding:20px 10px 30px 10px;">
                <h4>Please Sign In</h4>
                <br>
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-3 col-sm-3">
                            <label for="txt_username" class="control-label">Username</label>
                        </div>
                        <div class="col-lg-9 col-sm-9">
                            <input class="form-control" id="txt_username" name="txt_username" placeholder="Username" type="text" value="<?php echo set_value('txt_username'); ?>" />
                            <span class="text-danger"><?php echo form_error('txt_username'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-3 col-sm-3">
                            <label for="txt_password" class="control-label">Password</label>
                        </div>
                        <div class="col-lg-9 col-sm-9">
                            <input class="form-control" id="txt_password" name="txt_password" placeholder="Password" type="password" value="<?php echo set_value('txt_password'); ?>" />
                            <span class="text-danger"><?php echo form_error('txt_password'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12 col-sm-12" align="right">
                        <input id="btn_login" name="btn_login" type="submit" class="btn btn-primary" value="Sign In" />
                    </div>
                </div>
                <center>Don't have an account? <a href="<?php echo site_url()."signup"; ?>">Sign Up</a>.</center>
            </fieldset>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
        <div class="col-md-4 col-md-offset-3">
		</div>
    </div>
</div>