<br><br>
<div class="container" style="margin-top: 150px;">
    <div class="row">
        <div class="col-md-12 col-xs-12" style="background-color:rgba(255,255,255,1); border-radius:10px;">
            <?php 
            $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
            echo form_open("home/singkat", $attributes);?>
                <div class="form-group">
                    <div class="row">
                        <div class="offset-md-2 offset-0 col-md-6 col-9">
                                <input class="form-control" id="txt_url" name="txt_url" placeholder="Enter your long URL here..." type="text" value="<?php echo set_value('txt_url'); ?>" />
                            <span class="text-danger"><?php echo form_error('txt_url'); ?></span>
                        </div>
                        <div class="col-md-2 col-2" style="padding-left:0;">
                            <input id="btn_singkat" name="btn_singkat" type="submit" class="btn btn-success" value="Singkat" style="" />
                        </div>
                    </div>
                </div>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>
</div>