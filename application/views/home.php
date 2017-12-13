<br><br>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-3">
		</div>

        <div class="col-lg-4 col-sm-4 well mt-5" style="background-color:rgba(255,255,255,1); border-radius:10px;">
            <?php 
            $attributes = array("class" => "form-horizontal", "id" => "loginform", "name" => "loginform");
            echo form_open("home/singkat", $attributes);?>
            <fieldset style="padding:20px 10px 30px 10px;">
                <center><h4>Singkat.in</h4</center>
                <br><br>
                <div class="form-group">
                    <div class="row colbox">
                        <div class="col-lg-3 col-sm-3">
                            <label for="txt_url" class="control-label">URL :</label>
                        </div>
                        <div class="col-lg-9 col-sm-9">
                            <input class="form-control" id="txt_url" name="txt_url" placeholder="Enter your long URL here..." type="text" value="<?php echo set_value('txt_url'); ?>" />
                            <span class="text-danger"><?php echo form_error('txt_url'); ?></span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-12 col-sm-12" align="right">
                        <input id="btn_singkat" name="btn_singkat" type="submit" class="btn btn-success" value="Singkat" />
                    </div>
                </div>
            </fieldset>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
        <div class="col-md-4 col-md-offset-3">
		</div>
    </div>
</div>