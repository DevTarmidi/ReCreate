<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php echo $this->session->flashdata('verify_msg'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-3 col-md-offset-3">
		</div>

		<div class="col-md-6 col-md-offset-3" style="background-color:rgba(255,255,255,0.7); border-radius:10px;">
			<div class="panel panel-default">
				<div class="panel-heading" style="padding:10px 10px 30px 10px;">
					<h4>Sign Up Here</h4>
				</div>
				<div class="panel-body">
					<?php $attributes = array("name" => "registrationform");
					echo form_open("signup", $attributes);?>
					<div class="form-group">
						<div class="row colbox">
							<div class="col-lg-3 col-sm-3">
								<label for="name">Full Name</label>
							</div>
							<div class="col-lg-9 col-sm-9">
								<input class="form-control" name="fullname" placeholder="Full Name" type="text" value="<?php echo set_value('fullname'); ?>" />
								<span class="text-danger"><?php echo form_error('fullname'); ?></span>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row colbox">
							<div class="col-lg-3 col-sm-3">
								<label for="name">Username</label>
							</div>
							<div class="col-lg-9 col-sm-9">
								<input class="form-control" name="username" placeholder="Username" type="text" value="<?php echo set_value('username'); ?>" />
								<span class="text-danger"><?php echo form_error('username'); ?></span>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row colbox">
							<div class="col-lg-3 col-sm-3">
								<label for="email">Email</label>
							</div>
							<div class="col-lg-9 col-sm-9">
								<input class="form-control" name="email" placeholder="Email Address" type="text" value="<?php echo set_value('email'); ?>" />
								<span class="text-danger"><?php echo form_error('email'); ?></span>
							</div>
						</div>
					</div>

					<div class="form-group">
						<div class="row colbox">
							<div class="col-lg-3 col-sm-3">
								<label for="subject">Password</label>
							</div>
							<div class="col-lg-9 col-sm-9">
								<input class="form-control" name="password" placeholder="Password" type="password" />
								<span class="text-danger"><?php echo form_error('password'); ?></span>
							</div>
						</div>
					</div>
					<div class="form-group" align="right">
						<button name="submit" type="submit" class="btn btn-success">Submit</button>
					</div>
					<?php echo form_close(); ?>
					<?php echo $this->session->flashdata('msg'); ?>
				</div>
				<br>
				<center>Already have an account? <a href="<?php echo site_url(); ?>">Sign In</a>.</center>
			</div>
		</div>

		<div class="col-md-3 col-md-offset-3">
		</div>
	</div>
</div>