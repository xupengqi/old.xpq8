<div>
	<?php echo form_open('admin',array('id' => 'login')); ?>
	    <div class="title">Log In</div>
	    <fieldset id="inputs">
			<?php echo form_input('email_address', set_value('email_address'), 'id="email_address" placeholder="Email" required autofocus'); ?>
			<?php echo form_password('password', '', 'id="password" placeholder="Password" required'); ?>
	    </fieldset>
	    <fieldset id="actions">
			<?php echo form_submit('submit', 'Login', 'id="submit"'); ?>
	        <a href="">Forgot your password?</a><a href="">Register</a>
	    </fieldset>
	<?php echo form_close(); ?>
	<?php echo validation_errors(); ?>
</div>


	