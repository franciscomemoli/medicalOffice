<?php 
App::uses('AppModel', 'Model');

class Consultation extends AppModel {
    public $validate = array(
        'doctorId' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Doctor is required'
            )
        )
    );
    public function beforeSave($options = array()) {
    // if (isset($this->data[$this->alias]['password'])) {
    //     $passwordHasher = new SimplePasswordHasher();
    //     $this->data[$this->alias]['password'] = $passwordHasher->hash(
    //         $this->data[$this->alias]['password']
    //     );
    // }
    return true;
}

}
?>