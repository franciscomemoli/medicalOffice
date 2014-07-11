<!-- File: /app/View/Consultations/view.ctp -->
<h1> <?php echo h($patient['Consultations']['firstname']); ?> <?php echo h($patient['Consultations']['lastname']);?></h1>

<hr>
<h3 class="col-xs-12">

	<?php echo __("Consultations Information") ?>
</h3>
<div class="col-xs-12">
	<?php 
		echo $this->Html->link(
	    'Edit Consultations',
	    array('controller' => 'patients', 'action' => 'edit',$patient['Consultations']['id'])
	); 
	?>
</div>
<div class="col-xs-12 col-sm-8 col-sm-offset-2  col-md-6 col-md-offset-3">
	<div class="form-group row">
		<div class="col-xs-6">
			<label><?php echo __("email")?>: </label>
			<div class="col-xs-12">
				<?php echo h($patient['Consultations']['email']); ?>
			</div>
		</div>
		<div class="col-xs-6">
			<label><?php echo __("address")?>: </label>
			<div class="col-xs-12">
				<?php echo h($patient['Consultations']['address']); ?>
			</div>
		</div>
	</div>
	<div class="form-group row">
		<div class="col-xs-6">
			<label><?php echo __("cellphone")?>: </label>
			<div class="col-xs-12">
				<?php echo h($patient['Consultations']['cellphone']); ?>
			</div>
		</div>
		<div class="col-xs-6">
			<label><?php echo __("phone")?>: </label>
			<div class="col-xs-12">
				<?php echo h($patient['Consultations']['phone']); ?>
			</div>
		</div>
	</div>
</div>
