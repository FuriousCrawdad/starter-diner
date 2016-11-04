<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends Application
{

	public function index() {
		// get the user role
		$result = '';

        $this->data['userrole'] = $this->session->userdata('userrole');
        if ($this->data['userrole'] == NULL) {
            $this->data['userrole'] = '?';
        }
        elseif($this->data['userrole'] == 'admin') {
        	$result = 'stay awhile and listen, admin';
        }
        elseif($this->data['userrole'] == 'user') {
        	$result = 'go away, plebian user';
        }

        $this->data['content'] = $result;
	    $this->render();
	}

}
