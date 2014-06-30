<!-- File: /app/View/Patient/view.ctp -->

<h1><?php echo h($patient['Patient']['firstName']); ?></h1>

<p><small>Created: <?php echo $patient['Patient']['created']; ?></small></p>

<p><?php echo h($patient['Patient']['firstName']); ?></p>

<?php 
	echo $this->Html->link(
    'Edit Patient',
    array('controller' => 'patients', 'action' => 'edit',$patient['Patient']['id'])
); 
?>
