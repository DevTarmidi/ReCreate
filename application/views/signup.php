<br><br>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php echo $this->session->flashdata('verify_msg'); ?>
		</div>
	</div>

	<div class="row">
		<div class="col-md-4 col-md-offset-3">
		</div>

		<div class="col-md-4 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4>Sign Up Here</h4>
					<br>
				</div>
				<div class="panel-body">
					<?php $attributes = array("name" => "registrationform");
					echo form_open("signup", $attributes);?>
					<div class="form-group">
						<label for="name">Full Name</label>
						<input class="form-control" name="fullname" placeholder="Full Name" type="text" value="<?php echo set_value('fullname'); ?>" />
						<span class="text-danger"><?php echo form_error('fullname'); ?></span>
					</div>

					<div class="form-group">
						<label for="name">Username</label>
						<input class="form-control" name="username" placeholder="Username" type="text" value="<?php echo set_value('username'); ?>" />
						<span class="text-danger"><?php echo form_error('username'); ?></span>
					</div>

					<div class="form-group">
						<label for="email">Email Address</label>
						<input class="form-control" name="email" placeholder="Email Address" type="text" value="<?php echo set_value('email'); ?>" />
						<span class="text-danger"><?php echo form_error('email'); ?></span>
					</div>

					<div class="form-group">
						<label for="subject">Password</label>
						<input class="form-control" name="password" placeholder="Password" type="password" />
						<span class="text-danger"><?php echo form_error('password'); ?></span>
					</div>

					<div class="form-group" align="right">
						<button name="submit" type="submit" class="btn btn-success">Submit</button>
					</div>
					<?php echo form_close(); ?>
					<?php echo $this->session->flashdata('msg'); ?>
				</div>
				<br>
				<center>Already have an account? <a href="http://localhost/recreate/">Sign In</a>.</center>
			</div>
		</div>

		<div class="col-md-4 col-md-offset-3">
		</div>
	</div>
</div>