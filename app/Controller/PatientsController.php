<?php 
class PatientsController extends AppController {
    
    public $layout = "default";

    public function isAuthorized($user) {
	    // All registered users can add posts
	    return true;
	  /*  if ($this->action === 'add') {
	        return true;
	    }

	    // The owner of a post can edit and delete it
	    if (in_array($this->action, array('edit', 'delete'))) {
	        $postId = (int) $this->request->params['pass'][0];
	        if ($this->Post->isOwnedBy($postId, $user['id'])) {
	            return true;
	        }
	    }
	    return parent::isAuthorized($user);*/
	}

    public function index() {
        $this->set('patients', $this->Patient->find('all'));
    }


    public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('Invalid patient'));
        }

        $Patient = $this->Patient->findById($id);
        if (!$Patient) {
            throw new NotFoundException(__('Invalid patient'));
        }
        $this->set('patient', $Patient);
    }

	public function add() {

        if ($this->request->is('post')) {
            $this->Patient->create();
            if ($this->Patient->save($this->request->data)) {
                $this->Session->setFlash(__('Your patient has been saved.'), 'alert', array(
											'plugin' => 'BoostCake',
											'class' => 'alert-success'
										));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('Unable to add your patient.'), 'alert', array(
											'plugin' => 'BoostCake',
											'class' => 'alert-danger'
										));
        }
    }

    public function edit($id = null) {
	    if (!$id) {
	        throw new NotFoundException(__('Invalid patient'));
	    }

	    $patient = $this->Patient->findById($id);
	    if (!$patient) {
	        throw new NotFoundException(__('Invalid patient'));
	    }

	    if ($this->request->is(array('post', 'put'))) {
	        $this->Patient->id = $id;
	        if ($this->Patient->save($this->request->data)) {
	            $this->Session->setFlash(__('Your patient has been updated.'), 'alert', array(
											'plugin' => 'BoostCake',
											'class' => 'alert-success'
										));
	            return $this->redirect(array('action' => 'index'));
	        }
	        $this->Session->setFlash(__('Unable to update your patient.'), 'alert', array(
											'plugin' => 'BoostCake',
											'class' => 'alert-danger'
										));
	    }

	    if (!$this->request->data) {
	        $this->request->data = $patient;
	    }
	}

	public function delete($id) {
	    if ($this->request->is('get')) {
	        throw new MethodNotAllowedException();
	    }

	    if (true/*$this->Patient->delete($id)*/) {
	       
	        $this->Session->setFlash(__('The patient with id: %s has been deleted.', h($id)), 'alert', array(
											'plugin' => 'BoostCake',
											'class' => 'alert-success'
										));
	        return $this->redirect(array('action' => 'index'));
	    }
	}
}
?>