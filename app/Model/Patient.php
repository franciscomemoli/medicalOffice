<?php 
class Patient extends AppModel {
	public $validate = array(
		'firstName' => array(
			'rule' => 'notEmpty'
		),
		'lastName' => array(
			'rule' => 'notEmpty'
		),
		'email' => array(
			'rule'    => array('email', true),
			'message' => 'Please supply a valid email address.'
		)

	);
}
?>