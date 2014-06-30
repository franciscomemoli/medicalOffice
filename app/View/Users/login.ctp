<!-- File: //app/View/Users/login.ctp -->

<?php echo $this->Session->flash('auth'); ?>
<div class="row" style="margin-top:20px">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<?php echo $this->Form->create('User'); ?>
			<fieldset>
				<h2><?php echo __('Please enter your username and password'); ?></h2>
				<hr class="colorgraph">
				<div class="form-group">
                    
                    <?php echo $this->Form->input('username',array("class"=> "form-control input-lg", "placeholder"=>__("Username"),"label"=>false)); ?>
				</div>
				<div class="form-group">
                    
                    <?php echo $this->Form->input('password',array("class"=> "form-control input-lg", "placeholder"=>__("Password"),"label"=>false));?>
				</div>
				<span class="button-checkbox">
					<button type="button" class="btn" data-color="info"><?php echo __("Remember Me");?></button>
                    <input type="checkbox" name="remember_me" id="remember_me" checked="checked" class="hidden">
					<!-- <a href="" class="btn btn-link pull-right">Forgot Password?</a> -->
				</span>
				<hr class="colorgraph">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6">
					<!-- 	<a href="" class="btn btn-lg btn-primary btn-block">Register</a>-->
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" value="Sign In">
					</div>
					
				</div>
			</fieldset>
		<?php echo $this->Form->end(); ?>
	</div>
</div>
