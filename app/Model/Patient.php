<?php 
class Patient extends AppModel {
	public $validate = array(
		'firstname' => array(
			'rule' => 'notEmpty'
		),
		'lastname' => array(
			'rule' => 'notEmpty'
		),
		'email' => array(
			'rule'    => array('email', true),
			'message' => 'Please supply a valid email address.'
		)

	);
}
?>