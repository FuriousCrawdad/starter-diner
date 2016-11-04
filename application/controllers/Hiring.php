<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hiring extends Application
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/
	 * 	- or -
	 * 		http://example.com/welcome/index
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
	    $stuff = file_get_contents('../data/jobs.md');
            $this->data['content'] = $this->parsedown->parse($stuff);
            
            // get the user role
            $this->data['userrole'] = $this->session->userdata('userrole');
            if ($this->data['userrole'] == NULL) $this->data['userrole'] = '?';
                
            $this->render('template-secondary');
	}

}
