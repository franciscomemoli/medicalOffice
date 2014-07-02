<!-- File: /app/View/Patients/index.ctp -->

<h1>All patients</h1>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Id</th>
            <th><?php echo __("firsName") ?></th>
            <th><?php echo __("lastName") ?></th>
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
            array( $patient['Patient']['firstName'], $onclickView ),
            array( $patient['Patient']['lastName'], $onclickView ),
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


