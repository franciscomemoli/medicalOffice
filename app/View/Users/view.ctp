
<h1><?php echo h($user['User']['username']); ?></h1>

<p><small>id: <?php echo $user['User']['id']; ?></small></p>

<p><small>Created: <?php echo $user['User']['created']; ?></small></p>

<p><small>modified: <?php echo $user['User']['modified']; ?></small></p>


<?php 
	echo $this->Html->link(
    'Edit User',
    array('controller' => 'users', 'action' => 'edit',$user['User']['id'])
); 
?>
