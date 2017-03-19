
<?php if (count($errors) > 0) { ?>
<div class="alert alert-danger">
<ul>
<?php foreach ($errors as $error) { ?>
	<li><?php echo $error; ?></li>
<?php } ?>
</ul>
</div>

<?php } else { ?>
<?php if ($ok) { ?>

<div class="alert alert-success">
<?php echo $ok;?>
</div>

<?php } ?>
<?php } ?>


<form method="post" id="captcha">
    <?php echo (Form::hidden('csrf', Security::token())); ?>
	
	<div class="form-group">
		<input type="text" class="form-control" id="name" name="contact_name" value="<?php echo $name; ?>" placeholder="<?php echo __('Name', 'contact'); ?>" required>
	</div>
	<div class="form-group">
		<input type="text" class="form-control" id="email" name="contact_email" value="<?php echo $email; ?>" placeholder="<?php echo __('Email', 'contact'); ?>" required>
	</div>
	<div class="form-group">
		<textarea class="form-control" type="textarea" id="message" name="contact_body" placeholder="<?php echo __('Message', 'contact'); ?>" maxlength="140" rows="7"><?php echo $body; ?></textarea>
	</div>

    <?php if (Option::get('captcha_installed') == 'true') { ?>
		<div class="row">
			<div class="col-sm-6 captcha">
				<div class="form-group">
					<input class="captcha-input" type="text" name="answer" placeholder="<?php echo __('Captcha', 'users'); ?>"><?php if (isset($errors['captcha_wrong'])) echo Html::nbsp(3).'<span class="error">'.$errors['captcha_wrong'].'</span>'; ?>
					<?php CryptCaptcha::draw(); ?>
				</div>
			</div>
			<div class="col-sm-6">
				<button type="submit" id="submit" name="contact_submit" value="1" class="btn btn-primary pull-right"><?php echo __('Send', 'contact'); ?></button>	
			</div>	
		</div>
	<?php } else { ?>
			<div class="col-sm-12">
				<button type="submit" id="submit" name="contact_submit" value="1" class="btn btn-primary pull-right"><?php echo __('Send', 'contact'); ?></button>	
			</div>		
	<?php } ?>
	
</form>
