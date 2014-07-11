<!-- File: /app/View/Users/edit.ctp -->

<h1><?php echo __("Edit User") ?></h1>
<div class="col-xs-12 col-sm-8 col-sm-offset-2  col-md-6 col-md-offset-3">
<?php echo $this->Form->create('User',array("data-toggle"=>"validator")); ?>
	<div class="form-group row">
		<div class="col-xs-6">
			<?php echo $this->Form->input('username',array("class"=> "form-control input-lg", "placeholder"=>__("username"))); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $this->Form->input('password',array("class"=> "form-control input-lg", "placeholder"=>__("password"))); ?>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-xs-12">
			<?php echo $this->Form->input('role',array("class"=> "form-control input-lg",'options' => array('admin' => __('Admin'), 'doctor' => __('Doctor')))); ?>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-xs-offset-6 col-xs-6">
			<input type="submit" class="btn btn-lg btn-success btn-block" value="<?php echo __("Save User")?>">
		</div>
	</div>
	</fieldset>
<?php 
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end();
?>
</div>
