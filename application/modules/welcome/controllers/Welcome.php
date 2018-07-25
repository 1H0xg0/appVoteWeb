<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		// Set the title
		$this->template->title = 'Hackaton test template!';
		
		// Dynamically add a css stylesheet
		$this->template->stylesheet->add(base_url('assets/css/bootstrap.css'));

		//Dynamically add a js file
		$this->template->javascript->add(base_url('assets/js/bootstrap.js'));
		
		// Load a view in the content partial
		$this->template->content->view('hero', array('title' => 'Hello, world!'));
		$news = array(); // load from model (but using a dummy array here)
		$this->template->content->view('news', $news);
		
		// Set a partial's content
		$this->template->footer = 'powered by 5R';
		
		// Publish the template
		$this->template->publish();
	}
}
