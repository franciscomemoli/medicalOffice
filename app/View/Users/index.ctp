<h1><?php echo  __("Users") ?> </h1>
<?php echo $this->Html->link(
    'Add User',
    array('controller' => 'users', 'action' => 'add'));
     ?>
<table class="table table-hover">
    <thead>
        <tr>
            <th><?php echo __("Id") ?></th>
            <th><?php echo __("Username") ?></th>
            <th><?php echo __("Role") ?></th>
            <th><?php echo __("Created") ?></th>
            <th><?php echo __("Edit") ?></th>
            <th><?php echo __("Delete") ?></th>
        </tr>
    </thead>
<?php
$array = array();
foreach ($users as $user) {
    $onclickView = "window.location.href=\"".$this->webroot."users/view/".$user["User"]['id']."\"";
    $onclickView = array("onclick" => $onclickView, "class"=>"rowLink");            
    $var = array(
            array( $user['User']['id'], $onclickView ),
            array( $user['User']['username'], $onclickView ),
            array( $user['User']['role'], $onclickView ),
            array( $user['User']['created'], $onclickView ),
            $this->Html->link(
            'Edit User',
                array('controller' => 'users', 'action' => 'edit',$user['User']['id'])
            ),            
            $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $user['User']['id']),
                    array('confirm' => __('Are you sure?'))
                )
        );
    array_push($array, $var);
}
echo $this->Html->tableCells($array,true);
 ?>   
    <?php unset($user); ?>
</table>


