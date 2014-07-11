<!-- File: /app/View/Patients/edit.ctp -->

<h1><?php echo __("Edit Patient")?></h1>
<div class="col-xs-12 col-sm-8 col-sm-offset-2  col-md-6 col-md-offset-3">
<?php echo $this->Form->create('Patient',array("data-toggle"=>"validator")); ?>
	<div class="form-group row">
		<div class="col-xs-6">
			<?php echo $this->Form->input('firstname',array("class"=> "form-control input-lg", "placeholder"=>__("firstname"))); ?>
		</div>
		<div class="col-xs-6">
			<?php echo $this->Form->input('lastname',array("class"=> "form-control input-lg", "placeholder"=>__("lastname"))); ?>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-xs-12">
			<?php echo $this->Form->input('email',array("class"=> "form-control input-lg", "placeholder"=>__("email"))); ?>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-xs-12">
			<?php echo $this->Form->input('cellphone',array("class"=> "form-control input-lg", "placeholder"=>__("cellphone"))); ?>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-xs-12">
			<?php echo $this->Form->input('phone',array("class"=> "form-control input-lg", "placeholder"=>__("phone"))); ?>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-xs-12">
			<?php echo $this->Form->input('address',array("class"=> "form-control input-lg", "placeholder"=>__("address"))); ?>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-xs-offset-6 col-xs-6">
			<input type="submit" class="btn btn-lg btn-success btn-block" value="<?php echo __("Save Patient")?>">
		</div>
	</div>
	</fieldset>
<?php 
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end();
?>
</div>
