<!-- File: /app/View/Patients/edit.ctp -->

<h1>Edit Patient</h1>
<?php
echo $this->Form->create('Patient');
echo $this->Form->input('firstName');
echo $this->Form->input('lastName');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end(__('Save Patient'));
?>