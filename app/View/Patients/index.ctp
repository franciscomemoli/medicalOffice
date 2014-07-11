<!-- File: /app/View/Patients/index.ctp -->

<h1><?php echo __("All patients") ?> </h1>
<?php echo $this->Html->link(__("add Patient"), array('controller' => 'patients', 'action' => 'add'));?>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th><?php echo __("firsname") ?></th>
            <th><?php echo __("lastname") ?></th>
            <th><?php echo __("email") ?></th>
            <th><?php echo __("Created") ?></th>
            <th><?php echo __("Edit") ?></th>
        </tr>
    </thead>
<?php
$array = array();
foreach ($patients as $patient) {
    $onclickView = "window.location.href=\"".$this->webroot."patients/view/".$patient["Patient"]['id']."\"";
    $onclickView = array("onclick" => $onclickView, "class"=>"rowLink");            
    $var = array(
            array( $patient['Patient']['id'], $onclickView ),
            array( $patient['Patient']['firstname'], $onclickView ),
            array( $patient['Patient']['lastname'], $onclickView ),
            array( $patient['Patient']['email'], $onclickView ),
            array( $patient['Patient']['created'], $onclickView ),
            $this->Html->link(
            'Edit Patient',
            array('controller' => 'patients', 'action' => 'edit',$patient['Patient']['id']))
            /*$this->Form->postLink('Delete',
                    array('action' => 'delete', $patient['Patient']['id']),
                    array('confirm' => 'Are you sure?')
                )*/
        );
    array_push($array, $var);
}
echo $this->Html->tableCells($array,true);
 ?>   
    <?php unset($patient); ?>
</table>


